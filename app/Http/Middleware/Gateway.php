<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Event;

class Gateway
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $leveling)
     {
        $level = session()->get("level");
        if ($level == NULL) {
            Event::listen("JeroenNoten\LaravelAdminLte\Events\BuildingMenu", function ($e) {
                $e->menu->add([
                    "text" => "Login",
                    "url" => "/login",
                    "icon" => "fa fa-sign-in-alt"
                ]);
            });
            return redirect("/login")->withErrors(["msg" => "Hak Akses Ditolak"]);
        } else {
            $split = explode("|", $leveling);
            if (count($split) > 0) {
                $is_authorize = false;
                if (in_array(1, $split) && $level == 1) {
                    //Admin
                    Event::listen("JeroenNoten\LaravelAdminLte\Events\BuildingMenu", function ($e) {
                        $e->menu->add([
                            "text" => "Dashboard",
                            "url" => "/super",
                            "icon" => "fa fa-home"
                        ]);
                        $e->menu->add([
                            "text" => "User",
                            "url" => "/super/user",
                            "icon" => "fa fa-file",
                            "active" => ["/super/user"]
                        ]);
                        $e->menu->add([
                            "text" => "Wilayah",
                            "url" => "/super/wilayah",
                            "icon" => "fa fa-file",
                            "active" => ["/super/wilayah"]
                        ]);
                    });
                    $is_authorize = true;
                } elseif (in_array(2, $split) && $level == 2) {
                    //Author
                    Event::listen("JeroenNoten\LaravelAdminLte\Events\BuildingMenu", function ($e) {
                        $e->menu->add([
                            "text" => "Dashboard",
                            "url" => "/author",
                            "icon" => "fa fa-home"
                        ]);

                        $e->menu->add([
                            'text'    => 'Master',
                            'icon'    => 'fas fa-file',
                            'submenu' => [
                                [
                                    'text' => 'DAS',
                                    'url'  => '/author/category',
                                ],
                            ],
                        ]);

                        $e->menu->add([
                            'text'    => 'Article',
                            'icon'    => 'fas fa-file',
                            'submenu' => [
                                [
                                    'text' => 'Article',
                                    'url'  => '/author/article',
                                ],
                                [
                                    'text' => 'New Article',
                                    'url'  => '/author/article/create',
                                ],
                            ],
                        ]);
                    });
                    $is_authorize = true;
                } elseif (in_array(3, $split) && $level == 3) {
                    $is_authorize = true;
                    //Normal
                } elseif (in_array(4, $split) && $level == 4) {
                    $is_authorize = true;
                    //Normal
                } elseif (in_array(5, $split) && $level == 5) {
                    //Sekre Daerah
                    Event::listen("JeroenNoten\LaravelAdminLte\Events\BuildingMenu", function ($e) {
                        $e->menu->add([
                            "text" => "Dashboard",
                            "url" => "/wilayah_sekre",
                            "icon" => "fa fa-home"
                        ]);
                        $e->menu->add([
                            "text" => "Kategori",
                            "url" => "/wilayah_sekre/kategori",
                            "icon" => "fa fa-file",
                            "active" => ["/wilayah_sekre/kategori"]
                        ]);
                        $e->menu->add([
                            "text" => "Proposal",
                            "url" => "/wilayah_sekre/proposal",
                            "icon" => "fa fa-file",
                            "active" => ["/wilayah_sekre/proposal"]
                        ]);
                        $e->menu->add([
                            "text" => "Add Proposal",
                            "url" => "/wilayah_sekre/proposal/create",
                            "icon" => "fa fa-file",
                            "active" => ["/wilayah_sekre/proposal/create"]
                        ]);
                    });
                    $is_authorize = true;
                }


                //Semua Hak Akses
                if (in_array(1, $split) || in_array(2, $split)) {
                    Event::listen("JeroenNoten\LaravelAdminLte\Events\BuildingMenu", function ($e) {
                        $e->menu->add([
                            "text" => "Profile",
                            "url" => "/profile",
                            "icon" => "fa fa-users"
                        ]);
                    });
                }

                Event::listen("JeroenNoten\LaravelAdminLte\Events\BuildingMenu", function ($e) {
                    $e->menu->add([
                        "text" => "Logout",
                        "url" => "/logout",
                        "icon" => "fa fa-sign-out-alt"
                    ]);
                });
                if ($is_authorize) {
                    return $next($request);
                }
                return redirect("/login")->withErrors(["message" => "Hak Akses Ditolak"]);
            } else {
                return redirect("/login")->withErrors(["message" => "Hak Akses Ditolak"]);
            }
        }
    }
}

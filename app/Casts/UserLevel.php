<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class UserLevel implements CastsAttributes
{
    const SUPER_ADMIN = 1;
    const ADMIN = 2;
    const list = [
        "SUPER_ADMIN"=>UserLevel::SUPER_ADMIN,
        "ADMIN"=>UserLevel::ADMIN,
    ];
    /**
     * Cast the given value.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return mixed
     */
    public function get($model, $key, $value, $attributes)
    {
        return $value;
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  array  $value
     * @param  array  $attributes
     * @return mixed
     */
    public function set($model, $key, $value, $attributes)
    {
        return $value;
    }

    public static function lang($value)
    {
        switch ($value){
            case UserLevel::SUPER_ADMIN:
                return "Super Admin";
                    break;
            case UserLevel::ADMIN:
                return "Admin";
                    break;
            default:
                return  "Tidak Terdefinisi";
                break;
        }
    }

}

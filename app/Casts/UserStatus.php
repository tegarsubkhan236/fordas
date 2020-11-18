<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class UserStatus implements CastsAttributes
{
    const ACTIVE = 1;
    const UNACTIVE = 2;
    const list = [
        "ACTIVE"=>UserStatus::ACTIVE,
        "UNACTIVE"=>UserStatus::UNACTIVE,
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
            case UserStatus::ACTIVE:
                return "Active";
                    break;
            case UserStatus::UNACTIVE:
                return "UnActive";
                    break;
            default:
                return  "Tidak Terdefinisi";
                break;
        }
    }
}

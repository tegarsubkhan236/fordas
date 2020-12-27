<?php

namespace App\Casts;

use Illuminate\Contracts\Database\Eloquent\CastsAttributes;

class ProposalStatus implements CastsAttributes
{
    const MENUNGGU = 0;
    const KONFIRMASI_KETUA_WILAYAH = 1;
    const KONFIRMASI_KETUA_PUSAT = 2;
    const DITOLAK = 2;

    const list = [
        "MENUNGGU"=>ProposalStatus::MENUNGGU,
        "KONFIRMASI_KETUA_WILAYAH"=>ProposalStatus::KONFIRMASI_KETUA_WILAYAH,
        "KONFIRMASI_KETUA_PUSAT"=>ProposalStatus::KONFIRMASI_KETUA_PUSAT,
        "DITOLAK"=>ProposalStatus::DITOLAK,
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
            case ProposalStatus::MENUNGGU:
                return "Menunggu KOnfirmasi";
                    break;
            case ProposalStatus::KONFIRMASI_KETUA_WILAYAH:
                return "KONFIRMASI KETUA WILAYAH";
                    break;
            case ProposalStatus::KONFIRMASI_KETUA_PUSAT:
                return "KONFIRMASI KETUA PUSAT";
                    break;
            case ProposalStatus::DITOLAK:
                return "DITOLAK";
                    break;
            default:
                return  "Tidak Terdefinisi";
                break;
        }
    }
}

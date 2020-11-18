<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class WilayahDa
 * 
 * @property int $id
 * @property int $wilayah_id
 * @property string $nama
 * @property string $password
 * 
 * @property Wilayah $wilayah
 *
 * @package App\Models
 */
class WilayahDa extends Model
{
	protected $table = 'wilayah_das';
	public $timestamps = false;

	protected $casts = [
		'wilayah_id' => 'int'
	];

	protected $hidden = [
		'password'
	];

	protected $fillable = [
		'wilayah_id',
		'nama',
		'password'
	];

	public function wilayah()
	{
		return $this->belongsTo(Wilayah::class);
	}
}

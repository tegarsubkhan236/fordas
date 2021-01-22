<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class WilayahDa
 * 
 * @property int $id
 * @property int $wilayah_id
 * @property string $nama
 * 
 * @property Wilayah $wilayah
 * @property Collection|Proposal[] $proposals
 * @property Collection|User[] $users
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

	protected $fillable = [
		'wilayah_id',
		'nama'
	];

	public function wilayah()
	{
		return $this->belongsTo(Wilayah::class);
	}

	public function proposals()
	{
		return $this->hasMany(Proposal::class, 'created_by');
	}

	public function users()
	{
		return $this->hasMany(User::class, 'das_id');
	}
}

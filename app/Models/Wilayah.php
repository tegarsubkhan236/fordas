<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Wilayah
 * 
 * @property int $id
 * @property string $nama
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|WilayahDa[] $wilayah_das
 *
 * @package App\Models
 */
class Wilayah extends Model
{
	protected $table = 'wilayah';

	protected $fillable = [
		'nama'
	];

	public function wilayah_das()
	{
		return $this->hasMany(WilayahDa::class);
	}
}

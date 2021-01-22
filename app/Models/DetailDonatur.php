<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DetailDonatur
 * 
 * @property int $id
 * @property int|null $user_id
 * @property string $name
 * @property string $gender
 * @property string $alamat
 * @property string $no_hp
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property User|null $user
 * @property Collection|Donasi[] $donasis
 *
 * @package App\Models
 */
class DetailDonatur extends Model
{
	protected $table = 'detail_donatur';

	protected $casts = [
		'user_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'name',
		'gender',
		'alamat',
		'no_hp'
	];

	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function donasis()
	{
		return $this->hasMany(Donasi::class);
	}
}

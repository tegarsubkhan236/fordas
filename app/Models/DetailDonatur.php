<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DetailDonatur
 *
 * @property int $id
 * @property string $name
 * @property string $gender
 * @property string $alamat
 * @property string $email
 * @property string $no_hp
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class DetailDonatur extends Model
{
	protected $table = 'detail_donatur';

	protected $fillable = [
		'name',
		'gender',
		'alamat',
		'no_hp'
	];
}

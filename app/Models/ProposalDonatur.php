<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProposalDonatur
 * 
 * @property int $id
 * @property string $nama
 * @property string|null $alamat
 * @property int $status
 * @property string $bukti
 * @property int|null $user_id
 * @property float $total_donasi
 * @property int $proposal_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Proposal $proposal
 * @property User|null $user
 *
 * @package App\Models
 */
class ProposalDonatur extends Model
{
	protected $table = 'proposal_donatur';

	protected $casts = [
		'status' => 'int',
		'user_id' => 'int',
		'total_donasi' => 'float',
		'proposal_id' => 'int'
	];

	protected $fillable = [
		'nama',
		'alamat',
		'status',
		'bukti',
		'user_id',
		'total_donasi',
		'proposal_id'
	];

	public function proposal()
	{
		return $this->belongsTo(Proposal::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}

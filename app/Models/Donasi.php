<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Donasi
 * 
 * @property int $id
 * @property int|null $proposal_id
 * @property int|null $total_donasi
 * @property string|null $bukti_transfer
 * @property string|null $keterangan
 * @property int|null $detail_donatur_id
 * @property int $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Proposal|null $proposal
 * @property DetailDonatur|null $detail_donatur
 *
 * @package App\Models
 */
class Donasi extends Model
{
	protected $table = 'donasi';

	protected $casts = [
		'proposal_id' => 'int',
		'total_donasi' => 'int',
		'detail_donatur_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'proposal_id',
		'total_donasi',
		'bukti_transfer',
		'keterangan',
		'detail_donatur_id',
		'status'
	];

	public function proposal()
	{
		return $this->belongsTo(Proposal::class);
	}

	public function detail_donatur()
	{
		return $this->belongsTo(DetailDonatur::class);
	}
}

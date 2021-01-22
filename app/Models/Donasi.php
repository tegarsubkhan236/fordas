<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

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
 * 
 * @property Proposal|null $proposal
 * @property DetailDonatur|null $detail_donatur
 *
 * @package App\Models
 */
class Donasi extends Model
{
	protected $table = 'donasi';
	public $timestamps = false;

	protected $casts = [
		'proposal_id' => 'int',
		'total_donasi' => 'int',
		'detail_donatur_id' => 'int'
	];

	protected $fillable = [
		'proposal_id',
		'total_donasi',
		'bukti_transfer',
		'keterangan',
		'detail_donatur_id'
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

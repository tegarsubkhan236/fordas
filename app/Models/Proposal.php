<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Proposal
 * 
 * @property int $id
 * @property int|null $created_by
 * @property string $judul
 * @property Carbon|null $tgl
 * @property Carbon|null $waktu
 * @property string|null $tempat
 * @property string|null $latar_belakang
 * @property string|null $maksud_tujuan
 * @property string|null $peserta
 * @property string|null $narasumber
 * @property string|null $bahasan
 * @property int $kategori_id
 * @property int $status
 * @property bool $visibility
 * @property bool|null $donate
 * @property string|null $keterangan
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $files
 * 
 * @property ProposalKategori $proposal_kategori
 * @property WilayahDa|null $wilayah_da
 * @property Collection|Donasi[] $donasis
 * @property Collection|ProposalDetail[] $proposal_details
 * @property Collection|ProposalDonatur[] $proposal_donaturs
 *
 * @package App\Models
 */
class Proposal extends Model
{
	protected $table = 'proposal';

	protected $casts = [
		'created_by' => 'int',
		'kategori_id' => 'int',
		'status' => 'int',
		'visibility' => 'bool',
		'donate' => 'bool'
	];

	protected $dates = [
		'tgl',
		'waktu'
	];

	protected $fillable = [
		'created_by',
		'judul',
		'tgl',
		'waktu',
		'tempat',
		'latar_belakang',
		'maksud_tujuan',
		'peserta',
		'narasumber',
		'bahasan',
		'kategori_id',
		'status',
		'visibility',
		'donate',
		'keterangan',
		'files'
	];

	public function proposal_kategori()
	{
		return $this->belongsTo(ProposalKategori::class, 'kategori_id');
	}

	public function wilayah_da()
	{
		return $this->belongsTo(WilayahDa::class, 'created_by');
	}

	public function donasis()
	{
		return $this->hasMany(Donasi::class);
	}

	public function proposal_details()
	{
		return $this->hasMany(ProposalDetail::class);
	}

	public function proposal_donaturs()
	{
		return $this->hasMany(ProposalDonatur::class);
	}
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Proposal
 *
 * @property int $id
 * @property string $judul
 * @property string|null $latar_belakang
 * @property int $kategori_id
 * @property int $status
 * @property bool $visibility
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @property ProposalKategori $proposal_kategori
 *
 * @package App\Models
 */
class Proposal extends Model
{
	protected $table = 'proposal';

	protected $casts = [
		'kategori_id' => 'int',
		'status' => 'int',
		'visibility' => 'bool'
	];

	protected $fillable = [
        'created_by',
		'judul',
		'latar_belakang',
		'kategori_id',
		'status',
		'visibility'
	];

	public function proposal_kategori()
	{
		return $this->belongsTo(ProposalKategori::class, 'kategori_id');
    }

    public function created_at()
    {
        return $this->created_at->format('M d Y');
    }
    public function updated_at()
    {
        return $this->updated_at->format('M d Y');
    }
}

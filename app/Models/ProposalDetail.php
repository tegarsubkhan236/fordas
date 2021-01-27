<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProposalDetail
 * 
 * @property int $id
 * @property int $proposal_id
 * @property string $aktifitas
 * @property string|null $detail_aktifitas
 * @property int|null $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Proposal $proposal
 *
 * @package App\Models
 */
class ProposalDetail extends Model
{
	protected $table = 'proposal_detail';

	protected $casts = [
		'proposal_id' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'proposal_id',
		'aktifitas',
		'detail_aktifitas',
		'status'
	];

	public function proposal()
	{
		return $this->belongsTo(Proposal::class);
	}
}

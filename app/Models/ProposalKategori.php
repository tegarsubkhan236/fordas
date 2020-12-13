<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ProposalKategori
 * 
 * @property int $id
 * @property string $nama
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Proposal[] $proposals
 *
 * @package App\Models
 */
class ProposalKategori extends Model
{
	protected $table = 'proposal_kategori';

	protected $fillable = [
		'nama'
	];

	public function proposals()
	{
		return $this->hasMany(Proposal::class, 'kategori_id');
	}
}

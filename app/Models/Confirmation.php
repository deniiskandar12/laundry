<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Confirmation
 * 
 * @property int $id
 * @property int $orderId
 * @property string $foto
 * @property string $keterangan
 *
 * @package App\Models
 */
class Confirmation extends Model
{
	protected $table = 'confirmations';
	public $timestamps = false;

	protected $casts = [
		'orderId' => 'int'
	];

	protected $fillable = [
		'orderId',
		'foto',
		'keterangan'
	];
}

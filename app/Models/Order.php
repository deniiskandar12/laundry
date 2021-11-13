<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Order
 * 
 * @property int $id
 * @property int $user_id
 * @property string $jenis
 * @property int $qty
 * @property int $harga
 * @property Carbon $created_at
 *
 * @package App\Models
 */
class Order extends Model
{
	protected $table = 'orders';
	public $timestamps = false;

	protected $casts = [
		'user_id' => 'int',
		'qty' => 'int',
		'harga' => 'int'
	];

	protected $fillable = [
		'user_id',
		'jenis',
		'qty',
		'harga'
	];
}

<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Review
 * 
 * @property int $id
 * @property int $idUser
 * @property int $nilai
 * @property string $tanggapan
 *
 * @package App\Models
 */
class Review extends Model
{
	protected $table = 'reviews';
	public $timestamps = false;

	protected $casts = [
		'idUser' => 'int',
		'nilai' => 'int'
	];

	protected $fillable = [
		'idUser',
		'nilai',
		'tanggapan',
		'tanggal'
	];
}

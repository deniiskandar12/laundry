<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Announcement
 * 
 * @property int $id
 * @property string $judul
 * @property string $isi
 * @property Carbon $tanggal
 *
 * @package App\Models
 */
class Announcement extends Model
{
	protected $table = 'announcements';
	public $timestamps = false;

	protected $dates = [
		'tanggal'
	];

	protected $fillable = [
		'judul',
		'isi',
		'tanggal'
	];
}

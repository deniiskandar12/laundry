<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class User
 * 
 * @property int $id
 * @property string $nama
 * @property string $username
 * @property string $password
 * @property string $role
 *
 * @package App\Models
 */
class User extends Model
{
    protected $table = 'users';
    public $timestamps = false;


    protected $fillable = [
        'nama',
        'no_hp',
        'username',
        'password',
        'role'
    ];
}

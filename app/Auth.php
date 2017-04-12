<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auth extends Model
{
	protected $table = 'users';
    protected $primaryKey = 'id_user';
    protected $fillable = ['name', 'email', 'password', 'level'];
}

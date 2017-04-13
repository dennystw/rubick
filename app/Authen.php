<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Authen extends Model
{
	protected $table = 'users';
    protected $primaryKey = 'id_user';
    protected $fillable = ['name', 'email', 'password', 'level'];
}

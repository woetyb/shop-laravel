<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
	protected $fillable = [
		'user_id', 'address', 'phone'
	];

   	protected $table = 'user_address';
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
	protected $dates = ['last_payment','created_at'];
	protected $dateFormat = 'd-m-Y H:i:s';
}

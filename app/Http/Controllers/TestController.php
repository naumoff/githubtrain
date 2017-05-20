<?php

namespace App\Http\Controllers;

use App\Test;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


class TestController extends Controller {
	
	public function index() {
		$now = Carbon::now();
		$test = new Test();
		$test->name = 'Sirik';
		$test->dept = 'warehouse';
		$test->salary = 440;
		$test->last_payment = $now;
		$test->save();
	}
}

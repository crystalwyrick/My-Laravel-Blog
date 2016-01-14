<?php

use Carbon\Carbon;

class UserTableSeeder extends Seeder {
	public function run() {
		$user = new User();
		$user->first_name = 'Crystal';
		$user->last_name = 'Wyrick';
		$user->user_name = 'admin';
		$user->email = 'crystalwyrick@kw.com';
		// getting this from the envvironment - updated env.local file
		$user->password = $_ENV['USER_PASS'];
		$user->birthday = Carbon::create(1969,12,25);
		$user->phone_number = '210-618-6354';
		$user->zip_code = 78244;
		$user->save();
	}
}
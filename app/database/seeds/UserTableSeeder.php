<?php 

class UserTableSeeder extends DatabaseSeeder
{
	public function run()
	{
		$user = new User();
		$user->email = 'mgmy08@gmail.com';
		$user->password = Hash::make('margaret');
		$user->save();
	}
}
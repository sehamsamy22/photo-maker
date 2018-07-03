<?php

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('users')->delete();
    User::create(array(
        'name'     => 'seham',
        'username' => 'seham',
        'email'    => 'sehamsamy755@gmail.com',
        'password' => Hash::make('123456'),
    ));
}

}

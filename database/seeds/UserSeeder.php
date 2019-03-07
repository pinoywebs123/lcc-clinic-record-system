<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'username'		=> 'admin123',
        	'first_name'	=> 'Rica',	
        	'last_name'		=> 'Clemente',
        	'email'			=> 'email@gmail.com',
        	'password'		=>  bcrypt('admin123')
        ]);
    }
}

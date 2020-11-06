<?php

use Illuminate\Database\Seeder;
use App\Models\UserManagement\User;

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
        	'name' => 'Bunthoeun Tok',
        	'email' => 'bunthoeun.code@gmail.com',
			'password' => bcrypt('admin')
		]);

        User::create([
            'name' => 'Academic',
            'email' => 'academic@gmail.com',
            'password' => bcrypt('academic')
        ]);
    }
}

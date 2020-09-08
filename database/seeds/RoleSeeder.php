<?php

use Illuminate\Database\Seeder;
use App\Models\User\Role;
use App\Models\User\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = Role::create([
            'name' => 'Administrator',
            'slug' => 'administrator'
        ]);
        $academic = Role::create([
            'name' => 'Academic',
            'slug' => 'academic'
        ]);

        $admin->users()->attach(User::where('email', 'bunthoeun.code@gmail.com')->first());
        $academic->users()->attach(User::where('email', 'academic@gmail.com')->first());
    }
}

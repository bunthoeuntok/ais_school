<?php

use App\SchoolSetup\Campus;
use Illuminate\Database\Seeder;

class CampusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Campus::create([
        	'branch_id' => 1,
        	'name' => 'Campus One'
        ]);
    }
}

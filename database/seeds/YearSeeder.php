<?php

use App\Models\UserManagement\User;
use App\SchoolSetup\Campus;
use App\SchoolSetup\Year;
use Illuminate\Database\Seeder;

class YearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $year = Year::create([
	        	'name' => '2022 - 2021',
	        	'start_date' => '2020-01-01',
	        	'end_date' => '2021-01-01',
	        ]);

		$campuses = Campus::all();
		$user = User::find(1);
		foreach ($campuses as $campus) {
			$user->campuses()->attach($campus->id, ['year_id' => $year->id]);
		}
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Models\Setting\Language;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Language::create([
            'code' => 'kh',
            'name' => 'ភាសាខ្មែរ',
            'image' => 'assets/images/lang/100/kh.png'
        ]);

        Language::create([
            'code' => 'en',
            'name' => 'English',
            'image' => 'assets/images/lang/100/en.png'
        ]);

        Language::create([
            'code' => 'ch',
            'name' => 'Chinese',
            'image' => 'assets/images/lang/100/ch.png'
        ]);
    }
}

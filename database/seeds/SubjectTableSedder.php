<?php

use Illuminate\Database\Seeder;

class SubjectTableSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            'subject_code' => 'IT 115',
            'subject_description' => 'Filipino',
            'subject_time' => 'MWF 2:00-4:00 PM'
        ]);

        DB::table('subjects')->insert([
            'subject_code' => 'IT 116',
            'subject_description' => 'English 1',
            'subject_time' => 'MWF 1:00-2:00 PM'
        ]);

        DB::table('subjects')->insert([
            'subject_code' => 'IT 115',
            'subject_description' => 'NatScie 1',
            'subject_time' => 'TTH 2:00-3:00 PM'
        ]);
    }
}

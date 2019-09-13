<?php

use Illuminate\Database\Seeder;

class AddNumOfStudentsOptions extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('num_of_students_options')->insert([
            'value'=> 'Less than 100'
        ]);
        DB::table('num_of_students_options')->insert([
            'value'=> '100 - 500'
        ]);
        DB::table('num_of_students_options')->insert([
            'value'=> '500 - 1000'
        ]);
        DB::table('num_of_students_options')->insert([
            'value'=> '1000 - 2000'
        ]);
        DB::table('num_of_students_options')->insert([
            'value'=> 'More than 2000'
        ]);
    }
}

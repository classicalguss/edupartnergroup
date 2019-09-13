<?php

use Illuminate\Database\Seeder;

class OtherOptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('school_sector_options')->insert([
            'value'=> 'Private'
        ]);
        DB::table('school_sector_options')->insert([
            'value'=> 'Public'
        ]);
        DB::table('services_options')->insert([
            'value'=> 'Free Self-Audit'
        ]);
        DB::table('services_options')->insert([
            'value'=> 'Educational Consultants Audit'
        ]);
        DB::table('services_options')->insert([
            'value'=> 'School Management & Operating model development'
        ]);
        DB::table('services_options')->insert([
            'value'=> 'Teachers training'
        ]);
        DB::table('services_options')->insert([
            'value'=> 'Teachers recruitment'
        ]);
        DB::table('services_options')->insert([
            'value'=> 'Other inquiries'
        ]);
    }
}

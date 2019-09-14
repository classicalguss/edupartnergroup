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
        DB::table('school_sector_options')->truncate();
        DB::table('school_sector_options')->insert([
            'value'=> 'Private School'
        ]);
        DB::table('school_sector_options')->insert([
            'value'=> 'Public School'
        ]);
        DB::table('service_options')->truncate();
        DB::table('service_options')->insert([
            'key' => 'free-audit',
            'value'=> 'Free Self-Audit'
        ]);
        DB::table('service_options')->insert([
            'key' => 'educational-consultants-audit',
            'value'=> 'Educational Consultants Audit'
        ]);
        DB::table('service_options')->insert([
            'key' => 'school-management',
            'value'=> 'School Management & Operating model development'
        ]);
        DB::table('service_options')->insert([
            'key' => 'teachers-training',
            'value'=> 'Teachers training'
        ]);
        DB::table('service_options')->insert([
            'key' => 'teachers-recruitment',
            'value'=> 'Teachers recruitment'
        ]);
        DB::table('service_options')->insert([
            'key' => 'other-inquiries',
            'value'=> 'Other inquiries'
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class LabelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('labels')->truncate();
        DB::table('labels')->insert([
            'key' => 'school_audit_slider',
            'description' => 'Slider Text for the Audit service',
            'value'=> 'We at "Eduvation group" have devised a special model to audit schools and determine their strengths and weaknesses. Our audit model consists of 8 different capabilities.'
        ]);
        DB::table('labels')->insert([
            'key' => 'school_management_slider',
            'description' => 'Slider Text for the School Management service',
            'value'=> 'We partner with our clients to deliver an ongoing educational management structure or operation of the school to ensure sustainability and demonstrate schools vision and mission.'
        ]);
        DB::table('labels')->insert([
            'key' => 'teachers_training_slider',
            'description' => 'Slider Text for the Teachers training service',
            'value'=> 'Partnering with a leading establishment in Cambridge Educational Services, we aim to play an effective role in improving the overall performance of educational establishments locally and regionally.'
        ]);
        DB::table('labels')->insert([
            'key' => 'teachers_recruitment_slider',
            'description' => 'Slider Text for Teachers recruitment service',
            'value'=> 'At Eduvation Group, we provide customized hiring and executive search solutions for schools. We recruit for the best qualified teachers in Education, with a strong emphasis on schools that offer international programs including IB (PYP, MYP and DP) in addition to IGCSE, A-Level and many other programs.'
        ]);
        DB::table('labels')->insert([
            'key' => 'home_about_us_1',
            'description' => 'About is in homepage first paragraph (besides the image)',
            'value'=> 'We are a diversified group of educators with experience in many international programs including the International Baccalaureate (DP, MYP, PYP), IGCSE, SAT, AP, and other programs.'
        ]);
        DB::table('labels')->insert([
            'key' => 'home_about_us_2',
            'description' => 'About us in homepage middle paragraph',
            'value'=> 'Our team members held senior positions in different educational establishments; Examiners and Assistant Examiners, Workshop Leaders, Moderators, subject matter experts, Heads of Departments, Subject Coordinators, PYP Coordinators, MYP Coordinators, DP Coordinators and  Approaches to Learning (ATL) coordinators.'
        ]);
        DB::table('labels')->insert([
            'key' => 'home_about_us_3',
            'description' => 'About us in home page last paragraph',
            'value'=> 'Also, many members of our team have a solid experience in digital transformation including digital content design and development, instructional design, adaptive learning models, and computer based assessment.'
        ]);
        DB::table('labels')->insert([
            'key' => 'school_audit_box',
            'description' => 'Slider Text for the Audit service',
            'value'=> 'We use a comprehensive auditing model that uses 8 different capabilities to determine what might need to be improved.'
        ]);
        DB::table('labels')->insert([
            'key' => 'school_management_box',
            'description' => 'Slider Text for the School Management service',
            'value'=> 'We Partner with our clients to deliver an ongoing educational management structure to
                    ensure success and sustainability.'
        ]);
        DB::table('labels')->insert([
            'key' => 'teachers_training_box',
            'description' => 'Slider Text for the Teachers training service',
            'value'=> 'Our leadership training model is a competency based one. It covers the most important
                    educational leadership competencies'
        ]);
        DB::table('labels')->insert([
            'key' => 'teachers_recruitment_box',
            'description' => 'Slider Text for Teachers recruitment service',
            'value'=> 'Our systematic approach when recruiting candidates for job openings is geared toward
                    creating long-term solutions.'
        ]);
        DB::table('labels')->insert([
            'key' => 'about_main',
            'description' => 'The main text in about us page',
            'value'=> 'As one of the leading Education Management firms in the region, Eduvation Group through its strategic partnership with the leading educational establishments worldwide include Cambridge Educational services; a well-established world leader in academic services, publishing, and assessments, City & Guilds of UK; another world leader in academic certification and accreditation, and All Learn aims to play an effective role in improving the overall performance of educational establishments locally and regionally. This is principally done through partnering with the formal educational regulatory bodies (such as Ministries of Education) to elevate their ability to maintain high quality of education based on the highest internationally accepted standards. Eduvation Group partnership arrangements with these establishments include sharing of resources, programs assurance, auditing, and QA procedures.'
        ]);
        DB::table('labels')->insert([
            'key' => 'our_area_of_expertise',
            'description' => 'Our area of expertise upper text',
            'value'=> 'Our areas of expertise cover the following educational domains in many Educational programs including IB, GCSE, SAT, and local systems in the Arab World:'
        ]);
        DB::table('labels')->insert([
            'key' => 'our_area_of_expertise_1',
            'description' => 'Area of expertise',
            'value'=> 'Curriculum Development (Taught, written, and assessed curriculum) including identifying Learning standards, Scope and sequencing, content provision.'
        ]);
        DB::table('labels')->insert([
            'key' => 'our_area_of_expertise_2',
            'description' => 'Area of expertise',
            'value'=> 'Instructional Design (Building curriculum for specific delivery platforms).'
        ]);
        DB::table('labels')->insert([
            'key' => 'our_area_of_expertise_3',
            'description' => 'Area of expertise',
            'value'=> 'Schools operating modeling'
        ]);
        DB::table('labels')->insert([
            'key' => 'our_area_of_expertise_4',
            'description' => 'Area of expertise',
            'value'=> 'Schools structuring and Re-structuring'
        ]);
        DB::table('labels')->insert([
            'key' => 'our_area_of_expertise_5',
            'description' => 'Area of expertise',
            'value'=> 'Adaptive learning'
        ]);
        DB::table('labels')->insert([
            'key' => 'our_area_of_expertise_6',
            'description' => 'Area of expertise',
            'value'=> 'Digital curriculum and virtual learning environments'
        ]);
        DB::table('labels')->insert([
            'key' => 'our_area_of_expertise_7',
            'description' => 'Area of expertise',
            'value'=> 'Schools Administration and Operations'
        ]);
        DB::table('labels')->insert([
            'key' => 'our_area_of_expertise_8',
            'description' => 'Area of expertise',
            'value'=> 'Schools reviews and inspections'
        ]);
    }
}

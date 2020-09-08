<?php

use Illuminate\Database\Seeder;

class TrainingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('trainings')->delete();
        
        \DB::table('trainings')->insert(array (
            0 => 
            array (
                'id' => 5,
                'personal_id' => 8,
                'title' => 'Internship',
                'start_date' => '2019-07-01',
                'end_date' => '2019-08-01',
                'institution_name' => 'BMP',
                'subject' => 'Psychology',
                'sponsor' => 'BMP',
                'country_of_training' => 'Nepal',
                'created_at' => '2019-07-28 10:41:33',
                'updated_at' => '2019-07-29 04:35:14',
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            1 => 
            array (
                'id' => 9,
                'personal_id' => 8,
                'title' => 'Malaria',
                'start_date' => NULL,
                'end_date' => NULL,
                'institution_name' => NULL,
                'subject' => NULL,
                'sponsor' => NULL,
                'country_of_training' => NULL,
                'created_at' => '2019-07-29 09:59:55',
                'updated_at' => '2019-07-29 09:59:55',
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            2 => 
            array (
                'id' => 11,
                'personal_id' => 8,
                'title' => 'Common Cold',
                'start_date' => '2076-04-09',
                'end_date' => '2076-04-25',
                'institution_name' => NULL,
                'subject' => NULL,
                'sponsor' => NULL,
                'country_of_training' => NULL,
                'created_at' => '2019-07-30 11:17:39',
                'updated_at' => '2019-08-04 09:26:09',
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            3 => 
            array (
                'id' => 12,
                'personal_id' => 21,
                'title' => 'Training course in leprosy',
                'start_date' => '2076-04-01',
                'end_date' => '2076-04-23',
                'institution_name' => 'Training Centre, Pokhara',
                'subject' => 'Leprosy',
                'sponsor' => 'Not Known',
                'country_of_training' => 'Nepal',
                'created_at' => '2019-08-01 04:27:27',
                'updated_at' => '2019-08-05 09:25:37',
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            4 => 
            array (
                'id' => 13,
                'personal_id' => 21,
                'title' => 'Training in Depoprovera',
                'start_date' => '2076-04-10',
                'end_date' => '2076-04-25',
                'institution_name' => 'FP/MCH Project, Kathmandu',
                'subject' => 'Deproprovera',
                'sponsor' => 'Not Known',
                'country_of_training' => 'Nepal',
                'created_at' => '2019-08-01 04:29:50',
                'updated_at' => '2019-08-01 04:29:50',
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            5 => 
            array (
                'id' => 14,
                'personal_id' => 21,
                'title' => 'Health Management Training',
                'start_date' => '2076-04-01',
                'end_date' => '2076-04-17',
                'institution_name' => 'TU/BU Linkage, TUIOM',
                'subject' => 'General Health Administration & Mgmt',
                'sponsor' => 'Not known',
                'country_of_training' => 'Nepal',
                'created_at' => '2019-08-01 04:32:40',
                'updated_at' => '2019-08-01 04:32:40',
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            6 => 
            array (
                'id' => 15,
                'personal_id' => 22,
                'title' => 'Nursing',
                'start_date' => '2076-04-01',
                'end_date' => '2076-04-11',
                'institution_name' => 'Nepal Nursing Council',
                'subject' => 'Public Health, Nursing',
                'sponsor' => 'Self',
                'country_of_training' => NULL,
                'created_at' => '2019-08-01 05:20:56',
                'updated_at' => '2019-08-01 05:20:56',
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            7 => 
            array (
                'id' => 16,
                'personal_id' => 22,
                'title' => 'Trainers Training',
                'start_date' => '2075-11-01',
                'end_date' => '2076-10-10',
                'institution_name' => 'Ministy of General Administartion',
                'subject' => 'Nursing',
                'sponsor' => 'HMG-Nepal',
                'country_of_training' => 'Nepal',
                'created_at' => '2019-08-01 05:22:05',
                'updated_at' => '2019-08-01 05:22:05',
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            8 => 
            array (
                'id' => 17,
                'personal_id' => 22,
                'title' => 'Advanced Nursing Administration',
                'start_date' => '2076-04-01',
                'end_date' => '2077-06-24',
                'institution_name' => 'Royal College of Nursing',
                'subject' => 'Ward Mgmt. & Nursing Admn.',
                'sponsor' => 'Not Known',
                'country_of_training' => 'Nepal',
                'created_at' => '2019-08-01 05:23:01',
                'updated_at' => '2019-08-01 05:23:01',
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            9 => 
            array (
                'id' => 18,
                'personal_id' => 23,
                'title' => 'Paediatric Haematology/Oncology',
                'start_date' => '2076-04-01',
                'end_date' => '0000-00-00',
                'institution_name' => 'Rajiv Gandhi Cancer Institute & Research Center',
                'subject' => 'Paediatric Haematology/Oncology',
                'sponsor' => 'Self',
                'country_of_training' => 'India',
                'created_at' => '2019-08-01 05:35:03',
                'updated_at' => '2019-08-01 05:35:03',
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            10 => 
            array (
                'id' => 19,
                'personal_id' => 25,
                'title' => 'Mgmt of tuberculosis',
                'start_date' => '2076-04-01',
                'end_date' => '2076-04-26',
                'institution_name' => 'State Health Department',
                'subject' => 'Managerial of TB Cases',
                'sponsor' => 'Not known',
                'country_of_training' => 'USA',
                'created_at' => '2019-08-01 06:03:04',
                'updated_at' => '2019-08-01 06:03:04',
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            11 => 
            array (
                'id' => 20,
                'personal_id' => 25,
                'title' => 'AIDS',
                'start_date' => '2076-04-06',
                'end_date' => '0000-00-00',
                'institution_name' => 'State Health Department',
                'subject' => 'Managers of AIDS',
                'sponsor' => 'Not Known',
                'country_of_training' => 'USA',
                'created_at' => '2019-08-01 06:03:36',
                'updated_at' => '2019-08-01 06:03:36',
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            12 => 
            array (
                'id' => 21,
                'personal_id' => 25,
                'title' => 'Health Care Admin. Hospital Mgmt',
                'start_date' => '2076-01-04',
                'end_date' => '2076-09-18',
                'institution_name' => 'Technion Haifa',
                'subject' => 'Health Admin',
                'sponsor' => 'Israel Govt.',
                'country_of_training' => 'Nepal',
                'created_at' => '2019-08-01 06:04:26',
                'updated_at' => '2019-08-01 06:04:26',
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            13 => 
            array (
                'id' => 22,
                'personal_id' => 25,
                'title' => 'Minilap',
                'start_date' => '2076-04-06',
                'end_date' => '0000-00-00',
                'institution_name' => 'NHTC',
                'subject' => 'Minilap',
                'sponsor' => 'HMG-Nepal',
                'country_of_training' => 'Nepal',
                'created_at' => '2019-08-01 06:04:57',
                'updated_at' => '2019-08-01 06:04:57',
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            14 => 
            array (
                'id' => 23,
                'personal_id' => 26,
                'title' => 'Public Health',
                'start_date' => '2076-04-01',
                'end_date' => '0000-00-00',
                'institution_name' => 'Japan',
                'subject' => 'T.B. Control',
                'sponsor' => 'JICA',
                'country_of_training' => 'Japan',
                'created_at' => '2019-08-01 06:20:36',
                'updated_at' => '2019-08-01 06:20:36',
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            15 => 
            array (
                'id' => 24,
                'personal_id' => 26,
                'title' => 'RH/FP Service Management',
                'start_date' => '2076-01-02',
                'end_date' => '2076-07-29',
                'institution_name' => 'Indonesia',
                'subject' => 'RH/FP Service Management',
                'sponsor' => 'UNFPA',
                'country_of_training' => 'Indonesia',
                'created_at' => '2019-08-01 06:21:19',
                'updated_at' => '2019-08-01 06:21:19',
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            16 => 
            array (
                'id' => 62,
                'personal_id' => 28,
                'title' => 'Internship',
                'start_date' => '2076-04-19',
                'end_date' => '0000-00-00',
                'institution_name' => 'State Health Department',
                'subject' => 'Science',
                'sponsor' => 'Not known',
                'country_of_training' => 'Nepal',
                'created_at' => '2019-08-04 06:24:24',
                'updated_at' => '2019-08-04 06:24:24',
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            17 => 
            array (
                'id' => 63,
                'personal_id' => 28,
                'title' => 'Internship',
                'start_date' => '2076-04-22',
                'end_date' => '0000-00-00',
                'institution_name' => 'Test',
                'subject' => NULL,
                'sponsor' => NULL,
                'country_of_training' => NULL,
                'created_at' => '2019-08-04 06:24:24',
                'updated_at' => '2019-08-04 06:24:24',
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            18 => 
            array (
                'id' => 72,
                'personal_id' => 28,
                'title' => NULL,
                'start_date' => '2076-04-17',
                'end_date' => '2076-04-18',
                'institution_name' => NULL,
                'subject' => NULL,
                'sponsor' => NULL,
                'country_of_training' => NULL,
                'created_at' => '2019-08-04 06:38:16',
                'updated_at' => '2019-08-04 06:38:16',
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            19 => 
            array (
                'id' => 76,
                'personal_id' => 8,
                'title' => NULL,
                'start_date' => '2076-04-11',
                'end_date' => '2076-04-23',
                'institution_name' => NULL,
                'subject' => NULL,
                'sponsor' => NULL,
                'country_of_training' => NULL,
                'created_at' => '2019-08-04 06:55:36',
                'updated_at' => '2019-08-04 09:39:41',
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            20 => 
            array (
                'id' => 77,
                'personal_id' => 45,
                'title' => 'qweqwewqeqw',
                'start_date' => NULL,
                'end_date' => NULL,
                'institution_name' => NULL,
                'subject' => NULL,
                'sponsor' => NULL,
                'country_of_training' => NULL,
                'created_at' => '2019-08-18 06:07:48',
                'updated_at' => '2019-08-18 06:07:48',
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
        ));
        
        
    }
}
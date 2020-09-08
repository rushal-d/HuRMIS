<?php

use Illuminate\Database\Seeder;

class PromotionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('promotions')->delete();
        
        \DB::table('promotions')->insert(array (
            0 => 
            array (
                'id' => 4,
                'personal_id' => 8,
                'date_of_effect' => '2076-04-13',
                'decision_date' => '0000-00-00',
                'authority' => NULL,
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-07-31 10:29:54',
                'updated_at' => '2019-07-31 10:29:54',
                'post_id' => 6,
            ),
            1 => 
            array (
                'id' => 5,
                'personal_id' => 8,
                'date_of_effect' => '2076-04-12',
                'decision_date' => '2076-04-21',
                'authority' => NULL,
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-07-31 10:38:04',
                'updated_at' => '2019-07-31 10:38:04',
                'post_id' => 3,
            ),
            2 => 
            array (
                'id' => 7,
                'personal_id' => 21,
                'date_of_effect' => '2076-04-01',
                'decision_date' => '2076-08-07',
                'authority' => NULL,
                'level' => 'NA',
                'remarks' => NULL,
                'created_at' => '2019-08-01 04:39:18',
                'updated_at' => '2019-08-01 04:39:18',
                'post_id' => 6,
            ),
            3 => 
            array (
                'id' => 8,
                'personal_id' => 21,
                'date_of_effect' => '2076-04-01',
                'decision_date' => '2076-06-02',
                'authority' => NULL,
                'level' => 'NA',
                'remarks' => NULL,
                'created_at' => '2019-08-01 04:39:43',
                'updated_at' => '2019-08-01 04:39:43',
                'post_id' => 2,
            ),
            4 => 
            array (
                'id' => 9,
                'personal_id' => 22,
                'date_of_effect' => '2076-04-03',
                'decision_date' => '2076-04-03',
                'authority' => NULL,
                'level' => 'NA',
                'remarks' => NULL,
                'created_at' => '2019-08-01 05:26:10',
                'updated_at' => '2019-08-01 05:26:10',
                'post_id' => 1,
            ),
            5 => 
            array (
                'id' => 10,
                'personal_id' => 23,
                'date_of_effect' => '2076-04-10',
                'decision_date' => '2076-07-08',
                'authority' => NULL,
                'level' => 'Officer 10th',
                'remarks' => NULL,
                'created_at' => '2019-08-01 05:40:22',
                'updated_at' => '2019-08-01 05:40:22',
                'post_id' => 7,
            ),
            6 => 
            array (
                'id' => 11,
                'personal_id' => 24,
                'date_of_effect' => '2076-04-11',
                'decision_date' => '0000-00-00',
                'authority' => NULL,
                'level' => 'Officer 10th',
                'remarks' => NULL,
                'created_at' => '2019-08-01 05:46:30',
                'updated_at' => '2019-08-01 05:46:30',
                'post_id' => 7,
            ),
            7 => 
            array (
                'id' => 12,
                'personal_id' => 24,
                'date_of_effect' => '2076-09-20',
                'decision_date' => NULL,
                'authority' => NULL,
                'level' => 'Officer 9th',
                'remarks' => NULL,
                'created_at' => '2019-08-01 05:46:57',
                'updated_at' => '2019-08-01 05:46:57',
                'post_id' => 5,
            ),
            8 => 
            array (
                'id' => 13,
                'personal_id' => 25,
                'date_of_effect' => '2076-04-17',
                'decision_date' => '2076-04-18',
                'authority' => NULL,
                'level' => 'Officer 8th',
                'remarks' => NULL,
                'created_at' => '2019-08-01 06:05:43',
                'updated_at' => '2019-08-01 06:05:43',
                'post_id' => 11,
            ),
            9 => 
            array (
                'id' => 14,
                'personal_id' => 26,
                'date_of_effect' => '2076-04-29',
                'decision_date' => '0000-00-00',
                'authority' => NULL,
                'level' => 'Officer 8th',
                'remarks' => NULL,
                'created_at' => '2019-08-01 06:22:51',
                'updated_at' => '2019-08-01 06:22:51',
                'post_id' => 13,
            ),
            10 => 
            array (
                'id' => 15,
                'personal_id' => 26,
                'date_of_effect' => '2076-04-12',
                'decision_date' => '2076-04-22',
                'authority' => NULL,
                'level' => 'NA',
                'remarks' => NULL,
                'created_at' => '2019-08-01 06:23:10',
                'updated_at' => '2019-08-01 06:23:10',
                'post_id' => 6,
            ),
            11 => 
            array (
                'id' => 16,
                'personal_id' => 26,
                'date_of_effect' => '2076-04-10',
                'decision_date' => '2076-04-18',
                'authority' => NULL,
                'level' => 'NA',
                'remarks' => NULL,
                'created_at' => '2019-08-01 06:23:30',
                'updated_at' => '2019-08-01 06:23:30',
                'post_id' => 5,
            ),
            12 => 
            array (
                'id' => 17,
                'personal_id' => 27,
                'date_of_effect' => '2076-04-01',
                'decision_date' => '0000-00-00',
                'authority' => NULL,
                'level' => '5/6/7',
                'remarks' => NULL,
                'created_at' => '2019-08-01 06:38:25',
                'updated_at' => '2019-08-01 06:38:25',
                'post_id' => 14,
            ),
            13 => 
            array (
                'id' => 18,
                'personal_id' => 22,
                'date_of_effect' => '2076-04-10',
                'decision_date' => NULL,
                'authority' => NULL,
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-01 09:01:47',
                'updated_at' => '2019-08-01 09:01:47',
                'post_id' => 4,
            ),
            14 => 
            array (
                'id' => 19,
                'personal_id' => 8,
                'date_of_effect' => '2076-04-03',
                'decision_date' => '2076-04-10',
                'authority' => NULL,
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-14 10:35:12',
                'updated_at' => '2019-08-14 10:35:12',
                'post_id' => 3,
            ),
            15 => 
            array (
                'id' => 20,
                'personal_id' => 8,
                'date_of_effect' => NULL,
                'decision_date' => NULL,
                'authority' => NULL,
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-14 10:36:42',
                'updated_at' => '2019-08-14 10:36:42',
                'post_id' => 2,
            ),
        ));
        
        
    }
}
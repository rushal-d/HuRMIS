<?php

use Illuminate\Database\Seeder;

class TransfersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('transfers')->delete();
        
        \DB::table('transfers')->insert(array (
            0 => 
            array (
                'id' => 3,
                'personal_id' => 8,
                'start_date' => '2076-04-02',
                'end_date' => '2076-04-23',
                'institution_transferedto' => NULL,
                'authority' => NULL,
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-07-31 10:06:08',
                'updated_at' => '2019-08-04 09:38:03',
                'post_id' => 4,
                'experience' => NULL,
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            1 => 
            array (
                'id' => 4,
                'personal_id' => 21,
                'start_date' => '2076-04-01',
                'end_date' => NULL,
                'institution_transferedto' => 'District Health Office',
                'authority' => 'Department of',
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-01 04:34:19',
                'updated_at' => '2019-08-01 04:34:19',
                'post_id' => 6,
                'experience' => NULL,
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            2 => 
            array (
                'id' => 5,
                'personal_id' => 21,
                'start_date' => '2076-04-01',
                'end_date' => '2076-04-17',
                'institution_transferedto' => 'District Health Office',
                'authority' => 'Ministry of Health',
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-01 04:34:48',
                'updated_at' => '2019-08-01 04:34:48',
                'post_id' => 6,
                'experience' => NULL,
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            3 => 
            array (
                'id' => 6,
                'personal_id' => 21,
                'start_date' => '2076-04-10',
                'end_date' => '2076-06-23',
                'institution_transferedto' => 'Department of Health',
                'authority' => 'Ministry of health',
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-01 04:35:14',
                'updated_at' => '2019-08-01 04:35:14',
                'post_id' => 6,
                'experience' => NULL,
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            4 => 
            array (
                'id' => 7,
                'personal_id' => 21,
                'start_date' => '2076-03-04',
                'end_date' => '2076-07-22',
                'institution_transferedto' => 'Regional Health',
                'authority' => 'Ministry of health',
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-01 04:36:00',
                'updated_at' => '2019-08-01 04:36:00',
                'post_id' => 6,
                'experience' => NULL,
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            5 => 
            array (
                'id' => 8,
                'personal_id' => 21,
                'start_date' => '2076-04-10',
                'end_date' => '2076-04-18',
                'institution_transferedto' => 'Teku Hospital',
                'authority' => 'Department of health',
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-01 04:36:33',
                'updated_at' => '2019-08-01 04:36:33',
                'post_id' => 2,
                'experience' => NULL,
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            6 => 
            array (
                'id' => 9,
                'personal_id' => 21,
                'start_date' => '2075-12-04',
                'end_date' => '2076-10-10',
                'institution_transferedto' => 'Lumbini Primary',
                'authority' => 'District Public Health',
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-01 04:37:08',
                'updated_at' => '2019-08-01 04:37:08',
                'post_id' => 3,
                'experience' => NULL,
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            7 => 
            array (
                'id' => 10,
                'personal_id' => 22,
                'start_date' => '2076-04-03',
                'end_date' => '2076-04-11',
                'institution_transferedto' => 'Bir Hospital',
                'authority' => 'Ministry of health',
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-01 05:23:51',
                'updated_at' => '2019-08-01 05:23:51',
                'post_id' => 1,
                'experience' => NULL,
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            8 => 
            array (
                'id' => 11,
                'personal_id' => 22,
                'start_date' => '2076-04-08',
                'end_date' => NULL,
                'institution_transferedto' => 'Bharatpur Hospital',
                'authority' => 'Ministry of health',
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-01 05:24:10',
                'updated_at' => '2019-08-01 05:24:10',
                'post_id' => 1,
                'experience' => NULL,
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            9 => 
            array (
                'id' => 12,
                'personal_id' => 22,
                'start_date' => '2076-04-09',
                'end_date' => '0000-00-00',
                'institution_transferedto' => 'Bir Hospital',
                'authority' => 'Ministry of health',
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-01 05:24:28',
                'updated_at' => '2019-08-01 05:24:28',
                'post_id' => 1,
                'experience' => NULL,
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            10 => 
            array (
                'id' => 13,
                'personal_id' => 22,
                'start_date' => '2076-04-09',
                'end_date' => '2076-04-17',
                'institution_transferedto' => 'Bir Hospital',
                'authority' => 'Department of health',
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-01 05:25:23',
                'updated_at' => '2019-08-01 05:25:23',
                'post_id' => 2,
                'experience' => NULL,
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            11 => 
            array (
                'id' => 14,
                'personal_id' => 23,
                'start_date' => '2076-04-02',
                'end_date' => NULL,
                'institution_transferedto' => 'Kanti Children Hospital',
                'authority' => 'Ministry of health',
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-01 05:36:59',
                'updated_at' => '2019-08-01 05:36:59',
                'post_id' => 7,
                'experience' => NULL,
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            12 => 
            array (
                'id' => 15,
                'personal_id' => 23,
                'start_date' => '2076-04-01',
                'end_date' => '2076-04-10',
                'institution_transferedto' => 'Ministry of Health',
                'authority' => 'Ministry of health',
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-01 05:37:22',
                'updated_at' => '2019-08-01 05:37:22',
                'post_id' => 7,
                'experience' => NULL,
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            13 => 
            array (
                'id' => 16,
                'personal_id' => 23,
                'start_date' => '2076-04-01',
                'end_date' => NULL,
                'institution_transferedto' => 'Kanti Children Hospital',
                'authority' => 'Ministry of health',
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-01 05:37:42',
                'updated_at' => '2019-08-01 05:37:42',
                'post_id' => 8,
                'experience' => NULL,
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            14 => 
            array (
                'id' => 17,
                'personal_id' => 23,
                'start_date' => '2076-04-02',
                'end_date' => '2076-04-11',
                'institution_transferedto' => 'Lumbini Zonal Hospital',
                'authority' => 'Ministry of health',
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-01 05:38:07',
                'updated_at' => '2019-08-01 05:38:07',
                'post_id' => 8,
                'experience' => NULL,
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            15 => 
            array (
                'id' => 18,
                'personal_id' => 23,
                'start_date' => '2076-04-10',
                'end_date' => '0000-00-00',
                'institution_transferedto' => 'Dharan Hospital',
                'authority' => 'Ministry of health',
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-01 05:38:30',
                'updated_at' => '2019-08-01 05:38:30',
                'post_id' => 1,
                'experience' => NULL,
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            16 => 
            array (
                'id' => 19,
                'personal_id' => 24,
                'start_date' => '2076-04-17',
                'end_date' => NULL,
                'institution_transferedto' => 'Koshi Zonal Hospital',
                'authority' => 'Ministry of health',
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-01 05:48:43',
                'updated_at' => '2019-08-01 05:48:43',
                'post_id' => 7,
                'experience' => NULL,
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            17 => 
            array (
                'id' => 20,
                'personal_id' => 24,
                'start_date' => '2076-04-24',
                'end_date' => NULL,
                'institution_transferedto' => 'Bir Hospital',
                'authority' => 'Ministry of health',
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-01 05:49:12',
                'updated_at' => '2019-08-01 05:49:12',
                'post_id' => 4,
                'experience' => NULL,
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            18 => 
            array (
                'id' => 21,
                'personal_id' => 24,
                'start_date' => '2076-04-17',
                'end_date' => NULL,
                'institution_transferedto' => 'Koshi Zonal Hospital',
                'authority' => 'Ministry of health',
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-01 05:49:30',
                'updated_at' => '2019-08-01 05:49:30',
                'post_id' => 8,
                'experience' => NULL,
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            19 => 
            array (
                'id' => 22,
                'personal_id' => 24,
                'start_date' => '2076-04-24',
                'end_date' => NULL,
                'institution_transferedto' => 'Koshi Zonal Hospital',
                'authority' => 'Ministry of health',
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-01 05:50:26',
                'updated_at' => '2019-08-01 05:50:26',
                'post_id' => 8,
                'experience' => NULL,
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            20 => 
            array (
                'id' => 23,
                'personal_id' => 25,
                'start_date' => '2076-04-24',
                'end_date' => NULL,
                'institution_transferedto' => 'Mulpani Primary',
                'authority' => 'Ministry of health',
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-01 06:06:09',
                'updated_at' => '2019-08-01 06:06:09',
                'post_id' => 10,
                'experience' => NULL,
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            21 => 
            array (
                'id' => 24,
                'personal_id' => 25,
                'start_date' => '2076-04-24',
                'end_date' => '0000-00-00',
                'institution_transferedto' => 'Mulpani Primary',
                'authority' => 'Department of health',
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-01 06:06:50',
                'updated_at' => '2019-08-01 06:06:50',
                'post_id' => 8,
                'experience' => NULL,
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            22 => 
            array (
                'id' => 25,
                'personal_id' => 25,
                'start_date' => '2076-04-20',
                'end_date' => '2076-10-18',
                'institution_transferedto' => 'Gulmi Hospital',
                'authority' => 'Ministry of health',
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-01 06:07:14',
                'updated_at' => '2019-08-01 06:07:14',
                'post_id' => 8,
                'experience' => NULL,
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            23 => 
            array (
                'id' => 26,
                'personal_id' => 26,
                'start_date' => '2076-04-17',
                'end_date' => '2076-07-09',
                'institution_transferedto' => 'District Health Office',
                'authority' => 'Ministry of health',
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-01 06:26:25',
                'updated_at' => '2019-08-01 06:26:25',
                'post_id' => 6,
                'experience' => NULL,
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            24 => 
            array (
                'id' => 27,
                'personal_id' => 26,
                'start_date' => '2076-04-06',
                'end_date' => '0000-00-00',
                'institution_transferedto' => 'Regional Health',
                'authority' => 'Ministry of health',
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-01 06:26:42',
                'updated_at' => '2019-08-01 06:26:42',
                'post_id' => 4,
                'experience' => NULL,
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            25 => 
            array (
                'id' => 28,
                'personal_id' => 26,
                'start_date' => '2076-04-07',
                'end_date' => NULL,
                'institution_transferedto' => 'Bhedabari Health Post',
                'authority' => 'Department of health',
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-01 06:27:15',
                'updated_at' => '2019-08-01 06:27:15',
                'post_id' => 5,
                'experience' => NULL,
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            26 => 
            array (
                'id' => 29,
                'personal_id' => 27,
                'start_date' => '2076-04-01',
                'end_date' => NULL,
                'institution_transferedto' => 'District Health Office',
                'authority' => 'Department of health',
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-01 06:39:09',
                'updated_at' => '2019-08-01 06:39:09',
                'post_id' => 14,
                'experience' => NULL,
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            27 => 
            array (
                'id' => 30,
                'personal_id' => 27,
                'start_date' => '2076-04-11',
                'end_date' => NULL,
                'institution_transferedto' => 'Majhakot Sibalaya',
                'authority' => 'District Health Office, Syangja',
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-01 06:39:44',
                'updated_at' => '2019-08-01 06:39:44',
                'post_id' => 14,
                'experience' => NULL,
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            28 => 
            array (
                'id' => 31,
                'personal_id' => 27,
                'start_date' => '2076-04-18',
                'end_date' => NULL,
                'institution_transferedto' => 'Pelakot Sub Health Post',
                'authority' => 'District Health Office, Syangja',
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-01 06:40:10',
                'updated_at' => '2019-08-01 06:40:10',
                'post_id' => 3,
                'experience' => NULL,
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            29 => 
            array (
                'id' => 32,
                'personal_id' => 27,
                'start_date' => '2075-02-17',
                'end_date' => NULL,
                'institution_transferedto' => 'Jagatradevi Sub Health Post',
                'authority' => 'District Health Office, Syangja',
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-01 06:40:42',
                'updated_at' => '2019-08-01 06:40:42',
                'post_id' => 3,
                'experience' => NULL,
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            30 => 
            array (
                'id' => 33,
                'personal_id' => 27,
                'start_date' => '2074-09-21',
                'end_date' => NULL,
                'institution_transferedto' => 'Malunga Primary Health Care',
                'authority' => 'Regional Health Dictorate',
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-01 06:41:28',
                'updated_at' => '2019-08-01 06:41:28',
                'post_id' => 3,
                'experience' => NULL,
                'start_date_en' => NULL,
                'end_date_en' => NULL,
            ),
            31 => 
            array (
                'id' => 34,
                'personal_id' => 45,
                'start_date' => '2076-04-03',
                'end_date' => '2076-04-04',
                'institution_transferedto' => 'zxc',
                'authority' => NULL,
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-13 05:54:13',
                'updated_at' => '2019-08-13 05:54:13',
                'post_id' => NULL,
                'experience' => NULL,
                'start_date_en' => '2019-08-20',
                'end_date_en' => '2019-08-21',
            ),
            32 => 
            array (
                'id' => 35,
                'personal_id' => 45,
                'start_date' => '2076-04-05',
                'end_date' => '2076-04-06',
                'institution_transferedto' => 'zxcv',
                'authority' => NULL,
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-13 05:54:13',
                'updated_at' => '2019-08-13 05:54:13',
                'post_id' => NULL,
                'experience' => NULL,
                'start_date_en' => '2019-08-22',
                'end_date_en' => '2019-08-23',
            ),
            33 => 
            array (
                'id' => 38,
                'personal_id' => 46,
                'start_date' => NULL,
                'end_date' => NULL,
                'institution_transferedto' => 'qweqwe',
                'authority' => NULL,
                'level' => NULL,
                'remarks' => NULL,
                'created_at' => '2019-08-13 06:33:26',
                'updated_at' => '2019-08-13 06:33:26',
                'post_id' => NULL,
                'experience' => 19,
                'start_date_en' => '2019-08-01',
                'end_date_en' => '2021-03-12',
            ),
        ));
        
        
    }
}
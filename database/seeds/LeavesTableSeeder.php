<?php

use Illuminate\Database\Seeder;

class LeavesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('leaves')->delete();
        
        \DB::table('leaves')->insert(array (
            0 => 
            array (
                'id' => 5,
                'personal_id' => 21,
                'type_of_leave' => 'Study Leave',
                'from_date' => '2075-12-06',
                'to_date' => '2077-04-09',
                'created_at' => '2019-08-01 04:37:39',
                'updated_at' => '2019-08-01 04:37:39',
            ),
            1 => 
            array (
                'id' => 6,
                'personal_id' => 21,
                'type_of_leave' => 'Study Leave',
                'from_date' => '2076-04-05',
                'to_date' => '2076-12-22',
                'created_at' => '2019-08-01 04:37:51',
                'updated_at' => '2019-08-01 04:37:51',
            ),
            2 => 
            array (
                'id' => 7,
                'personal_id' => 21,
                'type_of_leave' => 'Study leave without pay',
                'from_date' => '2076-04-12',
                'to_date' => '2077-11-15',
                'created_at' => '2019-08-01 04:38:07',
                'updated_at' => '2019-08-01 04:38:07',
            ),
            3 => 
            array (
                'id' => 8,
                'personal_id' => 23,
                'type_of_leave' => 'Extra-ordinary leave without pay',
                'from_date' => '2076-04-01',
                'to_date' => '2076-04-24',
                'created_at' => '2019-08-01 05:39:00',
                'updated_at' => '2019-08-01 05:39:00',
            ),
            4 => 
            array (
                'id' => 9,
                'personal_id' => 23,
                'type_of_leave' => 'Study leave without pay',
                'from_date' => '2076-04-17',
                'to_date' => '0000-00-00',
                'created_at' => '2019-08-01 05:39:20',
                'updated_at' => '2019-08-01 05:39:20',
            ),
            5 => 
            array (
                'id' => 10,
                'personal_id' => 23,
                'type_of_leave' => 'Extra-ordinary leave without pay',
                'from_date' => '2076-04-17',
                'to_date' => '2076-08-21',
                'created_at' => '2019-08-01 05:39:33',
                'updated_at' => '2019-08-01 05:39:33',
            ),
            6 => 
            array (
                'id' => 11,
                'personal_id' => 23,
                'type_of_leave' => 'Absence Minus',
                'from_date' => '2076-04-10',
                'to_date' => '0000-00-00',
                'created_at' => '2019-08-01 05:39:46',
                'updated_at' => '2019-08-01 05:39:46',
            ),
            7 => 
            array (
                'id' => 12,
                'personal_id' => 24,
                'type_of_leave' => 'Studyl leave',
                'from_date' => '2075-10-16',
                'to_date' => '2076-04-11',
                'created_at' => '2019-08-01 05:50:48',
                'updated_at' => '2019-08-01 05:50:48',
            ),
            8 => 
            array (
                'id' => 13,
                'personal_id' => 24,
                'type_of_leave' => 'Extra-ordinary leave without pay',
                'from_date' => '2076-04-10',
                'to_date' => '2076-11-03',
                'created_at' => '2019-08-01 05:51:03',
                'updated_at' => '2019-08-01 05:51:03',
            ),
            9 => 
            array (
                'id' => 14,
                'personal_id' => 25,
                'type_of_leave' => 'Absence Minus',
                'from_date' => '2076-04-01',
                'to_date' => '2077-10-24',
                'created_at' => '2019-08-01 06:07:34',
                'updated_at' => '2019-08-01 06:07:34',
            ),
            10 => 
            array (
                'id' => 15,
                'personal_id' => 25,
                'type_of_leave' => 'Extra-ordinary leave without pay',
                'from_date' => '2076-04-01',
                'to_date' => '2076-04-25',
                'created_at' => '2019-08-01 06:07:44',
                'updated_at' => '2019-08-01 06:07:44',
            ),
            11 => 
            array (
                'id' => 16,
                'personal_id' => 25,
                'type_of_leave' => 'Extra-ordinary leave without pay',
                'from_date' => '2076-04-14',
                'to_date' => '2076-04-25',
                'created_at' => '2019-08-01 06:07:52',
                'updated_at' => '2019-08-01 06:07:52',
            ),
            12 => 
            array (
                'id' => 17,
                'personal_id' => 25,
                'type_of_leave' => 'Study leave without pay',
                'from_date' => '2076-04-25',
                'to_date' => '2076-08-30',
                'created_at' => '2019-08-01 06:08:04',
                'updated_at' => '2019-08-01 06:08:04',
            ),
            13 => 
            array (
                'id' => 20,
                'personal_id' => 8,
                'type_of_leave' => 'Extra-ordinary leave without pay',
                'from_date' => '2076-04-18',
                'to_date' => '2076-04-03',
                'created_at' => '2019-08-04 05:43:38',
                'updated_at' => '2019-08-04 05:43:38',
            ),
            14 => 
            array (
                'id' => 21,
                'personal_id' => 8,
                'type_of_leave' => 'study leave without pay',
                'from_date' => '2076-05-07',
                'to_date' => '2076-06-25',
                'created_at' => '2019-08-04 05:43:38',
                'updated_at' => '2019-08-04 05:43:38',
            ),
        ));
        
        
    }
}
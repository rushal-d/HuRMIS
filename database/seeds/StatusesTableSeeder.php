<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('statuses')->delete();
        
        \DB::table('statuses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'personal_id' => 8,
                'status' => 2,
                'created_at' => '2019-07-30 07:02:28',
                'updated_at' => '2019-07-30 09:09:00',
            ),
            1 => 
            array (
                'id' => 2,
                'personal_id' => 21,
                'status' => 0,
                'created_at' => '2019-08-01 04:40:01',
                'updated_at' => '2019-08-01 04:40:01',
            ),
            2 => 
            array (
                'id' => 3,
                'personal_id' => 22,
                'status' => 2,
                'created_at' => '2019-08-01 05:26:36',
                'updated_at' => '2019-08-01 05:26:36',
            ),
            3 => 
            array (
                'id' => 4,
                'personal_id' => 24,
                'status' => 3,
                'created_at' => '2019-08-01 05:51:25',
                'updated_at' => '2019-08-01 05:51:25',
            ),
            4 => 
            array (
                'id' => 5,
                'personal_id' => 25,
                'status' => 0,
                'created_at' => '2019-08-01 06:08:34',
                'updated_at' => '2019-08-01 06:08:34',
            ),
            5 => 
            array (
                'id' => 6,
                'personal_id' => 26,
                'status' => 3,
                'created_at' => '2019-08-01 06:23:58',
                'updated_at' => '2019-08-01 06:23:58',
            ),
            6 => 
            array (
                'id' => 7,
                'personal_id' => 23,
                'status' => 0,
                'created_at' => '2019-08-01 06:45:32',
                'updated_at' => '2019-08-01 06:45:32',
            ),
            7 => 
            array (
                'id' => 8,
                'personal_id' => 28,
                'status' => 2,
                'created_at' => '2019-08-04 06:24:36',
                'updated_at' => '2019-08-04 06:24:36',
            ),
        ));
        
        
    }
}
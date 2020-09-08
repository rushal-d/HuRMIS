<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Users')->delete();
        
        \DB::table('Users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'BMP Infology',
                'email' => 'bmp@bmpinfology.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$6O3rASyZ2cCHjatm.gf4buHUO7fXvyIpFCPxmlWvlmMNFA9ws4u3C',
                'remember_token' => 'N8xpM1J4E2qbIsP5P5lS7el03hDcRNPV5ci3OXCmj30ixhmPEWCvOzQb7kA4',
                'created_at' => '2019-01-02 06:03:20',
                'updated_at' => '2019-01-02 10:39:51',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Shree',
                'email' => 'shree@bmpinfology.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$/oYB4p96Db9oz0KHY79.VOgvr2kgtUkRkdC83..VAmPm3datl64sO',
                'remember_token' => NULL,
                'created_at' => '2019-01-02 06:03:55',
                'updated_at' => '2019-01-02 06:03:55',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'demo',
                'email' => 'demo@bmpinfology.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$z4//Rpud4yeF3ArnWO1jRuxHy2Hc8C9C0ydRyZ5.GKh6y.ofg3fSi',
                'remember_token' => NULL,
                'created_at' => '2019-08-18 07:15:15',
                'updated_at' => '2019-08-18 07:15:15',
            ),
        ));
        
        
    }
}
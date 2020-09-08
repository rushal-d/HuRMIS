<?php

use Illuminate\Database\Seeder;

class AdditionalInformationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('additional_informations')->delete();
        
        \DB::table('additional_informations')->insert(array (
            0 => 
            array (
                'id' => 2,
                'personal_id' => 8,
                'appointment_date' => '2076-04-16',
                'provident_fund_no' => '66',
                'sheet_no' => '66',
                'cit_no' => '66',
                'citizenship_no' => '66',
                'insurance_no' => '66',
                'remarks' => '66',
                'notes' => '66',
                'created_at' => '2019-07-31 09:01:13',
                'updated_at' => '2019-07-31 09:01:13',
            ),
            1 => 
            array (
                'id' => 3,
                'personal_id' => 21,
                'appointment_date' => '2076-04-10',
                'provident_fund_no' => NULL,
                'sheet_no' => NULL,
                'cit_no' => NULL,
                'citizenship_no' => NULL,
                'insurance_no' => NULL,
                'remarks' => NULL,
                'notes' => NULL,
                'created_at' => '2019-08-01 04:40:16',
                'updated_at' => '2019-08-01 04:40:16',
            ),
            2 => 
            array (
                'id' => 4,
                'personal_id' => 22,
                'appointment_date' => '2076-04-11',
                'provident_fund_no' => NULL,
                'sheet_no' => NULL,
                'cit_no' => NULL,
                'citizenship_no' => NULL,
                'insurance_no' => NULL,
                'remarks' => NULL,
                'notes' => NULL,
                'created_at' => '2019-08-01 05:26:47',
                'updated_at' => '2019-08-01 05:26:47',
            ),
            3 => 
            array (
                'id' => 5,
                'personal_id' => 23,
                'appointment_date' => '2076-04-10',
                'provident_fund_no' => NULL,
                'sheet_no' => NULL,
                'cit_no' => NULL,
                'citizenship_no' => NULL,
                'insurance_no' => NULL,
                'remarks' => NULL,
                'notes' => NULL,
                'created_at' => '2019-08-01 05:40:42',
                'updated_at' => '2019-08-01 05:40:42',
            ),
            4 => 
            array (
                'id' => 6,
                'personal_id' => 24,
                'appointment_date' => '2076-04-30',
                'provident_fund_no' => NULL,
                'sheet_no' => NULL,
                'cit_no' => NULL,
                'citizenship_no' => NULL,
                'insurance_no' => NULL,
                'remarks' => NULL,
                'notes' => NULL,
                'created_at' => '2019-08-01 05:51:15',
                'updated_at' => '2019-08-01 05:51:15',
            ),
            5 => 
            array (
                'id' => 7,
                'personal_id' => 25,
                'appointment_date' => '2073-06-29',
                'provident_fund_no' => NULL,
                'sheet_no' => NULL,
                'cit_no' => NULL,
                'citizenship_no' => NULL,
                'insurance_no' => NULL,
                'remarks' => NULL,
                'notes' => NULL,
                'created_at' => '2019-08-01 06:08:21',
                'updated_at' => '2019-08-01 06:08:21',
            ),
            6 => 
            array (
                'id' => 8,
                'personal_id' => 26,
                'appointment_date' => '2075-11-17',
                'provident_fund_no' => NULL,
                'sheet_no' => NULL,
                'cit_no' => NULL,
                'citizenship_no' => NULL,
                'insurance_no' => NULL,
                'remarks' => NULL,
                'notes' => NULL,
                'created_at' => '2019-08-01 06:23:52',
                'updated_at' => '2019-08-01 06:23:52',
            ),
            7 => 
            array (
                'id' => 9,
                'personal_id' => 27,
                'appointment_date' => '2076-04-02',
                'provident_fund_no' => '292987',
                'sheet_no' => '196069',
                'cit_no' => NULL,
                'citizenship_no' => '15266496',
                'insurance_no' => NULL,
                'remarks' => NULL,
                'notes' => NULL,
                'created_at' => '2019-08-01 06:42:26',
                'updated_at' => '2019-08-01 06:42:26',
            ),
        ));
        
        
    }
}
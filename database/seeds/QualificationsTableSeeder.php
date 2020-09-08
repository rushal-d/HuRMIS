<?php

use Illuminate\Database\Seeder;

class QualificationsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('qualifications')->delete();
        
        \DB::table('qualifications')->insert(array (
            0 => 
            array (
                'id' => 2,
                'personal_id' => 8,
                'degree' => '+2',
                'year' => '2013',
                'grade' => 'A',
                'major_subject' => 'Science',
                'institution' => '5',
                'sponsor' => '6',
                'created_at' => '2019-07-26 08:53:51',
                'updated_at' => '2019-07-28 06:24:28',
            ),
            1 => 
            array (
                'id' => 4,
                'personal_id' => 8,
                'degree' => 'Bachelors',
                'year' => '2018',
                'grade' => '65',
                'major_subject' => 'Research',
                'institution' => 'Patan',
                'sponsor' => 'No',
                'created_at' => '2019-07-28 04:22:30',
                'updated_at' => '2019-07-28 06:43:18',
            ),
            2 => 
            array (
                'id' => 5,
                'personal_id' => 8,
                'degree' => 'PHD',
                'year' => '2019',
                'grade' => 'A',
                'major_subject' => 'Psychology',
                'institution' => 'Harvard',
                'sponsor' => 'Oxford',
                'created_at' => '2019-07-28 06:30:36',
                'updated_at' => '2019-07-28 06:30:36',
            ),
            3 => 
            array (
                'id' => 8,
                'personal_id' => 21,
                'degree' => 'CMA',
                'year' => '1978',
                'grade' => '79%',
                'major_subject' => 'Medical, Surgical Health',
                'institution' => 'TU IOM, CMA Campus Palpa',
                'sponsor' => 'Not Known',
                'created_at' => '2019-08-01 04:24:50',
                'updated_at' => '2019-08-01 04:24:50',
            ),
            4 => 
            array (
                'id' => 9,
                'personal_id' => 21,
                'degree' => 'C.L. Nursing',
                'year' => '1990',
                'grade' => '81.85%',
                'major_subject' => 'Applied Science',
                'institution' => 'TU IOM, Nursing Campus',
                'sponsor' => 'Not Known',
                'created_at' => '2019-08-01 04:24:50',
                'updated_at' => '2019-08-01 10:16:49',
            ),
            5 => 
            array (
                'id' => 10,
                'personal_id' => 21,
                'degree' => 'B.P.H.',
                'year' => '1994',
                'grade' => '80.28%',
                'major_subject' => 'Public Health',
                'institution' => 'TU IOM, Central Campus',
                'sponsor' => 'Not Known',
                'created_at' => '2019-08-01 04:24:50',
                'updated_at' => '2019-08-01 10:17:47',
            ),
            6 => 
            array (
                'id' => 11,
                'personal_id' => 21,
                'degree' => 'B.Ed',
                'year' => '1995',
                'grade' => '59.63%',
                'major_subject' => 'Health Education',
                'institution' => 'Kirtipur Campus',
                'sponsor' => 'Not known',
                'created_at' => '2019-08-01 04:24:50',
                'updated_at' => '2019-08-01 10:18:23',
            ),
            7 => 
            array (
                'id' => 12,
                'personal_id' => 21,
                'degree' => 'SLC',
                'year' => '1995',
                'grade' => '62.55%',
                'major_subject' => 'Eng, Math, Science, Eduation',
                'institution' => 'Shanti Vocationary Secondary School',
                'sponsor' => 'Not Known',
                'created_at' => '2019-08-01 04:24:50',
                'updated_at' => '2019-08-01 04:24:50',
            ),
            8 => 
            array (
                'id' => 13,
                'personal_id' => 22,
                'degree' => 'I.A',
                'year' => '1978',
                'grade' => '3rd',
                'major_subject' => 'English, History, Panc.',
            'institution' => 'T.U.(Private)',
                'sponsor' => 'Self',
                'created_at' => '2019-08-01 04:44:40',
                'updated_at' => '2019-08-01 04:44:40',
            ),
            9 => 
            array (
                'id' => 14,
                'personal_id' => 22,
                'degree' => 'SLC',
                'year' => '1969',
                'grade' => '2nd',
                'major_subject' => 'English, Math',
                'institution' => 'Nabin Proudh Bi School',
                'sponsor' => 'Self',
                'created_at' => '2019-08-01 04:44:40',
                'updated_at' => '2019-08-01 04:44:40',
            ),
            10 => 
            array (
                'id' => 15,
                'personal_id' => 23,
                'degree' => 'PG',
                'year' => '1999',
                'grade' => 'Pass',
                'major_subject' => 'Oncology',
                'institution' => 'Liverpool, England',
                'sponsor' => 'Self',
                'created_at' => '2019-08-01 05:33:05',
                'updated_at' => '2019-08-01 05:33:05',
            ),
            11 => 
            array (
                'id' => 16,
                'personal_id' => 23,
                'degree' => 'MBBS',
                'year' => '1987',
                'grade' => '2nd',
                'major_subject' => 'Medicine, Surgery',
                'institution' => 'Calcutta Medical College',
                'sponsor' => 'Self',
                'created_at' => '2019-08-01 05:33:05',
                'updated_at' => '2019-08-01 05:33:05',
            ),
            12 => 
            array (
                'id' => 17,
                'personal_id' => 23,
                'degree' => 'DCH',
                'year' => '1994',
                'grade' => '1st',
                'major_subject' => 'Pediatric',
                'institution' => 'T.U.',
                'sponsor' => 'Not Known',
                'created_at' => '2019-08-01 05:33:06',
                'updated_at' => '2019-08-01 05:33:06',
            ),
            13 => 
            array (
                'id' => 18,
                'personal_id' => 23,
                'degree' => 'I.Sc',
                'year' => '1978',
                'grade' => 'Merit',
                'major_subject' => 'Eng, Chem, Bio',
                'institution' => 'R.R Campus',
                'sponsor' => 'Self',
                'created_at' => '2019-08-01 05:33:06',
                'updated_at' => '2019-08-01 05:33:06',
            ),
            14 => 
            array (
                'id' => 19,
                'personal_id' => 23,
                'degree' => 'SLC',
                'year' => '1974',
                'grade' => '2nd',
                'major_subject' => 'Math, Eng, Science',
                'institution' => 'Chandra V.M.V',
                'sponsor' => 'Self',
                'created_at' => '2019-08-01 05:33:06',
                'updated_at' => '2019-08-01 05:33:06',
            ),
            15 => 
            array (
                'id' => 20,
                'personal_id' => 23,
                'degree' => 'MD',
                'year' => '2007',
                'grade' => 'Pass',
                'major_subject' => 'Pediatric Medicine',
            'institution' => 'NAMS(Bir Hospital)',
                'sponsor' => 'Self',
                'created_at' => '2019-08-01 05:33:44',
                'updated_at' => '2019-08-01 05:33:44',
            ),
            16 => 
            array (
                'id' => 21,
                'personal_id' => 24,
                'degree' => 'MBBS',
                'year' => '1981',
                'grade' => NULL,
                'major_subject' => 'Anatomy, Phsyics,Medicine,Surgery,',
                'institution' => 'RB Kar Medical College',
                'sponsor' => 'Not known',
                'created_at' => '2019-08-01 05:45:20',
                'updated_at' => '2019-08-01 05:45:20',
            ),
            17 => 
            array (
                'id' => 22,
                'personal_id' => 24,
                'degree' => 'MS',
                'year' => '1990',
                'grade' => NULL,
                'major_subject' => 'General Surgery+Orthopedics',
                'institution' => 'Rehabilitation inst. for disabled',
                'sponsor' => 'Not Known',
                'created_at' => '2019-08-01 05:45:20',
                'updated_at' => '2019-08-01 05:45:20',
            ),
            18 => 
            array (
                'id' => 23,
                'personal_id' => 24,
                'degree' => 'SLC',
                'year' => '1969',
                'grade' => '2nd',
                'major_subject' => 'english,math,nepali',
                'institution' => 'Shanti Vidyagriha High School',
                'sponsor' => 'Not Known',
                'created_at' => '2019-08-01 05:45:20',
                'updated_at' => '2019-08-01 05:45:20',
            ),
            19 => 
            array (
                'id' => 24,
                'personal_id' => 24,
                'degree' => 'I.Sc',
                'year' => '1972',
                'grade' => '2nd',
                'major_subject' => 'physics, chemistry, bio,english',
                'institution' => 'Amrit Science College',
                'sponsor' => 'Not Known',
                'created_at' => '2019-08-01 05:45:20',
                'updated_at' => '2019-08-01 05:45:20',
            ),
            20 => 
            array (
                'id' => 25,
                'personal_id' => 25,
                'degree' => 'SLC',
                'year' => '1976',
                'grade' => '59.5%',
                'major_subject' => 'english,math,nepali',
                'institution' => 'Mahendra High School',
                'sponsor' => 'Self',
                'created_at' => '2019-08-01 06:01:55',
                'updated_at' => '2019-08-01 06:01:55',
            ),
            21 => 
            array (
                'id' => 26,
                'personal_id' => 25,
                'degree' => 'HA',
                'year' => '1981',
                'grade' => '63.3%',
                'major_subject' => 'medicine, surgery',
                'institution' => 'TU,IOM, Maharajgunj Campus',
                'sponsor' => 'Self',
                'created_at' => '2019-08-01 06:01:55',
                'updated_at' => '2019-08-01 06:01:55',
            ),
            22 => 
            array (
                'id' => 27,
                'personal_id' => 25,
                'degree' => 'MBBS',
                'year' => '1988',
                'grade' => '89.9%',
                'major_subject' => 'medicine, surgery',
                'institution' => 'Mins Medical College',
                'sponsor' => 'USSR',
                'created_at' => '2019-08-01 06:01:55',
                'updated_at' => '2019-08-01 06:01:55',
            ),
            23 => 
            array (
                'id' => 28,
                'personal_id' => 25,
                'degree' => 'MPH',
                'year' => '1994',
                'grade' => '3.45',
                'major_subject' => 'epidemiology',
                'institution' => 'College of Public Health, USA',
                'sponsor' => 'Self',
                'created_at' => '2019-08-01 06:01:55',
                'updated_at' => '2019-08-01 06:01:55',
            ),
            24 => 
            array (
                'id' => 29,
                'personal_id' => 26,
                'degree' => 'I.A.',
                'year' => NULL,
                'grade' => '3rd',
                'major_subject' => 'hindi,eng,geo,science',
                'institution' => 'Harischandra Inter College',
                'sponsor' => 'Self',
                'created_at' => '2019-08-01 06:19:55',
                'updated_at' => '2019-08-01 06:19:55',
            ),
            25 => 
            array (
                'id' => 30,
                'personal_id' => 26,
                'degree' => 'B.A',
                'year' => NULL,
                'grade' => '3rd',
                'major_subject' => 'eng,nep,political science',
                'institution' => 'T.U.',
                'sponsor' => 'Self',
                'created_at' => '2019-08-01 06:19:55',
                'updated_at' => '2019-08-01 06:19:55',
            ),
            26 => 
            array (
                'id' => 31,
                'personal_id' => 26,
                'degree' => 'SLC',
                'year' => NULL,
                'grade' => '2nd',
                'major_subject' => 'eng,geo,math,biology',
                'institution' => 'Prasad High School',
                'sponsor' => 'Self',
                'created_at' => '2019-08-01 06:19:55',
                'updated_at' => '2019-08-01 06:19:55',
            ),
            27 => 
            array (
                'id' => 32,
                'personal_id' => 28,
                'degree' => 'Test',
                'year' => '2017',
                'grade' => NULL,
                'major_subject' => NULL,
                'institution' => NULL,
                'sponsor' => NULL,
                'created_at' => '2019-08-04 06:23:11',
                'updated_at' => '2019-08-04 06:23:11',
            ),
        ));
        
        
    }
}
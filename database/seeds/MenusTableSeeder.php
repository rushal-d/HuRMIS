<?php

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'id' => 9,
                'menu_name' => 'role.index',
                'parameters' => NULL,
                'route' => NULL,
                'display_name' => 'Roles',
                'parent_id' => 46,
                'order' => 3,
                'icon' => NULL,
                'created_at' => '2019-01-02 10:04:13',
                'updated_at' => '2019-01-02 10:32:33',
            ),
            1 => 
            array (
                'id' => 16,
                'menu_name' => 'permission.index',
                'parameters' => NULL,
                'route' => NULL,
                'display_name' => 'Permission',
                'parent_id' => 46,
                'order' => 4,
                'icon' => NULL,
                'created_at' => '2019-01-02 10:04:25',
                'updated_at' => '2019-01-02 10:32:33',
            ),
            2 => 
            array (
                'id' => 25,
                'menu_name' => 'user.index',
                'parameters' => NULL,
                'route' => NULL,
                'display_name' => 'Users',
                'parent_id' => 46,
                'order' => 2,
                'icon' => NULL,
                'created_at' => '2019-01-02 09:31:06',
                'updated_at' => '2019-01-02 10:32:16',
            ),
            3 => 
            array (
                'id' => 32,
                'menu_name' => 'assignrole.index',
                'parameters' => NULL,
                'route' => NULL,
                'display_name' => 'Assign Permission',
                'parent_id' => 46,
                'order' => 5,
                'icon' => NULL,
                'created_at' => '2019-01-02 10:04:48',
                'updated_at' => '2019-01-02 10:32:33',
            ),
            4 => 
            array (
                'id' => 46,
                'menu_name' => '#usermanagement',
                'parameters' => NULL,
                'route' => NULL,
                'display_name' => 'User Management',
                'parent_id' => 0,
                'order' => 7,
                'icon' => NULL,
                'created_at' => '2019-01-02 09:26:37',
                'updated_at' => '2019-08-13 04:19:09',
            ),
            5 => 
            array (
                'id' => 47,
                'menu_name' => 'menu-index',
                'parameters' => NULL,
                'route' => NULL,
                'display_name' => 'Menu Builder',
                'parent_id' => 46,
                'order' => 6,
                'icon' => NULL,
                'created_at' => '2019-01-02 10:06:43',
                'updated_at' => '2019-01-02 10:07:25',
            ),
            6 => 
            array (
                'id' => 53,
                'menu_name' => 'personal.index',
                'parameters' => NULL,
                'route' => NULL,
                'display_name' => 'Manage Employees',
                'parent_id' => 0,
                'order' => 4,
                'icon' => NULL,
                'created_at' => '2019-07-26 04:06:21',
                'updated_at' => '2019-08-13 04:22:17',
            ),
            7 => 
            array (
                'id' => 120,
                'menu_name' => 'personal.search',
                'parameters' => NULL,
                'route' => NULL,
                'display_name' => 'Search People',
                'parent_id' => 0,
                'order' => 5,
                'icon' => NULL,
                'created_at' => '2019-08-12 10:31:58',
                'updated_at' => '2019-08-14 09:56:02',
            ),
            8 => 
            array (
                'id' => 121,
                'menu_name' => 'personal.dashboard',
                'parameters' => NULL,
                'route' => NULL,
                'display_name' => 'Dashboard',
                'parent_id' => 0,
                'order' => 3,
                'icon' => NULL,
                'created_at' => '2019-08-13 04:19:00',
                'updated_at' => '2019-08-13 04:22:17',
            ),
            9 => 
            array (
                'id' => 125,
                'menu_name' => 'personal.reportdashboard',
                'parameters' => NULL,
                'route' => NULL,
                'display_name' => 'Report Dashboard',
                'parent_id' => 0,
                'order' => 6,
                'icon' => NULL,
                'created_at' => '2019-08-14 09:55:31',
                'updated_at' => '2019-08-14 09:56:07',
            ),
        ));
        
        
    }
}
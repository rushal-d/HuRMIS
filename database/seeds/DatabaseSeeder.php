<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(DistrictsTableSeeder::class);
        $this->call(PersonalInformationsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(QualificationsTableSeeder::class);
        $this->call(TrainingsTableSeeder::class);
        $this->call(TransfersTableSeeder::class);
        $this->call(PromotionsTableSeeder::class);
        $this->call(LeavesTableSeeder::class);
        $this->call(StatusesTableSeeder::class);
        $this->call(AdditionalInformationsTableSeeder::class);
    }
}

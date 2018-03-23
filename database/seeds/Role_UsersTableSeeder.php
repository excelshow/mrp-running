<?php

use Illuminate\Database\Seeder;
use App\RoleUser;
class Role_UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('role_users')->truncate();

        $role = new RoleUser();
        $role->role_id = 1;
        $role->user_id = 1;
        $role->save();
        
        $role = new RoleUser();
        $role->role_id = 1;
        $role->user_id = 2;
        $role->save();
    }
}

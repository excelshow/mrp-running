<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        $user = new User();
        $user->name = 'Marvelous';
        $user->email = 'admin@admin.com';
        $user->password = bcrypt('Today1234');
        $user->status = true;
        $user->image = 'admin.png';
        $user->save();
        
        $user = new User();
        $user->name = 'Maulana Yusup';
        $user->email = 'maulanayusupp@gmail.com';
        $user->password = bcrypt('admin');
        $user->status = true;
        $user->image = 'admin.png';
        $user->save();
    }
}

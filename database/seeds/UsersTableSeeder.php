<?php

use Illuminate\Database\Seeder;
use App\User;
//use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [['name' => '郑书益', 'workid' => '20150301', 'department_id' => '2', 'level' => 0, 'email' => '530822987@qq.com'],
            ['name' => '金涛', 'workid' => '20180304', 'department_id' => '2', 'level' => 1, 'email' => '635182618@qq.com'],
            ['name' => '赵家荣', 'workid' => '20101009', 'department_id' => '1', 'level' => 1, 'email' => 'zhao_jiarong@qq.com']];
        User::truncate();
        foreach($users as $user)
        {
            User::create([
                'name' => $user['name'],
                'workid' => $user['workid'],
                'department_id' => $user['department_id'],
                'level' => $user['level'],
                'email' => $user['email'],
                'lastLogin' => \Carbon\Carbon::now(),
                'password' => '123456',
            ]);
        }
    }
}

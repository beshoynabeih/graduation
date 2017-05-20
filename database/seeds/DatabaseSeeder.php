<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
        	'name' => "parent",
        	'email' => 'parent@yahoo.com',
        	'password' => bcrypt('123123'),
        	'type' => 1
        ]);
        DB::table('students')->insert([
            'parent_id' => 1,
            'name' => 'student',
            'birthday' => '04/25/2017',
            'grade' => 'first grade',
            'address' => 'Minia - bani mazar',
            'fees' => 0
        ]);
        DB::table('users')->insert([
        	'name' => "teacher",
        	'email' => 'teacher@yahoo.com',
        	'password' => bcrypt('123123'),
        	'type' => 2
        ]);
        DB::table('teachers')->insert([
            'user_id' => 1,
            'subject' => 'arabic',
            'grade' => "1,2,3,4,5,6",
            'bio' => "I'm an arabic teacher for 11 years. I have enough experience to treat with students."
        ]);
        DB::table('users')->insert([
        	'name' => "affairs",
        	'email' => 'affairs@yahoo.com',
        	'password' => bcrypt('123123'),
        	'type' => 3
        ]);
        DB::table('users')->insert([
        	'name' => "admin",
        	'email' => 'admin@yahoo.com',
        	'password' => bcrypt('123123'),
        	'type' => 4
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class TeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert("INSERT INTO `teacher` (`id`, `user_id`, `subject`, `grade`, `bio`, `created_at`, `updated_at`) VALUES
        (1, 11, 'English', '', 'asdasdasd asd asdas d', '2017-05-01 02:26:10', '2017-05-01 02:26:10'),
        (2, 5, 'history', '', 'asdadasdasd', '2017-05-01 02:27:45', '2017-05-01 02:27:45'),
        (3, 13, 'arts', '', 'asdasdasd', '2017-05-01 02:31:31', '2017-05-01 02:31:31'),
        (4, 3, 'Math', ',2,,,,6', 'asdasd asdasd', '2017-05-01 02:39:57', '2017-05-01 02:39:57'),
        (5, 21, 'computer', '1,,,,,', 'faculty of computer and information', '2017-05-01 16:05:45', '2017-05-01 16:05:45'),
        (6, 23, 'networks', ',,,,,6', 'Dr. Hassan\r\n12 years of experience', '2017-05-01 16:14:53', '2017-05-01 16:14:53');");
    }
}

<?php

use Illuminate\Database\Seeder;

class TablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::insert("INSERT INTO `tables` (`id`, `grade`, `day`, `lec1`, `lec2`, `lec3`, `lec4`, `lec5`, `lec6`, `lec7`, `created_at`, `updated_at`) VALUES
        (1, 'first grade', 'Sut', 'first', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:41:31', '2017-04-29 19:41:31'),
        (2, 'first grade', 'Sun', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:35:05', '2017-04-29 19:35:05'),
        (3, 'first grade', 'Mon', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:36:27', '2017-04-29 19:36:27'),
        (4, 'first grade', 'Tues', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:43:01', '2017-04-29 19:43:01'),
        (5, 'first grade', 'Wedn', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:43:01', '2017-04-29 19:43:01'),
        (6, 'first grade', 'Thu', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'arts', '2017-04-29 19:43:01', '2017-04-29 19:43:01'),
        (7, 'second grade', 'Sut', 'second', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:43:40', '2017-04-29 19:43:40'),
        (8, 'second grade', 'Sun', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:43:40', '2017-04-29 19:43:40'),
        (9, 'second grade', 'Mon', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:43:40', '2017-04-29 19:43:40'),
        (10, 'second grade', 'Tues', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:43:41', '2017-04-29 19:43:41'),
        (11, 'second grade', 'Wedn', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:43:41', '2017-04-29 19:43:41'),
        (12, 'second grade', 'Thu', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:43:41', '2017-04-29 19:43:41'),
        (13, 'third grade', 'Sut', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:06', '2017-04-29 19:44:06'),
        (14, 'third grade', 'Sun', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:06', '2017-04-29 19:44:06'),
        (15, 'third grade', 'Mon', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:06', '2017-04-29 19:44:06'),
        (16, 'third grade', 'Tues', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:06', '2017-04-29 19:44:06'),
        (17, 'third grade', 'Wedn', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:06', '2017-04-29 19:44:06'),
        (18, 'third grade', 'Thu', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:06', '2017-04-29 19:44:06'),
        (19, 'fourth grade', 'Sut', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:20', '2017-04-29 19:44:20'),
        (20, 'fourth grade', 'Sun', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:20', '2017-04-29 19:44:20'),
        (21, 'fourth grade', 'Mon', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:20', '2017-04-29 19:44:20'),
        (22, 'fourth grade', 'Tues', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:20', '2017-04-29 19:44:20'),
        (23, 'fourth grade', 'Wedn', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:20', '2017-04-29 19:44:20'),
        (24, 'fourth grade', 'Thu', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:20', '2017-04-29 19:44:20'),
        (25, 'fifth grade', 'Sut', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:33', '2017-04-29 19:44:33'),
        (26, 'fifth grade', 'Sun', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:33', '2017-04-29 19:44:33'),
        (27, 'fifth grade', 'Mon', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:33', '2017-04-29 19:44:33'),
        (28, 'fifth grade', 'Tues', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:34', '2017-04-29 19:44:34'),
        (29, 'fifth grade', 'Wedn', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:34', '2017-04-29 19:44:34'),
        (30, 'fifth grade', 'Thu', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:34', '2017-04-29 19:44:34'),
        (31, 'sixth grade', 'Sut', 'sixth', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:48', '2017-04-29 19:44:48'),
        (32, 'sixth grade', 'Sun', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:48', '2017-04-29 19:44:48'),
        (33, 'sixth grade', 'Mon', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:48', '2017-04-29 19:44:48'),
        (34, 'sixth grade', 'Tues', 'tuessixth', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:48', '2017-04-29 19:44:48'),
        (35, 'sixth grade', 'Wedn', 'Arabic', 'English', 'French', 'Arts', 'Sports', 'Science', 'MAth', '2017-04-29 19:44:48', '2017-04-29 19:44:48'),
        (36, 'sixth grade', 'Thu', 'sixth', 'English', 'French', 'Arts', 'Sports', 'Science', 'arts', '2017-04-29 19:44:48', '2017-04-29 19:44:48');
        ");
    }
}

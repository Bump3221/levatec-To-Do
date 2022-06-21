<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tasks')->insert([
        [
          'user_name' => 'k.hoshino',
          'task_name' => 'homework',
          'body' => '月曜までに長文読解終わらせる'
        ],
      ]);
      
      DB::table('users')->insert([
        [
          'user_name' => 'unknown',
          'mailaddress' => 'Bump3221@yahoo.co.jp',
        ],
      ]);
    }
}

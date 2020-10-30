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
        // テーブルのクリア
    DB::table('users')->truncate();

    // 初期データ用意（列名をキーとする連想配列）
    $users = [
              ['id' => 1,
               'user_name' => '田中太郎',
               'user_email' => 'tanaka@gmail.com',
               'user_password' => '12345abc',
               'user_year' => 1,
               'user_position' => 'バックエンドエンジニア',
               'user_skill' => 'PHP',
               'message_category_id' => 1
               ]
             ];

    // 登録
    foreach($users as $user) {
      \App\User::create($user);
    }
    }
}

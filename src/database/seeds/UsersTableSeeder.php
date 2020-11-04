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
               'name' => '田中太郎',
               'email' => 'tanaka@gmail.com',
               'password' => '12345abc',
               'year' => 1,
               'position' => 'バックエンドエンジニア',
               'skill' => 'PHP',
               'message_category_id' => 1
               ]
             ];

    // 登録
    foreach($users as $user) {
      \App\User::create($user);
    }
    }
}

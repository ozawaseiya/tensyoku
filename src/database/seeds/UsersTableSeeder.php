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
    //DB::table('users')->truncate();
    DB::table('users')->delete();

    // 初期データ用意（列名をキーとする連想配列）
    $users = [
              // ['id' => 1,
              //  'name' => '田中太郎',
              //  'email' => 'tanaka@gmail.com',
              //  'password' => '12345abc',
              //  'remember_token'    => Str::random(10),
              //  'year' => 1,
              //  'position' => 'バックエンドエンジニア',
              //  'skill' => 'PHP',
              //  'folder_id' => 1
              //  ]
             ];

    // 登録
    foreach($users as $user) {
      \App\Models\User::create($user);
    }
    }
}

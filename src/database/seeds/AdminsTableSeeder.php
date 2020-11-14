<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // テーブルのクリア
    //DB::table('admins')->truncate();
    DB::table('admins')->delete();

    // 初期データ用意（列名をキーとする連想配列）
    $admins = [
              ['id' => 1,
               'company_apply_id' => 1,
               'company_name' => 'テスト1',
               'email' => 'ozaworld.s2090220.1990@gmail.com',
               'password' => bcrypt('12345abc'),
               'remember_token'    => Str::random(10),
              ]
             ];

    // 登録
    foreach($admins as $admin) {
      \App\Models\Admin::create($admin);
    }
    }
}

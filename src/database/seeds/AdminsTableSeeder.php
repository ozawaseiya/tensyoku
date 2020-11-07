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
    DB::table('admins')->truncate();

    // 初期データ用意（列名をキーとする連想配列）
    $admins = [
              ['company_id' => 1,
               'company_name' => 2500,
               'email' => 'ozaworld.s2090227.1990@gmail.com',
               'password' => '12345abc',
               'remember_token'    => Str::random(10),
               'company_apply_id' => 1,
               'message_category_id' => 1
               ]
             ];

    // 登録
    foreach($admins as $admin) {
      \App\Models\Admin::create($admin);
    }
    }
}

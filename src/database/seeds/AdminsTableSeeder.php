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
               'company_name' => 'テスト1',
               'email' => 'ozaworld.s2090220.1990@gmail.com',
               'password' => bcrypt('12345abc'),
               'remember_token'    => Str::random(10),
               'company_apply_id' => 1,
               'folder_id' => 1
              ],
              ['id' => 2,
               'company_name' => 'テスト2',
               'email' => 'ozaworld.s2090221.1990@gmail.com',
               'password' => bcrypt('12345abc'),
               'remember_token'    => Str::random(10),
               'company_apply_id' => 2,
               'folder_id' => 2
              ],
              ['id' => 3,
               'company_name' => 'テスト3',
               'email' => 'ozaworld.s2090222.1990@gmail.com',
               'password' => bcrypt('12345abc'),
               'remember_token'    => Str::random(10),
               'company_apply_id' => 3,
               'folder_id' => 3
              ],
              ['id' => 4,
               'company_name' => 'テスト4',
               'email' => 'ozaworld.s2090223.1990@gmail.com',
               'password' => bcrypt('12345abc'),
               'remember_token'    => Str::random(10),
               'company_apply_id' => 4,
               'folder_id' => 4
              ],
              ['id' => 5,
               'company_name' => 'テスト5',
               'email' => 'ozaworld.s2090224.1990@gmail.com',
               'password' => bcrypt('12345abc'),
               'remember_token'    => Str::random(10),
               'company_apply_id' => 5,
               'folder_id' => 5
              ],
             ];

    // 登録
    foreach($admins as $admin) {
      \App\Models\Admin::create($admin);
    }
    }
}

<?php

use Illuminate\Database\Seeder;

class FoldersTableSeeder extends Seeder
{
/**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // テーブルのクリア
    DB::table('folders')->truncate();

    // 初期データ用意（列名をキーとする連想配列）
    $folders = [
              ['folder_id' => 1,
               'company_apply_id' => 1,
               'sender_name' => 'メッサーシュミットジャパン',
               'id' => 1,
               'company_id' => 3,
              ]
             ];


    // 登録
    foreach($folders as $folder) {
      \App\Folder::create($folder);
    }
    }
}

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
    //DB::table('folders')->truncate();
    DB::table('folders')->delete();

    // 初期データ用意（列名をキーとする連想配列）
    $folders = [
              [
               'id' => 1,
               'company_apply_id' => 1,
               'sender_name' => '田中太郎',
               'user_id' => 1
              ],
              [
               'id' => 2,
               'company_apply_id' => 1,
               'sender_name' => '石川太郎',
               'user_id' => 2
              ]
             ];
             
    // 登録
    foreach($folders as $folder) {
      \App\Folder::create($folder);
    }
    }
}

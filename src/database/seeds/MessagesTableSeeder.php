<?php

use Illuminate\Database\Seeder;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                 // テーブルのクリア
    //DB::table('messages')->truncate();
    DB::table('messages')->delete();

    // 初期データ用意（列名をキーとする連想配列）
    $messages = [
              ['id' => 1,
               'folder_id' => 1,
               'name' => '田中太郎',
               'interview_message' => '御社の面接に行きたいです!'
              ],
              ['id' => 2,
               'folder_id' => 2,
               'name' => '石川太郎',
               'interview_message' => '私を御社の面接に行かせてください！'
              ]
             ];

    // 登録
    foreach($messages as $message) {
      \App\Message::create($message);
    }
    }
}

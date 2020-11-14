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
               'sender_name' => 'メッサーシュミットジャパン',
               'interview_message' => '面接に来てくださいね'
              ]
             ];

    // 登録
    foreach($messages as $message) {
      \App\Message::create($message);
    }
    }
}

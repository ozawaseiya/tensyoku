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
    DB::table('messages')->truncate();

    // 初期データ用意（列名をキーとする連想配列）
    $messages = [
              ['message_id' => 1,
               'message_category_id' => 1,
               'company_apply_id' => 1,
               'sender' => 1,
               'interview_message' => '面接に来てください'
              ]
             ];

    // 登録
    foreach($messages as $message) {
      \App\Message::create($message);
    }
    }
}

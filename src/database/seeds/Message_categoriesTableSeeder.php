<?php

use Illuminate\Database\Seeder;

class Message_categoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // テーブルのクリア
    DB::table('message_categories')->truncate();

    // 初期データ用意（列名をキーとする連想配列）
    $message_categories = [
              ['message_category_id' => 1,
               'company_apply_id' => 1,
               'sender_name' => 'メッサーシュミットジャパン',
               'id' => 1,
               'company_id' => 3,
              ]
             ];


    // 登録
    foreach($message_categories as $message_category) {
      \App\Message_category::create($message_category);
    }
    }
}

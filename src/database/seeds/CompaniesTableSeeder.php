<?php

use Illuminate\Database\Seeder;

class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // テーブルのクリア
    //DB::table('companies')->truncate();
    DB::table('companies')->delete();
    

    // 初期データ用意（列名をキーとする連想配列）
    $companies = [
              // ['id' => 1,
              //  'company_id' => 1,
              //  'company_name' => 'テスト１',
              //  'company_service' => '地方の中小企業のデジタルマーケティング代行サービス',
              //  'company_apply_job' => 'バックエンドエンジニア',
              //  'company_job_content' => '新規サービスの開発',
              //  'company_job_skill' => 'Ruby',
              //  'company_job_year' => 1,
              //  'company_member_number' => 50,
              //  'company_job_salary' => 400]
             ];
    // 登録
    foreach($companies as $company) {
      \App\Company::create($company);
    }
    }
}

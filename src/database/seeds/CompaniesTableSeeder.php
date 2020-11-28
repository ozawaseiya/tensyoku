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
              [
               'id' => 1,
               'company_id' => 1,
               'company_name' => '株式会社WEBチーム',
               'company_service' => 'デジタルマーケティング代行サービス',
               'company_apply_job' => 'バックエンドエンジニア',
               'company_job_content' => '新規サービスの開発',
               'company_job_skill' => 'Ruby',
               'company_job_month' => 6,
               'company_member_number' => 50,
               'company_job_salary' => 350,
               'file_name' => 'app.jpeg'
              ],
              [
                'id' => 2,
                'company_id' => 1,
                'company_name' => '株式会社WEBチーム',
                'company_service' => 'デジタルマーケティング代行サービス',
                'company_apply_job' => 'バックエンドエンジニア',
                'company_job_content' => '既存サービスの保守改修',
                'company_job_skill' => 'PHP',
                'company_job_month' => 0,
                'company_member_number' => 50,
                'company_job_salary' => 280,
                'file_name' => 'computer.jpeg'
              ],
              [
                'id' => 3,
                'company_id' => 1,
                'company_name' => '株式会社WEBチーム',
                'company_service' => 'デジタルマーケティング代行サービス',
                'company_apply_job' => 'バックエンドエンジニア',
                'company_job_content' => '既存サービスの保守改修',
                'company_job_skill' => 'JAVA',
                'company_job_month' => 8,
                'company_member_number' => 50,
                'company_job_salary' => 380,
                'file_name' => 'office.jpeg'
              ],
              [
                'id' => 4,
                'company_id' => 2,
                'company_name' => 'メッサーシュミットジャパン',
                'company_service' => '次世代のカーエンターテーメントサービス',
                'company_apply_job' => 'バックエンドエンドエンジニア',
                'company_job_content' => '既存サービスの保守改修',
                'company_job_skill' => 'Ruby',
                'company_job_month' => 7,
                'company_member_number' => 300,
                'company_job_salary' => 340,
                'file_name' => 'member.jpeg'
              ],
              [
                'id' => 5,
                'company_id' => 2,
                'company_name' => 'メッサーシュミットジャパン',
                'company_service' => '次世代のカーエンターテーメントサービス',
                'company_apply_job' => 'フロントエンドエンドエンジニア',
                'company_job_content' => '既存サービスの保守改修',
                'company_job_skill' => 'Javascript',
                'company_job_month' => 0,
                'company_member_number' => 300,
                'company_job_salary' => 300,
                'file_name' => 'app.jpeg'
              ],
              [
                'id' => 6,
                'company_id' => 3,
                'company_name' => 'エンジニアリングパワー',
                'company_service' => '海外オフショアでの受託開発サービス',
                'company_apply_job' => 'バックエンドエンジニア',
                'company_job_content' => '新規海外オフショアプロジェクトの立ち上げ',
                'company_job_skill' => 'PHP',
                'company_job_month' => 0,
                'company_member_number' => 100,
                'company_job_salary' => 240,
                'file_name' => 'global.jpeg'
                ]
             ];
    // 登録
    foreach($companies as $company) {
      \App\Company::create($company);
    }
    }
}

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
    DB::table('companies')->truncate();

    // 初期データ用意（列名をキーとする連想配列）
    $companies = [
              ['id' => 1,
               'company_id' => 1,
               'company_name' => 'ロイヤリティ株式会社',
               'company_service' => '地方の中小企業のデジタルマーケティング代行サービス',
               'company_apply_job' => 'バックエンドエンジニア',
               'company_job_content' => '新規サービスの開発',
               'company_job_skill' => 'Ruby',
               'company_job_year' => 1,
               'company_member_number' => 50,
               'company_job_salary' => 400],
              ['id' => 2,
               'company_id' => 2,
               'company_name' => 'バイタリティ株式会社',
               'company_service' => '医療・健康情報提供サービス',
               'company_apply_job' => 'フロントエンドエンジニア',
               'company_job_content' => 'カスタマー向けのユーザーインターフェイスの改善業務',
               'company_job_skill' => 'Javascript',
               'company_job_year' => 5,
               'company_member_number' => 30,
               'company_job_salary' => 700],
              ['id' => 3,
               'company_id' => 2,
               'company_name' => 'ITソリューション株式会社',
               'company_service' => '海外オフショアに特化したWEBシステム開発サービス',
               'company_apply_job' => 'インフラエンジニア',
               'company_job_content' => '社内システムの運営',
               'company_job_skill' => 'PHP',
               'company_job_year' => 3,
               'company_member_number' => 70,
               'company_job_salary' => 500],
              ['id' => 4,
               'company_id' => 2,
               'company_name' => 'イリューシンテック株式会社',
               'company_service' => '業務改善システム構築サービス',
               'company_apply_job' => 'バックエンドエンジニア',
               'company_job_content' => 'クライアント先にてヒアリングとサービス開発',
               'company_job_skill' => 'JAVA',
               'company_job_year' => 1,
               'company_member_number' => 100,
               'company_job_salary' => 400],
              ['id' => 5,
               'company_id' => 3,
               'company_name' => 'メッサーシュミットジャパン株式会社',
               'company_service' => 'カーシェアリングサービス',
               'company_apply_job' => 'バックエンドエンジニア',
               'company_job_content' => '新規サービスの開発',
               'company_job_skill' => 'Ruby',
               'company_job_year' => 2,
               'company_member_number' => 350,
               'company_job_salary' => 500],
               ['id' => 6,
               'company_id' => 3,
               'company_name' => 'どこでも株式会社',
               'company_service' => '格安航空券検索サービス',
               'company_apply_job' => 'バックエンドエンジニア',
               'company_job_content' => '新規サービスの開発',
               'company_job_skill' => 'PHP',
               'company_job_year' => 5,
               'company_member_number' => 70,
               'company_job_salary' => 700],
             ];
    // 登録
    foreach($companies as $company) {
      \App\Company::create($company);
    }
    }
}

@extends('layouts.app')

@section('content')
<div class="container ops-main">
<div class="row">
  <div class="col-xs-14">
    <h3 class="ops-title">求人企業一覧 {{ $companyNumbers }}件</h3>
  </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-3 px-1 position-fixed" id="sticky-sidebar">
        <ul class="nav  nav-stacked　d-flex flex-column py-md-4">
            <li class="active py-md-3"><a href="{{ route('info') }}">この転職サイトについて</a></li>
            <li class="py-md-4"><a href="#">個人プロフィールを見る</a></li>
            <li class="py-md-4"><a href="#">メッセージを確認する</a></li>
         </ul>
        </div>
        <div class="col offset-3" id="main">
        <table class="table text-center">
    　<tr>
      <th>求人へのリンク</th>
      <th>募集</th>
      <th>会社名</th>
      <th>サービス内容</th>
      <th>募集職種</th>
      <th>スキル</th>
      <th>年収</th>
     </tr>
      @foreach($companies as $company)
      <tr>
        <td>
          <a href="/{{ $company->company_apply_id }}">この求人を見る</a>
        </td>
        <td>{{ $company->company_apply_id }}</td>
        <td>{{ $company->company_name }}</td>
        <td>{{ $company->company_service }}</td>
        <td>{{ $company->company_apply_job }}</td>
        <td>{{ $company->company_job_skill }}</td>
        <td>{{ $company->company_job_salary }}</td>
      </tr>
      @endforeach
    </table>
        </div>
    </div>
</div>
@endsection
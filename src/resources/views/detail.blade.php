@extends('layouts.user.app')

@section('content')
<div class="container ops-main">
<div class="row">
  <div class="col-xs-14">
    <h3 class="ops-title">求人企業詳細</h3>
  </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-3 px-1 position-fixed" id="sticky-sidebar">
        <ul class="nav  nav-stacked　d-flex flex-column py-md-4">
            <li class="active py-md-3"><a href="{{ route('info') }}">この転職サイトについて</a></li>
            @if( Auth::check() )
            <li class="py-md-4"><a href="{{ route('profile') }}">個人プロフィールを見る</a></li>
            <li class="py-md-4"><a href="#">メッセージを確認する</a></li>
　　　　　　　@endif
         </ul>
        </div>
        <div class="col offset-3" id="main">
        <table class="table text-center">
    　<tr>
      <th>会社名</th>
      <th>サービス内容</th>
      <th>募集職種</th>
      <th>スキル</th>
      <th>年収</th>
     </tr>
      <tr>
        <td>{{ $detail->company_name }}</td>
        <td>{{ $detail->company_service }}</td>
        <td>{{ $detail->company_apply_job }}</td>
        <td>{{ $detail->company_job_skill }}</td>
        <td>{{ $detail->company_job_salary }}</td>
      </tr>
    </table>
    <a href="">この求人に応募する</a>
    <br><br>
    <a href="{{ route('list') }}">一覧に戻る</a>
        </div>
    </div>
</div>
@endsection
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
            <li class="py-md-4"><a style="color:green;" href="{{ route('profile') }}">個人プロフィールを見る</a></li>
　　　　　　　@endif
         </ul>
        </div>
        <div class="col offset-3" id="main">

        <p style="text-align:center; color:#2a2a64; font-weight:bold;">会社名：{{ $detail->company_name }}</p>
        <br>
        <div style="width:600px; background-color:#D5E0F2; padding: 20px 20px 20px 20px;" class="container">
        <p>サービス内容：{{ $detail->company_service }}</p>
        <p>募集職種：{{ $detail->company_apply_job }}</p>
        <p>職種内容：{{ $detail->company_job_content }}</p>
        <p>スキル：{{ $detail->company_job_skill }}</p>
        <p>経験年数{{ $detail->company_job_year }}</p>
        <p>社員数：{{ $detail->company_member_number }}</p>
        <p>年収：{{ $detail->company_job_salary }}</p>

    <br><br>
    @if (Auth::guard('user')->check())
    @if ( $apply == Auth::user()->name )
    <p>この求人に既に応募済みです</p>
    <a href="{{ route('apply.folder') }}">企業からのメッセージを確認する</a>
    @else
    @if ($detail->company_job_stop === NULL)
    <a style="color:green;" href="{{ route('create', $id = $detail->id )}}">この求人に応募する</a>
    @else 
    <p>この求人は募集停止中です！</p>
    @endif
    @endif
    @endif
    <br><br>
    <a style="color:green;" href="{{ route('list') }}">一覧に戻る</a>
        </div>
    </div>
    </div>
</div>
@endsection
@extends('layouts.user.app')

@section('content')
<div class="container ops-main">
<div class="row">
  <div class="col-xs-14">
    <h3 class="ops-title">プロフィール情報詳細</h3>
  </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-3 px-1 position-fixed" id="sticky-sidebar">
        <ul class="nav  nav-stacked　d-flex flex-column py-md-4">
            <li class="active py-md-3"><a style="color:#FF8C00;" href="{{ route('info') }}">この転職サイトについて</a></li>
            @if( Auth::check() )
            <li class="py-md-4"><a style="color:green;" href="{{ route('profile') }}">個人プロフィールを見る</a></li>
　　　　　　　@endif
         </ul>
        </div>
        <div class="col offset-3" id="main">
        <h5 style="text-align:center; color:#2a2a64;">あなたのプロフィール</h5>
        <br><br>
        <table class="table text-center" style="padding: 20px 20px 20px 20px;">
    　<tr><th>ユーザー名</th><td>{{ Auth::user()->name }}</td></tr>
      <tr><th>メールアドレス</th><td>{{ Auth::user()->email }}</td></tr>
      <tr><th>経験月数（個人開発含む）</th><td>{{ Auth::user()->month }}ヶ月</td></tr>
      <tr><th>職種</th><td>{{ Auth::user()->position }}</td></tr>
      <tr><th>スキル</th><td>{{ Auth::user()->skill }}</td></tr>
    </table>
    <a href="{{ route('list') }}">一覧に戻る</a>
　　<br><br>
   <br><br>
   <p style="color:red;">*一度削除すると応募したデータ等は失われます。よろしいですか？</p>
   <a class="btn btn-danger" href="{{ action('HomeController@destroy') }}">このサイトから退会する</a>
        </div>
    </div>
</div>
@endsection
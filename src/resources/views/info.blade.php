@extends('layouts.user.app')

@section('content')
<div class="container ops-main">
<div class="row">
  <div class="col-xs-14">
    <h3 class="ops-title">この転職サイトについて</h3>
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
        エンジニア未経験者が転職成功時にサイト運営社に成功報酬30万円を支払う都内特化型エンジニア転職サイト
        <br><br>
通常は新規社員の採用に成功した会社が成功報酬又は掲載料を転職サイト運営社に支払う。しかし、このシステムだと先述の支払いコストの観点から、実力が不明瞭なエンジニア未経験者の採用に慎重にならざるをえない。
この問題を解決するためにエンジニア未経験者側からお金を払う方法にすれば企業側は成功報酬支払い・掲載料支払い不要でエンジニア未経験者を採用することができる。未経験者は30万を転職成功時にサイト運営社側に支払うだけで他の転職サイト経由より応募先企業に採用されやすくなる。
<br><br>
    <a href="{{ route('list') }}">一覧に戻る</a>
        </div>
    </div>
</div>
@endsection
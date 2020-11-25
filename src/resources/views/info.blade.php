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
            <li class="py-md-4"><a style="color:green;" href="{{ route('profile') }}">個人プロフィールを見る</a></li>
　　　　　　　@endif
         </ul>
        </div>
        <div class="col offset-3" id="main">
        <h5 style="text-align:center; color:#2a2a64;">未経験エンジニアが成功報酬10万円を支払う<br>都内特化型エンジニア転職サイト</h5>
        <br><br>
<p style="width:600px; margin:0 auto;">
「未経験エンジニアとコストを有効に使いたいIT・WEB系企業とのマッチングサイト」
<br><br>
新たに人材を採用したいIT・WEB系企業は「採用成功報酬」又は「掲載料」を転職サイト運営会社に支払う仕組みが一般的です。
<br><br>
これは当然のビジネス対価でした。
<br><br>
ゆえにIT・WEB系企業は実力が不明瞭な未経験者採用に慎重にならざるを得ません。
<br><br>
しかし最初は誰もが未経験だった筈です。
<br><br>
ですから未経験エンジニアの高いモチベーションにその原石を探してみませんか？双方にwin win で。
<br><br>
ここでは志願者側が就職初期費用として10万円を払います(採用決定時)。
この仕組みだと採用側でのコストが消失し、志願者には門戸が大きく開かれます。
10万円？ 安いものです。
<br><br>
<br><br>
未経験エンジニア転職サイト運営会社 2020年11月26日
</p>
<br>
    <a style="margin-left:100px;" href="{{ route('list') }}">一覧に戻る</a>
        </div>
    </div>
</div>
@endsection
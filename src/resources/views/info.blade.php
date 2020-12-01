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
            <li class="active py-md-3"><a style="color:#FF8C00;" href="{{ route('list') }}">一覧に戻る</a></li>
            @if( Auth::check() )
            <li class="py-md-4"><a style="color:green;" href="{{ route('profile') }}">個人プロフィールを見る</a></li>
　　　　　　　@endif
         </ul>
        </div>
        <div class="col offset-3" id="main">
        <h5 style="text-align:center; color:#2a2a64;">未経験エンジニア・経験の浅いエンジニアが成功報酬10万円を支払う<br>都内特化型エンジニア転職サイト</h5>
        <br><br>
<div style="width:600px; margin:0 auto; background-color:#D5E0F2; padding: 20px 20px 20px 20px;">
「未経験・経験の浅いエンジニアとコストを有効に使いたいIT・WEB系企業とのマッチングサイト」
<br><br>
新たに人材を採用したいIT・WEB系企業は「採用成功報酬」又は「掲載料」を転職サイト運営会社に支払う仕組みが一般的です。
<br><br>
これは当然のビジネス対価です。
<br><br>
ゆえにIT・WEB系企業は実力が不明瞭な未経験者・経験の浅いエンジニアの採用に慎重にならざるを得ません。不確定要素の大きい投資はなるべく回避したいからです。
<br><br>
しかし、最初は誰もが未経験や経験不足の筈です。そんな「未経験エンジニア」達にチャンスを与えたい。そう私たちは考えました。そしてこのマッチングサービスをリリースしました！
<br><br>
未経験・経験の浅いエンジニアの方は是非、当サービスを利用して高いモチベーションを企業側に見せつけてやりませんか？もちろん双方にwin winの形で。
<br><br>
ここでは求職者側が就職初期費用として10万円を払います。
この仕組みだと採用側でのコストが消失し、求職者には門戸が大きく開かれることになります。
<br><br>
あなたの果てしないポテンシャルを採用側に見せつけてやりましょう！
<br><br>
</div>
<br><br>
<div style="width:600px; margin:0 auto;" >
<p style="color:red; font-weight:bold;">10万円の支払い方法</p><p style="color:red;">採用後の月額初任給のうち、10万円分を採用した会社側が事務手続きを通して運営会社に送金して支払いの完了となります。
</p><p style="color:red;">*通常よりも月額初任給が10万円低くなります。</p>
</div>
<br>
<div style="margin: 0 auto; width:600px; background-color:#D5E0F2; padding: 20px 20px 20px 20px;">
<p>運営会社：Hello Job!株式会社
<br>
代表者：未経験太郎
<br>
設立：2020年
<br>
資本金：300万円
<br>
従業員数：8人
<br>
事業内容：WEBメディア運営、転職サイト運営、システム受託開発
<br>
売上：4500万円
</p>
</div>
<br>
    <a style="margin-left:100px;" href="{{ route('list') }}">一覧に戻る</a>
    <br><br>
        </div>
    </div>
</div>
@endsection
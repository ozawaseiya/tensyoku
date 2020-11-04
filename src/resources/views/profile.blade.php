@extends('layouts.app')

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
      <th>ユーザー名</th>
      <th>メールアドレス</th>
      <th>経験年数</th>
      <th>職種</th>
      <th>スキル</th>
     </tr>
      <tr>
        <td>{{ Auth::user()->name }}</td>
        <td>{{ Auth::user()->email }}</td>
        <td>{{ Auth::user()->year }}</td>
        <td>{{ Auth::user()->position }}</td>
        <td>{{ Auth::user()->skill }}</td>
      </tr>
    </table>
    <br><br>
    <a href="{{ route('list') }}">一覧に戻る</a>
        </div>
    </div>
</div>
@endsection
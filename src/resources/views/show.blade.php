@extends('layouts.user.app')

@section('content')
<div class="container ops-main">
<div class="row">
  <div class="col-xs-14">
    <h3 class="ops-title">応募情報画面</h3>
  </div>
</div>
<br><br>
<div class="container">
    <div class="row">
      <div class="col col-md-8">
        <nav class="panel panel-default">
          <div class="panel-heading">
          {{ $user->name }}さんの応募メッセージとプロフィール
          </div>
          <div class="panel-body">
          </div>
          <div class="list-group">
               <p> {{ $message->interview_message }}</p>
               <br><br>
          </div>
        </nav>
      </div>
      <div class="column col-md-8">
      </div>
    </div>
    <a href="{{ url()->previous() }}">前のページに戻る</a>
  </div>
@endsection
@extends('layout')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col col-md-offset-3 col-md-6">
        <div class="text-center">
          <p>指定した案件フォルダを削除しました。</p>
          <p>新しいフォルダを追加する場合は「案件フォルダを追加する」ボタンをクリックしてください。</p>
          <a href="{{ route('home') }}" class="btn">
            ホームへ戻る
          </a>
        </div>
      </div>
    </div>
  </div>
@endsection
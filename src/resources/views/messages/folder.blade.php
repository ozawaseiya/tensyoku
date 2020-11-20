<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>メッセージ</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<header>
<nav class="my-navbar">
    <a class="my-navbar-brand" href="/">未経験エンジニア転職サイト</a>
  </nav>
</header>
<main>
  <div class="container">
    <div class="row">
      <div class="col col-md-5">
        <nav class="panel panel-default">
          <div class="panel-heading">企業からのメッセージ用のフォルダ</div>
          <div class="panel-body">
          </div>
          <div class="list-group">
          @foreach($folders as $folder)
          @if ($folder->company_name == NULL)
          <p>企業からのメッセージはありません</p>
          <br>
          @else
          <a href="{{ route('messages.message', $folder_id = $folder->id)}}" class="list-group-item">
          {{ $folder->company_name }}
          </a>
          @endif
          @endforeach
          </div>
        </nav>
      </div>
      <div class="column col-md-8">
      </div>
    </div>
    <a href="{{ url()->previous() }}">前のページに戻る</a>
  </div>
</main>
</body>
</html>

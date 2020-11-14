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
    <a class="my-navbar-brand" href="/">メッセージ</a>
  </nav>
</header>
<main>
  <div class="container">
    <div class="row">
      <div class="col col-md-4">
        <nav class="panel panel-default">
          <div class="panel-heading">応募者からのメッセージ用のフォルダ</div>
          <div class="panel-body">
          </div>
          <div class="list-group">
            @foreach($folders as $folder)
              <a href="{{ route('messages.index', ['id' => $folder->id]) }}" class="list-group-item">
                {{ $folder->sender_name }}
              </a>
            @endforeach
          </div>
        </nav>
      </div>
      <div class="column col-md-8">

      </div>
    </div>
    <a href="{{ route('admin') }}">トップページに戻る</a>
  </div>
</main>
</body>
</html>

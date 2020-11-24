<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
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
          <div class="panel-heading">企業からのメッセージ用のフォルダ(空欄の場合は連絡がありません)</div>
          <div class="panel-body">
          </div>
          <div class="list-group">
          @foreach($folders as $folder)
          @if ($folder->company_name == NULL)
          <br>
          @else
          <a href="{{ route('apply.message', $folder_id = $folder->id)}}" class="list-group-item">
          {{ $folder->company_name }}からメッセージがきています
          </a>
          @endif
          @endforeach
          </div>
        </nav>
      </div>
      
    </div>
    <a href="{{ route('list') }}">一覧のページに戻る</a>
  </div>
</main>
</body>
</html>
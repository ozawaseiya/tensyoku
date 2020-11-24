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
    <a class="my-navbar-brand" href="/admin">管理画面トップページへ</a>
  </nav>
</header>
<main>
  <div class="container">
    <div class="row">
      <div class="col col-md-5">
        <nav class="panel panel-default">
          <div style="text-align:center; color:#2a2a64;" class="panel-heading">応募者からのメッセージ用のフォルダ</div>
          <div class="panel-body">
          </div>
          <div class="list-group">
            @foreach($folders as $folder)
            <a href="{{ route('messages.data', $current_folder_id = $folder->id) }}" class="list-group-item">
            {{ $loop->iteration }}{{ $folder->sender_name }}
              </a>
            @endforeach
          </div>
        </nav>
      </div>
      <div class="column col-md-8">
      </div>
    </div>
    <a href="{{ route('admin.read') }}">募集要項一覧のページに戻る</a>
  </div>
</main>
</body>
</html>

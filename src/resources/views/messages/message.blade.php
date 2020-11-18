<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>企業からのメッセージ</title>
  <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
<header>
  <nav class="my-navbar">
    <a class="my-navbar-brand" href="/">企業からのメッセージ</a>
  </nav>
</header>
<main>
  <div class="container">
    <div class="row">
      <div class="col col-md-8">
        <nav class="panel panel-default">
          <div class="panel-heading">
          {{ $folder->sender_name }}からの応募メッセージとプロフィール
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
</main>
</body>
</html>

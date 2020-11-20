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
    <a class="my-navbar-brand" href="/admin">管理画面トップページへ</a>
  </nav>
</header>
<main>
  <div class="container">
    <div class="row">
      <div class="col col-md-8">
        <nav class="panel panel-default">
          <div class="panel-heading">
          {{ $user->name }}さんからの応募メッセージとプロフィール
          </div>
          <div class="panel-body">
          </div>
          <div class="list-group">
               <p> {{ $message->interview_message }}</p>
               <br><br>
    <table class="table text-center">
    　<tr>
      <th>ユーザー名</th>
      <th>メールアドレス</th>
      <th>経験年数</th>
      <th>職種</th>
      <th>スキル</th>
     </tr>
      <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td>{{ $user->year }}</td>
        <td>{{ $user->position }}</td>
        <td>{{ $user->skill }}</td>
      </tr>
    </table>
          </div>
        </nav>
      </div>
      <div class="column col-md-8">
      <a href="{{ url()->previous() }}">前のページに戻る</a>
      </div>
    </div>
    <br><br>
    <a class="btn btn-danger" href="{{ route('messages.datadestroy', $folder_id = $message->folder_id) }}">この応募を削除する</a>
  </div>
</main>
</body>
</html>

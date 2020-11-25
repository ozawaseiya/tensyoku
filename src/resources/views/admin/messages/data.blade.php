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
      <div class="col col-md-8">
        <nav class="panel panel-default">
          <div style="text-align:center; color:#2a2a64;" class="panel-heading">
          {{ $user->name }}さんからの応募メッセージとプロフィール
          </div>
          <div class="panel-body">
          </div>
          <div style="padding-left:10px;" class="list-group">
          @foreach($messages as $message)
               <p>{{ $message->name }} : {{ $message->interview_message }}（{{ $message->created_at }}）</p>
          @endforeach
               <br><br>
               </div>
        </nav>
      </div>
    
    <table style="width:780px;" class="table text-center">
    　<tr>
      <th>ユーザー名</th>
      <th>メールアドレス</th>
      <th>経験月数</th>
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
          
      <div class="column col-md-8">
      <a href="{{ route('admin.messages.reply', $id = $message->folder_id) }}">このメッセージに対して返信する</a>
      <br><br>
      </div>
      <div class="column col-md-8">
      <a style="color:green;" href="{{ url()->previous() }}">前のページに戻る</a>
      <br><br>
      </div>
      <div class="column col-md-8">
      <a style="color:#FF8C00;" href="{{ route('admin.read') }}">募集一覧ページに戻る</a>
      </div>
    </div>
    <br><br>
    @if (isset($folder->hire))
    <p style="color:red; font-weight:bold;">＊「{{ $user->name }}」さんは既に採用されました！おめでとうございます！
    <br>運営会社への連絡をお願いします。その際に翌月の社員リストのご提示をお願いします。</p>
    @else
    <a class="btn btn-primary" href="{{ route('messages.hire', $id = $message->folder_id) }}">この応募者を採用する</a> 
    @endif
    <br><br>
    <p style="color:red">＊基本的に応募を削除することは望ましくありません</p>
    <a class="btn btn-danger" href="{{ route('messages.datadestroy', $folder_id = $message->folder_id) }}">この応募を削除する</a> 
  </div>
</main>
</body>
</html>

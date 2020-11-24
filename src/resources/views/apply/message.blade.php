<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <title>企業からのメッセージ</title>
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
      <div class="col col-md-8">
        <nav class="panel panel-default">
          <div class="panel-heading">
          あなたと「{{ $folder->company_name }}」とのメッセージのやり取り
          </div>
          <div class="panel-body">
          </div>
          <div class="list-group">
          @foreach($messages as $message)
               <p>{{ $message->name }} : {{ $message->interview_message }}（{{ $message->created_at }}）</p>
          @endforeach
               <br><br>
          </div>
        </nav>
      </div>
    </div>

    
    <a style="color:green;" href="{{ route('recreate', $id = $folder->id) }}">企業にメッセージを送信する</a>
    <br><br>
    <a href="{{ url()->previous() }}">前のページに戻る</a>
    <br><br><br><br>
    <p style="color:#2a2a64; font-weight:bold;">この求人の詳細</p>
        <br>
        <div style="background-color:#D5E0F2; padding: 20px 20px 20px 20px;" class="col col-md-8">
        <p>会社名：{{ $detail->company_name }}</p>
        <p>サービス内容：{{ $detail->company_service }}</p>
        <p>募集職種：{{ $detail->company_apply_job }}</p>
        <p>職種内容：{{ $detail->company_job_content }}</p>
        <p>スキル：{{ $detail->company_job_skill }}</p>
        <p>経験年数{{ $detail->company_job_year }}</p>
        <p>社員数：{{ $detail->company_member_number }}</p>
        <p>年収：{{ $detail->company_job_salary }}</p>
        </div>
  </div>
</main>
</body>
</html>

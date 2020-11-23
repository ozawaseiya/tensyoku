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
          <div class="panel-heading">
          応募者への返信メッセージ
          </div>
          <div class="panel-body">
          </div>
          <div class="list-group">
               　　　　<form method="POST" action="{{ route('admin.messages.replystore', $folder_id = $folder->id) }}">
                @csrf
                
                <input id="folder_id" name="folder_id"
                       value="{{ $folder_id = $folder->id }}"
                       type="hidden"> 

                <input
                       id="name"
                       name="name"
                       class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                       value="{{ Auth::guard('admin')->user()->company_name }}"
                       type="hidden">

                <fieldset class="mb-4">
                    <div class="form-group">
                        <label for="company_name">
                            返信者名
                        </label>
                        <input
                            id="company_name"
                            name="company_name"
                            class="form-control {{ $errors->has('company_name') ? 'is-invalid' : '' }}"
                            value="{{ Auth::guard('admin')->user()->company_name }}"
                            type="text"
                        >
                        @if ($errors->has('company_name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('company_name') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="interview_message">
                            返信メッセージ内容
                        </label>
                        
                        <input
                            id="interview_message"
                            name="interview_message"
                            class="form-control {{ $errors->has('interview_message') ? 'is-invalid' : '' }}"
                            value="{{ old('interview_message') }}"
                            type="text"
                        >
                        @if ($errors->has('interview_message'))
                            <div class="invalid-feedback">
                                {{ $errors->first('interview_message') }}
                            </div>
                        @endif
                    </div>


                    <div class="mt-5">
                        <a class="btn btn-secondary" href="{{ url()->previous() }}">
                            キャンセル
                        </a>

                        <button type="submit" class="btn btn-primary">
                            返信メッセージを送信する
                        </button>
                    </div>
                </fieldset>
            </form>

          </div>
        </nav>
      </div>
      <div class="column col-md-8">
      <a href="{{ url()->previous() }}">前のページに戻る</a>
      </div>
    </div>
  </div>
</main>
</body>
</html>


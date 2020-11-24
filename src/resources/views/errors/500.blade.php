@extends('layouts.user.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">500エラーです</div>

                <div class="card-body">
                    ユーザーアカウント又は企業管理者アカウントが削除された可能性があります。
                    <br><br>
                    <a href="{{ route('list') }}">求人一覧画面に戻る</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
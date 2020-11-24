@extends('layouts.user.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">403エラーです</div>

                <div class="card-body">
                    このページへのアクセス権限がありません。
                    <br><br>
                    <a href="{{ route('list') }}">求人一覧画面に戻る</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
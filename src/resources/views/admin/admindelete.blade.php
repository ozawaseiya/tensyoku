@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">会員削除完了画面</div>

                <div class="card-body">
                    会員削除が完了しました!
                    <br><br>
                    <a href="{{ route('admin') }}">管理画面へ進む</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
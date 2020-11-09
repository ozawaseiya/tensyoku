@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">会員登録完了画面</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    会員登録が完了しました!
                    <br><br>
                    <a href="{{ route('admin') }}">管理画面へ進む</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.admin.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">募集停止完了画面</div>

                <div class="card-body">

                    募集停止が完了しました!
                    <br><br>
                    <a href="{{ route('admin.read') }}">一覧画面へ進む</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@extends('layouts.user.app')

@section('content')
<div class="container ops-main">
<div class="row">
  <div class="col-xs-14">
    <h3 class="ops-title">求人企業詳細</h3>
  </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-3 px-1 position-fixed" id="sticky-sidebar">
        <ul class="nav  nav-stacked　d-flex flex-column py-md-4">
            <li class="active py-md-3"><a href="{{ route('info') }}">この転職サイトについて</a></li>
            @if( Auth::check() )
            <li class="py-md-4"><a href="{{ route('profile') }}">個人プロフィールを見る</a></li>
            <li class="py-md-4"><a href="#">メッセージを確認する</a></li>
　　　　　　　@endif
         </ul>
        </div>
        <div class="col offset-3" id="main">
        <div class="col offset-3" id="main">
        <h3>応募用メッセージの作成</h3>
        <br>


        <form method="POST" action="{{ route('restore', $id) }}">
                @csrf

                <input id="folder_id" name="folder_id" value="{{ $id->id }}" type="hidden">

                <fieldset class="mb-4">
                    <div class="form-group">
                        <label for="name">
                            応募者名
                        </label>
                        <input
                            id="name"
                            name="name"
                            class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                            value="<?php print Auth::user()->name; ?>"
                            type="text"
                        >
                        @if ($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="interview_message">
                            応募メッセージ内容
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
                            応募メッセージを送信する
                        </button>
                    </div>
                </fieldset>
            </form>
    <br>
    <a href="{{ route('list') }}">トップページに戻る</a>
        </div>
        </div>
    </div>
</div>
@endsection
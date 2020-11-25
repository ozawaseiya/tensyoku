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


        <form method="POST" action="{{ route('store', $id) }}">
                @csrf

                <input id="company_apply_id" name="company_apply_id"
                       value="{{ $id }}"
                       type="hidden"> 


                <input id="folder_id" name="folder_id"
                       value="{{ $folder+1 }}"
                       type="hidden"> 

                <input
                        id="name"
                        name="name"
                        class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                        value="<?php print Auth::user()->name; ?>"
                        type="hidden">


                <input id="user_id" name="user_id"
                       value="<?php print Auth::user()->id; ?>"
                       type="hidden"> 
       
                <fieldset class="mb-4">
                    <div class="form-group">
                        <label for="sender_name">
                            応募者名
                        </label>
                        <input
                            id="sender_name"
                            name="sender_name"
                            class="form-control {{ $errors->has('sender_name') ? 'is-invalid' : '' }}"
                            value="<?php print Auth::user()->name; ?>"
                            type="text"
                        >
                        @if ($errors->has('sender_name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('sender_name') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="interview_message">
                            熱い応募メッセージ欄（ユーザーのプロフィール情報は自動送信されます）
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
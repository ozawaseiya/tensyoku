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
        <h3>募集職種の作成</h3>
        <br>


        <form method="POST" action="{{ route('store') }}">
                @csrf

                <input id="company_id" name="company_id"
                       value="<?php print Auth::user()->id; ?>"
                       type="hidden"> 
       
                <fieldset class="mb-4">
                    <div class="form-group">
                        
                        <label for="name">
                            応募者名
                        </label>
                        <input
                            id="name"
                            name="name"
                            class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                            value="{{ old('name') }}"
                            type="text"
                        >
                        @if ($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="company_service">
                            サービス内容
                        </label>
                        <input
                            id="company_service"
                            name="company_service"
                            class="form-control {{ $errors->has('company_service') ? 'is-invalid' : '' }}"
                            value="{{ old('company_service') }}"
                            type="text"
                        >
                        @if ($errors->has('company_service'))
                            <div class="invalid-feedback">
                                {{ $errors->first('company_service') }}
                            </div>
                        @endif
                    </div>


                    <div class="mt-5">
                        <a class="btn btn-secondary" href="{{ url()->previous() }}">
                            キャンセル
                        </a>

                        <button type="submit" class="btn btn-primary">
                            作成する
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
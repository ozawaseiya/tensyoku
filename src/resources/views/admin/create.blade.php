@extends('layouts.admin.app')

@section('content')
<div class="container ops-main">

<div class="container-fluid">
    <div class="row">
        <div class="col-3 px-1 position-fixed" id="sticky-sidebar">
        <ul class="nav  nav-stacked　d-flex flex-column py-md-4">
            @if((Auth::guard('admin')->check()))
            <li class="py-md-4"><a href="{{ url('/admin/read') }}">募集要項を確認する</a></li>
            <li class="py-md-4"><a style="color:#FF8C00;" href="{{ route('admin.create')}}">募集職種を作成する</a></li>
　　　　　　　@endif
         </ul>
        </div>
        <div class="col offset-3" id="main">
        <h3 style="text-align:center; color:#2a2a64;">募集職種の作成</h3>
        <br>

        <form method="POST" action="{{ route('admin.store') }}" enctype="multipart/form-data">
                @csrf

                <input id="company_id" name="company_id"
                       value="<?php print Auth::guard('admin')->user()->id; ?>"
                       type="hidden"> 
       
                <fieldset class="mb-4">
                    <div class="form-group">
                        
                        <label for="company_name">
                            会社名
                        </label>
                        <input
                            id="company_name"
                            name="company_name"
                            class="form-control {{ $errors->has('company_name') ? 'is-invalid' : '' }}"
                            value="<?php print Auth::guard('admin')->user()->company_name; ?>"
                            type="text"
                        >
                        @if ($errors->has('company_name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('company_name') }}
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

                    <div class="form-group">
                        <label for="company_apply_job">
                            募集職種
                        </label>
                        <input
                            id="company_apply_job"
                            name="company_apply_job"
                            class="form-control {{ $errors->has('company_apply_job') ? 'is-invalid' : '' }}"
                            value="{{ old('company_apply_job') }}"
                            type="text"
                        >
                        @if ($errors->has('company_apply_job'))
                            <div class="invalid-feedback">
                                {{ $errors->first('company_apply_job') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="company_job_content">
                            職種内容
                        </label>
                        <input
                            id="company_job_content"
                            name="company_job_content"
                            class="form-control {{ $errors->has('company_job_content') ? 'is-invalid' : '' }}"
                            value="{{ old('company_job_content') }}"
                            type="text"
                        >
                        @if ($errors->has('company_job_content'))
                            <div class="invalid-feedback">
                                {{ $errors->first('company_job_content') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="company_job_skill">
                            スキル
                        </label>
                        <input
                            id="company_job_skill"
                            name="company_job_skill"
                            class="form-control {{ $errors->has('company_job_skill') ? 'is-invalid' : '' }}"
                            value="{{ old('company_job_skill') }}"
                            type="text"
                        >
                        @if ($errors->has('company_job_skill'))
                            <div class="invalid-feedback">
                                {{ $errors->first('company_job_skill') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="company_job_month">
                            経験月数（個人開発経験含む）
                        </label>
                        <input
                            id="company_job_month"
                            name="company_job_month"
                            class="form-control {{ $errors->has('company_job_month') ? 'is-invalid' : '' }}"
                            value="{{ old('company_job_month') }}"
                            type="number"
                            min="0"
                        >
                        @if ($errors->has('company_job_month'))
                            <div class="invalid-feedback">
                                {{ $errors->first('company_job_month') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="company_member_number">
                            社員数
                        </label>
                        <input
                            id="company_member_number"
                            name="company_member_number"
                            class="form-control {{ $errors->has('company_member_number') ? 'is-invalid' : '' }}"
                            value="{{ old('company_member_number') }}"
                            type="number"
                            min="0"
                        >
                        @if ($errors->has('company_member_number'))
                            <div class="invalid-feedback">
                                {{ $errors->first('company_member_number') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="company_job_salary">
                            年収（万円）
                        </label>
                        <input
                            id="company_job_salary"
                            name="company_job_salary"
                            class="form-control {{ $errors->has('company_job_salary') ? 'is-invalid' : '' }}"
                            value="{{ old('company_job_salary') }}"
                            type="number"
                            min="0"
                        >
                        @if ($errors->has('company_job_salary'))
                            <div class="invalid-feedback">
                                {{ $errors->first('company_job_salary') }}
                            </div>
                        @endif
                    </div>

　　　　　　　　　　　　<div class="form-group">
                    <label for="photo">画像ファイル（最大アップロードサイズは8Mです：容量が大きいほど時間がかかります）</label><br>
                    <input type="file"  name="file_name" required>
                    </div>

                    <div class="mt-5">
                        <a class="btn btn-secondary" href="{{ route('admin') }}">
                            キャンセル
                        </a>

                        <button type="submit" class="btn btn-primary">
                            作成する
                        </button>
                    </div>
                </fieldset>
            </form>
    <br>
    <a style="color:green;" href="{{ route('admin') }}">トップページに戻る</a>
    <br>
        </div>
    </div>
</div>
@endsection
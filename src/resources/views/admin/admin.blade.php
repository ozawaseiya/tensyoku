@extends('layouts.admin.app')

@section('content')
<div class="container ops-main">
<div class="row">
  <div class="col-xs-14">
    <h3 class="ops-title">管理者画面</h3>
  </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-3 px-1 position-fixed" id="sticky-sidebar">
        <ul class="nav  nav-stacked　d-flex flex-column py-md-4">
            @if((Auth::guard('admin')->check()))
            <li class="py-md-4"><a href="{{ route('admin.read')}}">募集要項を確認する</a></li>
            <li class="py-md-4"><a href="{{ route('admin.create')}}">募集職種を作成する</a></li>
            <li class="py-md-4"><a href="{{ route('admin.admindestroy') }}">管理者を退会する</a></li>
　　　　　　　@endif
         </ul>
        </div>
        <div class="col offset-3" id="main">
        <h4>この管理画面について</h4>
        <br><br>
        <p>これは企業用管理画面です。左側のサイドバーメニューから求人管理や応募者とのやりとりができます。</p>
        </div>
    </div>
</div>
@endsection
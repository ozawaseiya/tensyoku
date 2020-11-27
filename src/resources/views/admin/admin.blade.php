@extends('layouts.admin.app')

@section('content')
<div class="container ops-main">

<div class="container-fluid">
    <div class="row">
        <div class="col-3 px-1 position-fixed" id="sticky-sidebar">
        <ul class="nav  nav-stacked　d-flex flex-column py-md-4">
            @if((Auth::guard('admin')->check()))
            <li class="py-md-4"><a style="color:green;" href="{{ route('admin.read')}}">募集要項を確認する</a></li>
            <li class="py-md-4"><a href="{{ route('admin.create')}}">募集職種を作成する</a></li>
            <li class="py-md-4"><a style="color:red;" href="{{ route('admin.admindestroy') }}">管理者を退会する</a></li>
　　　　　　　@endif
         </ul>
        </div>
        <div class="col offset-3" id="main">
        <h4 style="text-align:center; color:#2a2a64;">この管理画面について</h4>
        <br><br>
        <div style="width:600px; margin:0 auto; background-color:#D5E0F2; padding: 20px 20px 20px 20px;">
        <p>これは企業用管理画面です。左側のサイドバーメニューから企業様から求人管理や求人募集に応募された求職者とのやりとりができます。</p>
        </div>
        <br><br>
        <div style="width:600px; margin:0 auto; font-weight:bold;">
        <p style="color:red;">なお、当サイトとご契約された企業様は、新規社員の採用の有無を確認するため毎月、社員リストをご提出していただくことになります。提出方法やご不明な点は契約時の担当者までご連絡ください。</p>
        </div>
        </div>
    </div>
</div>
@endsection
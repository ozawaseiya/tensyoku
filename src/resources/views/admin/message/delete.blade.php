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
            <li class="py-md-4"><a href="#">応募者からのメッセージを確認する</a></li>
            <li class="py-md-4"><a href="#">募集要項を作成・確認する</a></li>
　　　　　　　@endif
         </ul>
        </div>
        <div class="col offset-3" id="main">
        <table class="table text-center">
    　<tr>
      <th>管理企業名</th>
     </tr>
      <tr>
        <td>{{ Auth::guard('admin')->user()->company_name }}</td>
      </tr>
    </table>
    <br><br>
        </div>
    </div>
</div>
@endsection
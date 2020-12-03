@extends('layouts.admin.app')

@section('content')
<div class="container ops-main">

<div class="container-fluid">
    <div class="row">
        <div class="col-3 px-1 position-fixed" id="sticky-sidebar">
        <ul class="nav  nav-stacked　d-flex flex-column py-md-4">
            @if((Auth::guard('admin')->check()))
            <li class="py-md-4"><a style="color:green;" href="{{ route('admin.read') }}">募集要項を確認する</a></li>
            <li class="py-md-4"><a href="{{ route('admin.create')}}">募集職種を作成する</a></li>
　　　　　　　@endif
         </ul>
        </div>
        <div class="col-10 offset-3" id="main">
        <h4>管理者が採用した応募者</h4>
        <br>
        <table class="table text-center">
    　<tr>
    　<th>求人募集番号</th>
      <th>ユーザーID</th>
    　<th>採用者名</th>
     </tr>
      @foreach($folders as $folder)
      @if (isset($folder->hire))
      <tr>
        <td>{{ $folder->company_apply_id }}</td>
        <td>{{ $folder->user_id }}</td>
        <td>{{ $folder->sender_name }}</td>
      </tr>
      @endif
      @endforeach
    </table>
    <br><br>
    <a href="{{ route('admin') }}">トップページに戻る</a>
        </div>
    </div>
</div>
@endsection
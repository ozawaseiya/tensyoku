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
            <li class="py-md-4"><a href="{{ route('admin.message.read') }}">応募者からのメッセージを確認する</a></li>
            <li class="py-md-4"><a href="{{ route('admin.read') }}">募集要項を確認する</a></li>
            <li class="py-md-4"><a href="{{ route('admin.create')}}">募集職種を作成する</a></li>
　　　　　　　@endif
         </ul>
        </div>
        <div class="col offset-3" id="main">
        <h3>メッセージ一覧</h3>

        この企業のcompany_idは
        <?php print Auth::guard('admin')->user()->company_id; ?>です。

        <br>
        <table class="table text-center">
    　<tr>
    　<th>送信者名</th>
     </tr>
      @foreach($categories as $category)
      <tr>
        <td>{{ $category->sender_name }}</td>
      </tr>
      @endforeach
    </table>
    <br><br>
    <a href="{{ route('admin') }}">トップページに戻る</a>
        </div>
    </div>
</div>
@endsection
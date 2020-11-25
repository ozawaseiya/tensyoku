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
            <li class="py-md-4"><a style="color:green;" href="{{ route('admin.read') }}">募集要項を確認する</a></li>
            <li class="py-md-4"><a href="{{ route('admin.create')}}">募集職種を作成する</a></li>
　　　　　　　@endif
         </ul>
        </div>
        <div class="col offset-3" id="main">
        <h3>現在管理者が募集している職種</h3>
        <br>
        <table class="table text-center">
    　<tr>
    　<th>募集ID</th>
      <th>求人へのリンク</th>
      <th>会社名</th>
      <th>サービス内容</th>
      <th>募集職種</th>
      <th>スキル</th>
      <th>年収</th>
      <th>仕事内容</th>
      <th>経験年数</th>
      <th>社員数</th>
     </tr>
      @foreach($applies as $apply)
      <tr>
        <td>{{ $apply->id }}</td>
        <td>
        <a href="{{ route('admin.show', $company_apply_id = $apply->id) }}">この求人を見る</a>
        </td>
        <td>{{ $apply->company_name }}</td>
        <td>{{ $apply->company_service }}</td>
        <td>{{ $apply->company_apply_job }}</td>
        <td>{{ $apply->company_job_skill }}</td>
        <td>{{ $apply->company_job_salary }}</td>
        <td>{{ $apply->company_job_content }}</td>
        <td>{{ $apply->company_job_year }}</td>
        <td>{{ $apply->company_member_number }}</td>
      </tr>
      @endforeach
    </table>
    <div class="d-flex justify-content-center mb-5">
    {{ $applies->links() }}
    </div>  
    <a href="{{ route('admin') }}">トップページに戻る</a>
        </div>
    </div>
</div>
@endsection
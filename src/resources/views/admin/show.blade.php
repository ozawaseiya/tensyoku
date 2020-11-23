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
            <li class="py-md-4"><a href="{{ route('admin.read') }}">募集要項を確認する</a></li>
            <li class="py-md-4"><a href="{{ route('admin.create')}}">募集職種を作成する</a></li>
　　　　　　　@endif
         </ul>
        </div>
        <div class="col offset-3" id="main">
        <h3>募集職種の内容</h3>
        <br>
        　　　<table class="table text-center">
    　<tr>
      <th>会社名</th>
      <th>サービス内容</th>
      <th>募集職種</th>
      <th>職種内容</th>
      <th>スキル</th>
      <th>経験年数</th>
      <th>社員数</th>
      <th>年収</th>
     </tr>
      <tr>
        <td>{{ $company->company_name }}</td>
        <td>{{ $company->company_service }}</td>
        <td>{{ $company->company_apply_job }}</td>
        <td>{{ $company->company_job_content }}</td>
        <td>{{ $company->company_job_skill }}</td>
        <td>{{ $company->company_job_year }}</td>
        <td>{{ $company->company_member_number }}</td>
        <td>{{ $company->company_job_salary }}</td>
      </tr>
    </table>
        
    <br>
    <a href="{{ route('admin.edit', $company_apply_id = $company->id) }}">
        この求人を編集する
    </a>
    <br><br>
    <a href="{{ route('messages.index', $company_apply_id = $company->id) }}">応募者からのメッセージを確認する</a>
    <br><br>

    <a href="{{ route('admin.read') }}">現在募集している職種のページに戻る</a>
    <br><br>
    @if ($company->company_job_stop === NULL)
    <a href="{{ route('admin.stop', $company_apply_id = $company->id) }}">この募集を停止する</a>
    @else
    <p>既に募集停止中です！！！</p>
    @endif
    <br><br>
    @if ( $folder == NULL )
    <p style="color:red">＊現在応募者がいないため、いつでも削除可能です</p>
    <form style="display: inline-block;" method="POST" action="{{ route('admin.destroy', $company_apply_id = $company->id)}}">
    @csrf
    @method('DELETE')

    <button class="btn btn-danger">削除する</button>
   </form>
    @endif
        </div>
    </div>
</div>
@endsection
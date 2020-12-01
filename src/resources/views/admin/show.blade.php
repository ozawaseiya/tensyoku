@extends('layouts.admin.app')

@section('content')
<div class="container ops-main">

<div class="container-fluid">
    <div class="row">
        <div class="col-3 px-1 position-fixed" id="sticky-sidebar">
        <ul class="nav  nav-stacked　d-flex flex-column py-md-4">
            @if((Auth::guard('admin')->check()))
            <li class="py-md-4"><a href="{{ route('admin.read') }}">募集要項を確認する</a></li>
            <li class="py-md-4"><a style="color:green;" href="{{ route('admin.create')}}">募集職種を作成する</a></li>
　　　　　　　@endif
         </ul>
        </div>
        <div class="col offset-3" id="main">
        <h3 style="color:#2a2a64;">募集職種の内容</h3>
        <br>
        　　　<table class="table text-center">
    　<tr>
      <th>会社名</th>
      <th>サービス内容</th>
      <th>募集職種</th>
      <th>職種内容</th>
      <th>スキル</th>
      <th>経験月数（個人開発を含む）</th>
      <th>社員数</th>
      <th>年収</th>
     </tr>
      <tr>
        <td>{{ $company->company_name }}</td>
        <td>{{ $company->company_service }}</td>
        <td>{{ $company->company_apply_job }}</td>
        <td>{{ $company->company_job_content }}</td>
        <td>{{ $company->company_job_skill }}</td>
        <td>{{ $company->company_job_month }}ヶ月</td>
        <td>{{ $company->company_member_number }}人</td>
        <td>{{ $company->company_job_salary }}万円</td>
      </tr>
    </table>
        
    <br>
    <a style="color:#FF8C00;" href="{{ route('admin.edit', $company_apply_id = $company->id) }}">
        この求人を編集する
    </a>
    <br><br>
    <a style="color:green;" href="{{ route('messages.index', $company_apply_id = $company->id) }}">応募者からのメッセージを確認する</a>
    <br><br>

    <a href="{{ route('admin.read') }}">現在募集している職種のページに戻る</a>
    <br><br>
    <br><br>
    @if (isset($company->company_job_stop))
    <p>既に募集停止中です！！！</p>
    @else
    <a style="color:red;" href="{{ route('admin.stop', $company_apply_id = $company->id) }}">この募集を停止する</a>
    @endif
    <br><br>
    @if (!isset($folder))
    <p style="color:red">＊現在、この求人の応募者がいません</p>
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
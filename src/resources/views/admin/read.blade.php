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
            <li class="py-md-4"><a style="color:#FF8C00;" href="{{ route('admin') }}">トップページへ戻る</a></li>
　　　　　　　@endif
         </ul>
        </div>
        <div class="col-10 offset-3" id="main">
        <h3>現在管理者が募集している職種</h3>
        <br>
        <table class="table text-center">
    　<tr>
    　<th>募集ID</th>
      <th>リンク</th>
      <th>会社名</th>
      <th>サービス内容</th>
      <th>募集職種</th>
      <th>スキル</th>
      <th>年収</th>
      <th>仕事内容</th>
      <th>経験月数（個人開発経験含む）</th>
      <th>社員数</th>
     </tr>
      @foreach($applies as $apply)
      <tr>
        <td>{{ $apply->id }}</td>
        <td>
        <a href="{{ route('admin.show', $company_apply_id = $apply->id) }}">応募者を見る</a>
        </td>
        <td>{{ $apply->company_name }}</td>
        <td>{{ $apply->company_service }}</td>
        <td>{{ $apply->company_apply_job }}</td>
        <td>{{ $apply->company_job_skill }}</td>
        <td>{{ $apply->company_job_salary }}万円</td>
        <td>{{ $apply->company_job_content }}</td>
        <td>{{ $apply->company_job_month }}ヶ月</td>
        <td>{{ $apply->company_member_number }}人</td>
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
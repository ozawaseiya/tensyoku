@extends('layouts.user.app')

@section('content')
<div class="container ops-main">
<div class="row">
  <div class="col-xs-14">
    <h3 class="ops-title">求人掲載企業一覧 {{ $companyNumbers }}件</h3>
  </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-3 px-1 position-fixed" id="sticky-sidebar">
        <ul class="nav  nav-stacked　d-flex flex-column py-md-4">
            <li class="py-md-3"><a style="color:#FF8C00;" href="{{ route('info') }}">この転職サイトについて</a></li>
            @if( Auth::check() )
            <li class="py-md-3"><a style="color:green;" href="{{ route('profile') }}">個人プロフィールを見る</a></li>
            <li class="py-md-3"><a href="{{ route('apply.folder') }}">企業からのメッセージを確認する</a></li>
　　　　　　　@endif
         </ul>
<h6 style="color:#2a2a64; font-weight:bold;">検索一覧</h6>
<form action="{{url('/')}}" method="GET">
    <p>
    気になるワード検索<br>
    <input type="text" name="keyword" value="{{$keyword}}"></p>
    <p>希望年収<br>
    <input type="number" name="company_job_salary" value="{{$company_job_salary}}">万円以上</p>

　　 <p>スキル</p>
    <p><input type="checkbox" name="company_job_skill[]" value="PHP" {{ is_array($company_job_skill)&& in_array('PHP', $company_job_skill, true)? 'checked' : '' }}><label>PHP</label></p>
    <p><input type="checkbox" name="company_job_skill[]" value="JAVA" {{ is_array($company_job_skill)&& in_array('JAVA', $company_job_skill, true)? 'checked' : '' }}><label>JAVA</label></p>
    <p><input type="checkbox" name="company_job_skill[]" value="Ruby" {{ is_array($company_job_skill)&& in_array('Ruby', $company_job_skill, true)? 'checked' : '' }}><label>Ruby</label></p>
    <p><input type="checkbox" name="company_job_skill[]" value="Javascript" {{ is_array($company_job_skill)&& in_array('Javascript', $company_job_skill, true)? 'checked' : '' }}><label>Javascript</label></p>
    <p><input type="submit" value="検索"></p>
   
</form>
        </div>
        <div class="col-10 offset-3" id="main">    
        <img src="{{ asset('/storage/img/main.jpg') }}" style="max-width:900px; width:100%; height:120px; margin-bottom:20px;">
        <table class="table text-center">
    　<tr>
    　<th>募集</th>
      <th>求人へのリンク</th>
      <th>会社名</th>
      <th>サービス内容</th>
      <th>募集職種</th>
      <th>スキル</th>
      <th>年収</th>
     </tr>
      @foreach($companies as $company)
      <tr>
        <td>{{ $company->id }}</td>
        <td>
        <a href="{{ action('CompanyController@detail', $company_apply_id = $company->id) }}">この求人を見る</a>
        </td>
        <td>{{ $company->company_name }}</td>
        <td>{{ $company->company_service }}</td>
        <td>{{ $company->company_apply_job }}</td>
        <td>{{ $company->company_job_skill }}</td>
        <td>{{ $company->company_job_salary }}万円</td>
      </tr>
      @endforeach
    </table>
    <br><br>
    <div class="d-flex justify-content-center mb-5">
    {{ $companies->links() }}
    </div>  
        </div>
    </div>
</div>
@endsection

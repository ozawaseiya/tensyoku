@extends('layouts.app')

@section('content')
<div class="container ops-main">
<div class="row">
  <div class="col-md-12">
    <h3 class="ops-title">求人企業一覧</h3>
  </div>
</div>
<div class="row">
  <div class="col-md-11 col-md-offset-1">
    <table class="table text-center">
      @foreach($companies as $company)
      <tr>
        <td>
          <a href="/{{ $company->company_apply_id }}">この求人を見る</a>
        </td>
        <td>{{ $company->company_name }}</td>
        <td>{{ $company->company_service }}</td>
        <td>{{ $company->company_apply_job }}</td>
      </tr>
      @endforeach
    </table>
  </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="container ops-main">
<div class="row">
  <div class="col-md-12">
    <h3 class="ops-title">求人企業詳細</h3>
  </div>
</div>
<div class="row">
  <div class="col-md-11 col-md-offset-1">
    <table class="table text-center">
      @foreach($companies as $company)

       {{ $company->company_name }}
        

      @endforeach
    </table>
  </div>
</div>
@endsection
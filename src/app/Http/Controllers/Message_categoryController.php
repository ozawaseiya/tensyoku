<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Message_category;
use Illuminate\Support\Facades\Auth;

class Message_categoryController extends Controller
{

    public function read()
    {
      $recruit = Auth::guard('admin')->user()->company_id;
       
      $categories = Message_category::find($recruit);
      
      
      return view('admin.message.read', ['categories' => $categories]);
    }


    public function create()
   {
    return view('admin.create');
   }


   public function store(Request $request)
   {

    $companies = $request->validate([
        'company_id' => 'required|max:30',
        'company_name' => 'required|max:30',
        'company_service' => 'required|max:400',
        'company_apply_job' => 'required|max:30',
        'company_job_content' => 'required|max:300',
        'company_job_skill' => 'required|max:30',
        'company_job_year' => 'required|max:30',
        'company_member_number' => 'required|max:30',
        'company_job_salary'  => 'required|max:30'
    ]);

    Company::create($companies);

    return redirect()->route('admin');
   }


   public function show($company_apply_id)
   {

    $company = Company::findOrFail($company_apply_id);

    return view('admin.show', ['company' => $company]);
   }

   public function edit($company_apply_id){

    $company = Company::findOrFail($company_apply_id);

    return view('admin.edit', ['company' => $company]);
   }

   public function update($company_apply_id, Request $request)
   {

    $params = $request->validate([
      'company_id' => 'required|max:30',
      'company_apply_id' => 'required|max:30',
      'company_name' => 'required|max:30',
      'company_service' => 'required|max:400',
      'company_apply_job' => 'required|max:30',
      'company_job_content' => 'required|max:300',
      'company_job_skill' => 'required|max:30',
      'company_job_year' => 'required|max:30',
      'company_member_number' => 'required|max:30',
      'company_job_salary'  => 'required|max:30'
    ]);

    $company = Company::findOrFail($company_apply_id);
    $company->fill($params)->save();
    
    return redirect()->route('admin.show', ['company' => $company, $company->company_apply_id]);
   }


   public function destroy($company_apply_id)
   {
    $company = Company::findOrFail($company_apply_id);
    $company->delete();

    return redirect()->route('admin.read');
   }


}

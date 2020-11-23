<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Company;
use App\Folder;
use Illuminate\Support\Facades\Auth;



class AdminController extends Controller
{
    public function admin()
    {
       // DBよりAdminテーブルの値を全て取得
       $admin = Admin::all();

       return view('admin.admin', compact('admin'));
    }


    public function read()
    {
      $recruit = Auth::guard('admin')->user()->id;

      $applies = Company::where('company_id',$recruit)->paginate(5);
      
       return view('admin.read', ['applies' => $applies]);
    }

    //求人募集停止

    public function stop($company_apply_id)
    {
    $company = Company::where('id', $company_apply_id)->first();

    $params = ([
      'company_job_stop' => '募集停止'
    ]);

    $company->fill($params)->save();
      
     return view('admin.stop');
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

    return redirect()->route('admin.read');
   }


   public function show($company_apply_id)
   {

    $company = Company::findOrFail($company_apply_id);

    $folder = Folder::where('company_apply_id', $company_apply_id)->first();

    return view('admin.show', ['company' => $company, 'folder' => $folder]);
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
    
    return redirect()->route('admin.show', ['company' => $company, $company->id]);
   }


   public function destroy($company_apply_id)
   {
    $company = Company::findOrFail($company_apply_id);
    $company->delete();

    return redirect()->route('admin.read');
   }


   public function admindestroy() {

      $id = Auth::guard('admin')->user()->id;

      Auth::guard('admin')->logout(); // ログアウト
      Admin::where('id', $id)->delete();
  
      return view('admin.admindestroy');
  }

  
}

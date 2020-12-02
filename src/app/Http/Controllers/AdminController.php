<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Company;
use App\Folder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    
    //企業側の管理画面表示    

    public function admin()
    {
        // DBよりAdminテーブルの値を全て取得
        $admin = Admin::all();

        return view('admin.admin', compact('admin'));
    }


    //企業側の求人一覧情報表示

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
        
        $params = (['company_job_stop' => 0]);
        
        $company->fill($params)->save();
        
        return view('admin.stop');
    }


    //企業側の求人作成

    public function create()
    {
    
        return view('admin.create');
    }


    //企業側の求人作成保存

    public function store(Request $request)
    {

       $companies = $request->validate([
        'company_id' => 'required|max:30',
        'company_name' => 'required|max:30',
        'company_service' => 'required|max:400',
        'company_apply_job' => 'required|max:30',
        'company_job_content' => 'required|max:300',
        'company_job_skill' => 'required|max:30',
        'company_job_month' => 'required|max:30',
        'company_member_number' => 'required|max:30',
        'company_job_salary'  => 'required|max:30',
        'file_name' => 'required|file|image|mimes:jpeg,png,jpg'
       ]);

       $path = $request->file('file_name')->store('img');

       $company = Company::create($companies);
      
       $company->fill(['file_name' => basename($path)])->save();

       return redirect()->route('admin.read');
   }


   //求人詳細画面表示

   public function show($company_apply_id)
   {

       $company = Company::findOrFail($company_apply_id);

       $folder = Folder::where('company_apply_id', $company_apply_id)->first();

       return view('admin.show', ['company' => $company, 'folder' => $folder]);
   }


   //各求人内容編集

   public function edit($company_apply_id)
   {

       $company = Company::findOrFail($company_apply_id);

       return view('admin.edit', ['company' => $company]);
   }

   
   //各求人内容更新

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
        'company_job_month' => 'required|max:30',
        'company_member_number' => 'required|max:30',
        'company_job_salary'  => 'required|max:30'
       ]);

       $company = Company::findOrFail($company_apply_id);

       $company->fill($params)->save();
    
       return redirect()->route('admin.show', ['company' => $company, $company->id]);
   }

   //各求人を削除

   public function destroy($company_apply_id)
   {

       $company = Company::findOrFail($company_apply_id);

       unlink(storage_path('app/public/img/'.$company->file_name));

       $company->delete();
    
       return redirect()->route('admin.read');
   }


    //企業側の管理者アカウント削除

    public function admindelete()
    {
        $admin = Auth::guard('admin')->user();

        $id = $admin->id;

        $account = Admin::where('id', $id);
        
        $account->delete();

        return redirect('/');
    }
 
}

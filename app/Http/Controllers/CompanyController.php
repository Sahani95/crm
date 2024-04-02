<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Exception;
use Validator;
use Illuminate\Support\Facades\Redirect;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Company::paginate(10);

        return view('admin.company.company_list')->withUsers($users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.company.add_company');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $rules = array(
            'name' => 'required',            
            'email' =>'required',
            'website'  => 'required',
            'logo' =>'required|image|mimes:jpeg,png,jpg,gif',
            );
        
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) 
            {                
            return redirect()->back()->withErrors($validator)->withInput();
            }
                // Store the logo in the storage directory
            $path = $request->file('logo')->store('public/logos');
            // Extract only the filename
            $filename = basename($path);
            $company = new Company();
            $company->name = $request->name;
            $company->logo = $filename;
            $company->email = $request->email;
            $company->website = $request->website;
            $company->save();
            return Redirect::to('company')->withMessage("Company Added Successfully.");
            }
            catch(Exception $e){
            return redirect()->back()->withErrors($e->getMessage());
           }
        }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        try{
            $user = Company::query()->where(['id' => $id])->first();
            return view('admin.company.update_company')->withUser($user);
           }catch(Exception $e){
             return redirect()->back()
             ->withErrors($e->getMessage());
           }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        try{
            $rules = array(
            'name' => 'required',            
            // 'email' =>'required',
            'website'  => 'required',
            'logo' =>'',     
            );
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) 
            {                
            return redirect()->back()->withErrors($validator)->withInput();
            }
            // $path = $request->file('logo');
            // Extract only the filename
            // $filename = basename($path);
            $user = Company::findOrfail($request->id); 
            $user->name = $request->name;
            $user->email = $request->email;
            $user->website = $request->website;
            if ($request->hasFile('logo')) {
                $path = $request->file('logo')->store('public/logos');
                $filename = basename($path);
                $user->logo = $filename;
            }
            $user->save();  
             return Redirect::to('company')->withMessage("Company updated Successfully.");
            }
            catch(Exception $e){
            return redirect()->back()->withErrors($e->getMessage());
           }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = Company::findOrfail($id);
        $user->delete();
    
        $message = "Company Deleted Successfully!";
            return redirect()->back()->withMessage($message);
    }
}

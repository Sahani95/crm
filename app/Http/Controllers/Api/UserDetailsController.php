<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Exception;
use Validator;
use Illuminate\Support\Facades\Redirect;

class UserDetailsController extends Controller
{
    public function companyDetails(Request $request,$id)
    {
        $companyDetails = Company::where('id',$request->id)->first();
        if(!empty($companyDetails))
        {
            $result['code'] = 200;
            $result['succes'] = true;
            $result['message'] = 'Company Details';
            $result['result'] = $companyDetails;
            return response()->json($result);
        }
        else
        {
            $result['code'] = 404;
            $result['succes'] = false;
            $result['message'] = "nno data";
            return response()->json($result);
        }
    }
    public function getAllEmployee(Request $request,$id)
    {
        $getAllEmployee = Employee::where('company_id',$request->id)->get();
        foreach($getAllEmployee as $value)
        {
            $company_name = Company::where('id',$request->id)->first();
            $value->companyName = $company_name->name;
        }
        if(!empty($getAllEmployee))
        {
            $result['code'] = 200;
            $result['succes'] = true;
            $result['message'] = 'Company Details';
            $result['result'] = $getAllEmployee;
            return response()->json($result);
        }
        else
        {
            $result['code'] = 404;
            $result['succes'] = false;
            $result['message'] = "nno data";
            return response()->json($result);
        }
    }
    public function addCompany(Request $request)
    {
        try{
            $validator = Validator::make($request->all(),[
                'name' => 'required',            
                'email' =>'required',
                'website'  => 'required',
                'logo' =>'required|image|mimes:jpeg,png,jpg,gif',
            ]);
            if($validator->fails())
            {
                $result['code']    = 400;
                $result['message'] = $validator->messages()->first();
                $result['success'] = false;
                return response()->json($result);
            }   
            $path = $request->file('logo')->store('public/logos');
            // Extract only the filename
            $filename = basename($path);
            $company = new Company();
            $company->name = $request->name;
            $company->logo = $filename;
            $company->email = $request->email;
            $company->website = $request->website;
            $company->save();
            $result['code']      = 200;
            $result['message'] = 'Comapany added successfullye !.';
            $result['success']   = true;
            $result['result']    =  $company;
            return response()->json($result);
            }
        catch(Exception $e){
            return response()->json([
                'status_code' => 500, 
                'success' => false , 
                'message' => $e->getMessage(),
                'data' => null
            ]);
        }
    }
    public function addEmployee(Request $request)
    {
        try{
            $validator = Validator::make($request->all(),[
                'first_name' => 'required',
                'last_name' => 'required',            
                'email' =>'required',
                'phone'  => 'required',
                'company_id' =>'required',
            ]);
            if($validator->fails())
            {
                $result['code']    = 400;
                $result['message'] = $validator->messages()->first();
                $result['success'] = false;
                return response()->json($result);
            }   
            $employee = new Employee();
            $employee->first_name = $request->first_name;
            $employee->last_name = $request->last_name;
            $employee->email = $request->email;
            $employee->phone = $request->phone;
            $employee->company_id = $request->company_id;
            $employee->save();
            $result['code']      = 200;
            $result['message'] = 'Employee added successfullye !.';
            $result['success']   = true;
            $result['result']    =  $employee;
            return response()->json($result);
            }
        catch(Exception $e){
            return response()->json([
                'status_code' => 500, 
                'success' => false , 
                'message' => $e->getMessage(),
                'data' => null
            ]);
        }
    }
}

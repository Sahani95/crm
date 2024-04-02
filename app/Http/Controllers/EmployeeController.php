<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;
use Exception;
use Validator;
use Illuminate\Support\Facades\Redirect;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Employee::paginate(10);

        return view('admin.employee.employee_list')->withUsers($users);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cat = Company::all();
        return view('admin.employee.add_employee')->withCat($cat);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $rules = array(
            'first_name' => 'required',
            'last_name' => 'required',            
            'email' =>'required',
            'phone'  => 'required',
            'cat_id' =>'required',
            );
        
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) 
            {                
            return redirect()->back()->withErrors($validator)->withInput();
            }
           
            $employee = new Employee();
            $employee->first_name = $request->first_name;
            $employee->last_name = $request->last_name;
            $employee->email = $request->email;
            $employee->phone = $request->phone;
            $employee->company_id = $request->cat_id;
            $employee->save();
            return Redirect::to('employee')->withMessage("employee Added Successfully.");
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
            $user = Employee::query()->where(['id' => $id])->first();
            $categories = Company::all();

            return view('admin.employee.update_employee')->withUser($user)->withCategories($categories);
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
            'first_name' => 'required',
            'last_name' => 'required',            
            'email' =>'required',
            'phone'  => 'required',
            'cat_id' =>'',     
            );
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) 
            {                
            return redirect()->back()->withErrors($validator)->withInput();
            }
            $user = Employee::findOrfail($request->id); 
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->phone = $request->phone;
           $user->company_id = $request->cat_id;
            $user->save();  
             return Redirect::to('employee')->withMessage("Employee updated Successfully.");
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
        $user = Employee::findOrfail($id);
        $user->delete();
    
        $message = "Employee Deleted Successfully!";
            return redirect()->back()->withMessage($message);
    }
}

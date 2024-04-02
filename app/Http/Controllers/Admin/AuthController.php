<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Exception;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.admin_dashboard');
    }
    public function loginpage(request $request)
    {
        return view('admin.auth.login');
    }
    public function login(Request $request)
    {  
        try{
            $rules = array(
                'email' => 'required|email',
                'password' => 'required'
            );
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {  
                return view('admin.auth.admin')
                    ->withErrors("Email and Password is required to login.");
            } 
            else {
                $userdata = array(
                    'email' => $request->get('email'),
                    'password' => $request->get('password'),
                );
                if (Auth::attempt($userdata)) {
                    return Redirect::to('/dashboard');
                } else {
                    return Redirect::to('/')
                        ->withErrors("The credentials do not match our records");
                }
            }
            
        }catch(Exception $e){

            return redirect()->back()
                ->withErrors($e->getMessage());
        }
    }
}

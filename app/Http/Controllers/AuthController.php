<?php

namespace App\Http\Controllers;

use App\Models\Location;
use App\Models\Property;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signin(Request $request){
//        return $request->all();
        $access = trim($request->input('access'));
        $password = trim($request->input('password'));

        if(filter_var($access, FILTER_VALIDATE_EMAIL)){
//            return ' we are here';
            if (Auth::attempt(['email' => $access, 'password' => $password])) {
                return redirect(route('admin.dashboard'));
            }
            else {
                return back()->withInput($request->input())->withErrors(array('access' => 'Invalid credentials given.'));
            }
        }else{
//            return 'we no de';
            if (Auth::attempt(['username' => $access, 'password' => $password])) {
                return redirect(route('admin.dashboard'));
            }
            else {
                return back()->withInput($request->input())->withErrors(array('access' => 'Invalid credentials given'));
            }
        }

    }

    public function signout(Request $request){
//        Auth::logout();
        $request->user()->logout(); // trying this path
        return redirect()->route('admin.login');
    }

    public function login(){
        return view('auth.login');
    }

    public function logout(Request $request){
        Auth::logout();
        return back();
    }

    public function dashboard(){
        $properties = Property::where('active', true)->select(['id'])->get();
        $admin = User::where('active', true)->select(['id'])->get();
        $location = Location::where('active', true)->select(['id'])->get();
        return view('admin.pages.dashboard.index')
            ->with('properties', $properties)
            ->with('admin', $admin)
            ->with('location', $location);
    }
}

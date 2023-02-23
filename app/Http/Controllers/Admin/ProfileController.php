<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function dashboard(){
        $data=[
            'title'=>'Dashboard'
        ];
        return view('admin.dashboard',$data);
    }

    public function dashboard2(){
        $data=[
            'title'=>'Dashboard 2'
        ];
        return view('admin.dashboard2',$data);
    }

    public function dashboard3(){
        $data=[
            'title'=>'Dashboard 3'
        ];
        return view('admin.dashboard3',$data);
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('getLogin')->with('success','You have been successfully logged out');
    }
}

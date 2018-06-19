<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Auth;

class profileController extends Controller
{
    public function perfilAdministrador()
    {
        $admin = Admin::find(Auth::id());        

        return view('admin.dashboard',compact('admin'));
    }
}

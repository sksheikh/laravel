<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $fullName;
    public function home()
    {
        return view('front.home.home');
    }

    public function fullName()
    {
        return view('front.full-name.full-name');
    }

    public function saveFullName(Request $request)
    {
        $this->fullName = $request->first_name.' '.$request->last_name;
        return redirect()->back()->with('result',$this->fullName) ;

    }
}

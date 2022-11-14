<?php


namespace App\Http\Controllers;


class HomeController
{
    public function home()
    {
        return view('home');
    }

    public function bitm()
    {
        return 'Hello BITM';
    }

}

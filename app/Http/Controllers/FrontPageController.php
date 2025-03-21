<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function employeePrice()
    {
        return view('employee-price');
    }

    public function contractPrice()
    {
        return view('contract-price');
    }

    public function discuss()
    {
        return view('discuss');
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }
    public function privacyPolicy()
    {
        return view('frontend.privacyPolicy');
    }
    public function termCondition()
    {
        return view('frontend.privacyPolicy');
    }
}

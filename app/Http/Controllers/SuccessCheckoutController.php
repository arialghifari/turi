<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuccessCheckoutController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.success-checkout');
    }
}

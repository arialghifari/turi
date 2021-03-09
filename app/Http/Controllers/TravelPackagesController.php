<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TravelPackage;

class TravelPackagesController extends Controller
{
    public function index() {
        $items = TravelPackage::orderBy('created_at', 'asc')->get();
        return view('pages.travel-packages', [
            'items' => $items
        ]);
    }
}

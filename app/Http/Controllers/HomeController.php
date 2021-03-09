<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TravelPackage;
use App\Models\Transaction;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $items = TravelPackage::
            with('travel_galleries')
            ->withCount(['transactions'])
            ->orderByDesc('transactions_count')
            ->limit(4)
            ->get();
            
        return view('pages.home', [
            'items' => $items
        ]);
    }

    public function travelPackages() {
        $items = TravelPackages::get();

        return $items;
    }
}

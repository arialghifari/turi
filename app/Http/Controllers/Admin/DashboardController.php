<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TravelPackage;
use App\Models\Transaction;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index (Request $request) 
    {
        $travelCount = TravelPackage::all()->count();
        $totalTransaction = Transaction::all()->count();
        $totalTransactionPending = Transaction::all()->where('transaction_status', 'PENDING')->count();
        $totalTransactionSuccess = Transaction::all()->where('transaction_status', 'SUCCESS')->count();
        
        return view('pages.admin.dashboard', [
            'travelCount' => $travelCount,
            'totalTransaction' => $totalTransaction,
            'totalTransactionPending' => $totalTransactionPending,
            'totalTransactionSuccess' => $totalTransactionSuccess,
        ]);
    }
}

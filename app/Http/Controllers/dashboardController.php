<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function getDashboard(){
        $wallet = Wallet::where('user_id',Auth::user()->id)->get();
        return view('dashboard',['wallet' => $wallet]);
    }
}

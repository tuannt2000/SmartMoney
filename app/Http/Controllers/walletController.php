<?php

namespace App\Http\Controllers;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class walletController extends Controller
{
    public function generalWallets($id){
        $wallet = Wallet::find($id);
        return view('wallet.settings.general',['wallet' => $wallet]);
    }
}

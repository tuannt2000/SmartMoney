<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use App\Models\Category;
use App\Models\Wallet;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class budgetController extends Controller
{
    public function budgetWallets($id){
        $wallet = Wallet::find($id);

        $outcome = Category::where('type','outcome')->where('create_by', Auth::user()->id)->get();

        return view('wallet.budgets',['wallet'=>$wallet,'outcome'=>$outcome]);
    }


    public function budgetDetailWallets($id){
        $transactions= Transaction::where('wallet_id',$id)->get();
        $transactions = $transactions->reverse();

        $income = Category::where('type','income')->where('create_by', Auth::user()->id)->get();
        $outcome = Category::where('type','outcome')->where('create_by', Auth::user()->id)->get();

        $wallet = Wallet::find($id);
        return view('wallet.budgetsDetail',['transactions'=>$transactions,'income'=>$income,'outcome'=>$outcome,'wallet'=>$wallet]);
    }
}

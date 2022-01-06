<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    public function getDashboard(){
        $sums = [];
        $wallet = Wallet::where('user_id',Auth::user()->id)->get();

        foreach($wallet as $value){
            $sum = Transaction::where('wallet_id',$value->id)->whereMonth('date',1)->sum('amount');
            array_push($sums,$sum);
        }

        $count = 0;

        foreach($wallet as $value){
            $count += count(Transaction::where('wallet_id',$value->id)->whereMonth('date',1)->get());
        }

        $outcome = 0;
        $income = 0;

        foreach($wallet as $value){
            $outcome += Transaction::where('wallet_id',$value->id)->whereMonth('date',1)->where('amount','<',0)->sum('amount');
        }

        foreach($wallet as $value){
            $income += Transaction::where('wallet_id',$value->id)->whereMonth('date',1)->where('amount','>',0)->sum('amount');
        }

        return view('dashboard',['wallet' => $wallet,'sums'=>$sums,'count'=>$count,'outcomes' => $outcome,'incomes' => $income]);
    }

    public function createWallet(Request $request,$id){
        $wallet = new Wallet;
        $wallet->name = $request->name;
        $wallet->user_id = $id;
        if($request->initial_balance != ''){
            $wallet->initial_balance = $request->initial_balance;
        }

        $wallet->save();

        return redirect('dashboard');
    }
}

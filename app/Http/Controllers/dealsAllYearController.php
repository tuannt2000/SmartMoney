<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dealsAllYearController extends Controller
{
    public function getdealsAllYear(){
        $sums = [];
        $wallet = Wallet::where('user_id',Auth::user()->id)->get();

        foreach($wallet as $value){
            $sum = Transaction::where('wallet_id',$value->id)->whereMonth('date',date('m'))->sum('amount');
            array_push($sums,$sum);
        }

        $count = 0;

        foreach($wallet as $value){
            $count += count(Transaction::where('wallet_id',$value->id)->whereMonth('date',date('m'))->get());
        }

        $outcome = 0;
        $income = 0;

        foreach($wallet as $value){
            $outcome += Transaction::where('wallet_id',$value->id)->whereMonth('date',date('m'))->where('amount','<',0)->sum('amount');
        }

        foreach($wallet as $value){
            $income += Transaction::where('wallet_id',$value->id)->whereMonth('date',date('m'))->where('amount','>',0)->sum('amount');
        }

        return view('dealsAllYear',['wallet' => $wallet,'sums'=>$sums,'count'=>$count,'outcomes' => $outcome,'incomes' => $income]);
    }
}

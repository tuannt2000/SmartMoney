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
        $wallets = Wallet::where('user_id',Auth::user()->id)->get();

        $count = 0;

        $id_wallets = [];

        foreach($wallets as $value){
            array_push($id_wallets,$value->id);
            $count += count(Transaction::where('wallet_id',$value->id)->whereYear('date',date('Y'))->get());
        }


        $transactions = Transaction::whereIn('wallet_id',$id_wallets)->whereYear('date',date('Y'))->get();

        return view('dealsAllYear',['count'=>$count,'transactions'=>$transactions]);
    }
}

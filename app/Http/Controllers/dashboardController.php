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

    public function createWallet(Request $request,$id){
        // $this->validate($request,
        //     [
        //         'name' => "unique:wallets,name,$id,id",
        //     ],
        //     [
        //         'name.unique' => 'Tên ví đã tồn tại',
        //     ]
        // );

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

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

    public function deleteWallets($id){
        $wallet = Wallet::find($id);

        $wallet->delete();

        return redirect('dashboard');
    }

    public function fixWallets(Request $request,$id){
        $wallet = Wallet::find($id);

        $wallet->name = $request->name;
        if($request->initial_balance != ''){
            $wallet->initial_balance = $request->initial_balance;
        }

        $wallet->save();

        return redirect('wallet/'.$id.'/settings/general')->with('thongbao',"Sửa thành công");
    }
}

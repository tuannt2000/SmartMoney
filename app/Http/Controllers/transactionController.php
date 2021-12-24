<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use App\Models\Category;
use App\Models\Wallet;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class transactionController extends Controller
{
    public function transactionWallets($id){
        $transactions= Transaction::where('wallet_id',$id)->get();
        $transactions = $transactions->reverse();

        $income = Category::where('type','income')->where('create_by', Auth::user()->id)->get();
        $outcome = Category::where('type','outcome')->where('create_by', Auth::user()->id)->get();

        $wallet = Wallet::find($id);
        return view('wallet.transactions',['transactions'=>$transactions,'income'=>$income,'outcome'=>$outcome,'wallet'=>$wallet]);
    }

    public function overViewWallets($id){
        $transactions= Transaction::where('wallet_id',$id)->get();
        $transactions = $transactions->reverse();

        $income = Category::where('type','income')->where('create_by', Auth::user()->id)->get();
        $outcome = Category::where('type','outcome')->where('create_by', Auth::user()->id)->get();

        $wallet = Wallet::find($id);
        return view('wallet.overview',['transactions'=>$transactions,'income'=>$income,'outcome'=>$outcome,'wallet'=>$wallet]);
    }

    public function createTransaction(Request $request,$id){
        $transaction = new Transaction;

        $transaction->wallet_id = $id;
        $transaction->category_id = $request->category_id;
        $transaction->amount = $request->amount;
        $transaction->date = $request->date;

        if($request->note != null){
            $transaction->note = $request->note;
        }

        $transaction->save();

        return redirect('wallet/'.$id.'/transactions');
    }

    public function fixTransaction(Request $request,$id,$idTransaction){
        $transaction = Transaction::find($idTransaction);

        if($request->category_id != null){
            $transaction->category_id = $request->category_id;
        }

        $transaction->amount = $request->amount;
        $transaction->date = $request->date;
        if($request->note != null){
            $transaction->note = $request->note;
        }

        $transaction->save();

        return redirect('wallet/'.$id.'/transactions');
    }

    public function deleteTransaction(Request $request,$id){
        $transaction = Transaction::find($request->id);

        $transaction->delete();

        return redirect('wallet/'.$id.'/transactions');
    }
}

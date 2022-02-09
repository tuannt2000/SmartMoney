<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use App\Models\Category;
use App\Models\Wallet;
use App\Models\Budget;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class transactionController extends Controller
{
    public function transactionWallets($id){
        $transactions= Transaction::where('wallet_id',$id)->whereMonth('date',date('m'))->get();
        $transactions = $transactions->reverse();

        $income = Category::where('type','income')->where('create_by', Auth::user()->id)->get();
        $outcome = Category::where('type','outcome')->where('create_by', Auth::user()->id)->get();

        $wallet = Wallet::find($id);
        return view('wallet.transactions',['transactions'=>$transactions,'income'=>$income,'outcome'=>$outcome,'wallet'=>$wallet]);
    }

    public function overViewWallets($id){
        $transactions= Transaction::where('wallet_id',$id)->whereMonth('date',date('m'))->get();

        $count = count($transactions);

        $transactions = $transactions->reverse();

        $incomes = 0;
        $outcomes = 0;

        foreach($transactions as $transaction){
            if($transaction->amount > 0){
                $incomes += $transaction->amount;
            }else{
                $outcomes = $transaction->amount;
            }
        }

        $income = Category::where('type','income')->where('create_by', Auth::user()->id)->get();
        $outcome = Category::where('type','outcome')->where('create_by', Auth::user()->id)->get();

        $wallet = Wallet::find($id);
        return view('wallet.overview',['transactions'=>$transactions,'count'=>$count,'income'=>$income,'outcome'=>$outcome,'wallet'=>$wallet,'incomes'=>$incomes,'outcomes'=>$outcomes]);
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

        $budgets = Budget::where('user_id',Auth::user()->id)->get();

        $sums = [];

        $check = false;

        foreach($budgets as $budget){
            $sum = 0;

            foreach ($budget->budget_category as $value) {
                if($value->category_id == $request->category_id){
                    $check = true;
                }

                if(count($value->category->transaction->where('date','>=',$budget->start_date)->where('date','<=',$budget->end_date)) != 0){
                    foreach ($value->category->transaction->where('date','>=',$budget->start_date)->where('date','<=',$budget->end_date) as $v){
                        $sum += $v->amount;
                    }
                }
            }

            array_push($sums,$sum);
        }

        $thongbao = '';

        if($check){
            foreach($budgets as $index=>$budget){
                if(abs($sums[$index])*100/$budget->amount >= 80 && abs($sums[$index])*100/$budget->amount < 100){
                    $thongbao = "Ngân sách sắp hết";
                }else if(abs($sums[$index])*100/$budget->amount >= 100){
                    $thongbao = "Ngân sách đã hết";
                }
            }
        }


        return redirect('wallet/'.$id.'/transactions')->with('thongbao',$thongbao);
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

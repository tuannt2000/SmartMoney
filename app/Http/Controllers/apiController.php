<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use App\Models\Wallet;
use Illuminate\Http\Request;

class apiController extends Controller
{
    public function myChart1Api($id){
        $datas = [];
        $wallet = Wallet::find($id);
        $transactions = Transaction::where('wallet_id',$id)->whereMonth('date',12)->get();

        $currentAmount = $wallet->initial_balance;
        for($i = 1; $i <= 31 ; $i++){
            $data = array('date'=>'','amount'=> $currentAmount);
            $data['date'] = "T12 ".$i;
            foreach($transactions as $transaction){
                if(explode("-",$transaction->date)[2] == $i){
                    $data['amount'] += $transaction->amount;
                    $currentAmount += $transaction->amount;
                }else{
                    $data['amount'] += 0;
                }
            }

            array_push($datas,$data);
        }

        return $datas;
    }

    public function myChart2Api($id){
        $datas = [];
        $transactions = Transaction::where('wallet_id',$id)->whereMonth('date',12)->get();

        for($i = 1; $i <= 31 ; $i++){
            $data = array('date'=>'','income'=> 0,'outcome'=> 0);
            $data['date'] = "T12 ".$i;
            foreach($transactions as $transaction){
                if(explode("-",$transaction->date)[2] == $i){
                    if($transaction->amount > 0){
                        $data['income'] += $transaction->amount;
                    }else{
                        $data['outcome'] += abs($transaction->amount);
                    }
                }else{
                    $data['income'] += 0;
                    $data['outcome'] += 0;
                }
            }

            array_push($datas,$data);
        }

        return $datas;
    }

    public function myChart3Api($id){
        $datas = [];
        $transactions = Transaction::groupBy('category_id')->selectRaw('category_id,sum(amount) as total')->where('wallet_id',$id)->whereMonth('date',12)->get();

        foreach($transactions as $transaction){
            $data = array('category'=> '','color' => '','amount'=> 0);
            if($transaction->total > 0){
                $data['category'] = $transaction->category->title;
                $data['color'] = $transaction->category->color;
                $data['amount'] = $transaction->total;

                array_push($datas,$data);
            }
        }

        return $datas;
    }

    public function myChart4Api($id){
        $datas = [];
        $transactions = Transaction::groupBy('category_id')->selectRaw('category_id,sum(amount) as total')->where('wallet_id',$id)->whereMonth('date',12)->get();

        foreach($transactions as $transaction){
            $data = array('category'=> '','color' => '','amount'=> 0);
            if($transaction->total < 0){
                $data['category'] = $transaction->category->title;
                $data['color'] = $transaction->category->color;
                $data['amount'] = $transaction->total;

                array_push($datas,$data);
            }
        }

        return $datas;
    }

    public function myChart1Doashboard($id){
        $datas = [];
        $wallets = Wallet::where('user_id',$id)->get();

        $transactions = [];

        foreach($wallets as $wallet){
            $values = Transaction::where('wallet_id',$wallet->id)->whereMonth('date',12)->get();

            foreach($values as $value){
                array_push($transactions,$value);
            }
        }

        $currentAmount = $wallets->sum('initial_balance');
        for($i = 1; $i <= 31 ; $i++){
            $data = array('date'=>'','amount'=> $currentAmount);
            $data['date'] = "T12 ".$i;
            foreach($transactions as $transaction){
                if(explode("-",$transaction->date)[2] == $i){
                    $data['amount'] += $transaction->amount;
                    $currentAmount += $transaction->amount;
                }else{
                    $data['amount'] += 0;
                }
            }

            array_push($datas,$data);
        }

        return $datas;
    }

    public function myChart2Doashboard($id){
        $datas = [];
        
        $wallets = Wallet::where('user_id',$id)->get();

        $transactions = [];

        foreach($wallets as $wallet){
            $values = Transaction::where('wallet_id',$wallet->id)->whereMonth('date',12)->get();

            foreach($values as $value){
                array_push($transactions,$value);
            }
        }

        for($i = 1; $i <= 31 ; $i++){
            $data = array('date'=>'','income'=> 0,'outcome'=> 0);
            $data['date'] = "T12 ".$i;
            foreach($transactions as $transaction){
                if(explode("-",$transaction->date)[2] == $i){
                    if($transaction->amount > 0){
                        $data['income'] += $transaction->amount;
                    }else{
                        $data['outcome'] += abs($transaction->amount);
                    }
                }else{
                    $data['income'] += 0;
                    $data['outcome'] += 0;
                }
            }

            array_push($datas,$data);
        }

        return $datas;
    }

    public function myChart3Doashboard($id){
        $datas = [];

        $wallets = Wallet::where('user_id',$id)->get();

        $transactions = [];

        foreach($wallets as $wallet){
            $values = Transaction::groupBy('category_id')->selectRaw('category_id,sum(amount) as total')->where('wallet_id',$wallet->id)->whereMonth('date',12)->get();

            foreach($values as $value){
                array_push($transactions,$value);
            }
        }

        foreach($transactions as $transaction){
            $data = array('category'=> '','color' => '','amount'=> 0);
            if($transaction->total > 0){
                $data['category'] = $transaction->category->title;
                $data['color'] = $transaction->category->color;
                $data['amount'] = $transaction->total;

                array_push($datas,$data);
            }
        }

        return $datas;
    }

    public function myChart4Doashboard($id){
        $datas = [];

        $wallets = Wallet::where('user_id',$id)->get();

        $transactions = [];

        foreach($wallets as $wallet){
            $values = Transaction::groupBy('category_id')->selectRaw('category_id,sum(amount) as total')->where('wallet_id',$wallet->id)->whereMonth('date',12)->get();

            foreach($values as $value){
                array_push($transactions,$value);
            }
        }

        foreach($transactions as $transaction){
            $data = array('category'=> '','color' => '','amount'=> 0);
            if($transaction->total < 0){
                $data['category'] = $transaction->category->title;
                $data['color'] = $transaction->category->color;
                $data['amount'] = $transaction->total;

                array_push($datas,$data);
            }
        }

        return $datas; 
    }
}

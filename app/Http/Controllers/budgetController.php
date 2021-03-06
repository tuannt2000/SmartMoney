<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use App\Models\Category;
use App\Models\Budget;
use App\Models\Budget_Category;
use App\Models\Wallet;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class budgetController extends Controller
{
    public function budget(){
        $budgets = Budget::where('user_id',Auth::user()->id)->get();
        $outcome = Category::where('type','outcome')->where('create_by', Auth::user()->id)->get();

        $sums = [];

        foreach($budgets as $budget){
            $sum = 0;

            foreach ($budget->budget_category as $value) {
                if(count($value->category->transaction->where('date','>=',$budget->start_date)->where('date','<=',$budget->end_date)) != 0){
                    foreach ($value->category->transaction->where('date','>=',$budget->start_date)->where('date','<=',$budget->end_date) as $v){
                        $sum += $v->amount;
                    }
                }
            }

            array_push($sums,$sum);
        }


        return view('budgets',['budgets'=>$budgets,'outcome'=>$outcome,'sums'=>$sums]);
    }

    public function createBudget(Request $request){
        $budget = new Budget;

        $budget->title = $request->title;
        $budget->amount = $request->amount;
        $budget->start_date = new \DateTime;
        $budget->end_date = date_add(new \DateTime,date_interval_create_from_date_string("30 days"));
        $budget->user_id = Auth::user()->id;

        $budget->save();

        $budget_categories = $request->category_id;

        foreach($budget_categories as $value) {
            $budget_category = new Budget_Category;
            $budget_category->budget_id = $budget->id;
            $budget_category->category_id = $value;

            $budget_category->save();
        }

        return redirect('budgets');
    }

    public function budgetsDetail($id_budget){
        $budget = Budget::find($id_budget);

        $sum = 0.00;

        foreach ($budget->budget_category as $value) {
            if(count($value->category->transaction->where('date','>=',$budget->start_date)->where('date','<=',$budget->end_date)) != 0){
                foreach ($value->category->transaction->where('date','>=',$budget->start_date)->where('date','<=',$budget->end_date) as $v){
                    $sum += $v->amount;
                }
            }
        }

        $outcome = Category::where('type','outcome')->where('create_by', Auth::user()->id)->get();

        return view('budgetsDetail',['budget'=>$budget,'outcome'=>$outcome,'sum'=>$sum]);
    }

    public function fixBudgetsDetail($id_budget,Request $request){
        $budget = Budget::find($id_budget);

        $budget->title = $request->title;
        $budget->amount = $request->amount;

        $budget->save();

        $budget_categories = $request->category_id;

        foreach($budget_categories as $value) {
            if(count(Budget_Category::where('category_id',$value)->get()) == 0){
                $budget_category = new Budget_Category;
                $budget_category->budget_id = $id_budget;
                $budget_category->category_id = $value;
    
                $budget_category->save();
            }
        }

        $deletes = Budget_Category::where('budget_id',$id_budget)->get();

        foreach($deletes as $value) {
            if(!in_array($value->category_id,$budget_categories)){
                $value->delete();
            }
        }

        return redirect('budgetsDetail/'.$id_budget);
    }

    public function deleteBudgetsDetail($id_budget){
        $budget = Budget::find($id_budget);

        $budget->delete();

        return redirect('budgets');
    }

    public function budgetWallets($id){
        $wallet = Wallet::find($id);
        $budgets = Budget::where('user_id',Auth::user()->id)->get();
        $outcome = Category::where('type','outcome')->where('create_by', Auth::user()->id)->get();

        $sums = [];

        foreach($budgets as $budget){
            $sum = 0;

            foreach ($budget->budget_category as $value) {
                if(count($value->category->transaction->where('date','>=',$budget->start_date)->where('date','<=',$budget->end_date)) != 0){
                    foreach ($value->category->transaction->where('date','>=',$budget->start_date)->where('date','<=',$budget->end_date) as $v){
                        $sum += $v->amount;
                    }
                }
            }

            array_push($sums,$sum);
        }

        return view('wallet.budgets',['wallet'=>$wallet,'budgets'=>$budgets,'outcome'=>$outcome,'sums'=>$sums]);
    }

    public function budgetDetailWallets($id,$id_budget){
        $budget = Budget::find($id_budget);
       
        $sum = 0.00;

        foreach ($budget->budget_category as $value) {
            if(count($value->category->transaction->where('date','>=',$budget->start_date)->where('date','<=',$budget->end_date)) != 0){
                foreach ($value->category->transaction->where('date','>=',$budget->start_date)->where('date','<=',$budget->end_date) as $v){
                    $sum += $v->amount;
                }
            }
        }

        $outcome = Category::where('type','outcome')->where('create_by', Auth::user()->id)->get();

        $wallet = Wallet::find($id);

        return view('wallet.budgetsDetail',['budget'=>$budget,'sum'=>$sum,'outcome'=>$outcome,'wallet'=>$wallet]);
    }

    public function createBudgetWallets($id,Request $request){
        $budget = new Budget;

        $budget->title = $request->title;
        $budget->amount = $request->amount;
        $budget->start_date = new \DateTime;
        $budget->end_date = date_add(new \DateTime,date_interval_create_from_date_string("30 days"));
        $budget->user_id = Auth::user()->id;

        $budget->save();

        $budget_categories = $request->category_id;

        foreach($budget_categories as $value) {
            $budget_category = new Budget_Category;
            $budget_category->budget_id = $budget->id;
            $budget_category->category_id = $value;

            $budget_category->save();
        }

        return redirect('wallet/'.$id.'/budgets');
    }

    public function fixBudgetDetailWallets($id,$id_budget,Request $request){
        $budget = Budget::find($id_budget);

        $budget->title = $request->title;
        $budget->amount = $request->amount;

        $budget->save();

        $budget_categories = $request->category_id;

        foreach($budget_categories as $value) {
            if(count(Budget_Category::where('category_id',$value)->get()) == 0){
                $budget_category = new Budget_Category;
                $budget_category->budget_id = $id_budget;
                $budget_category->category_id = $value;
    
                $budget_category->save();
            }
        }

        $deletes = Budget_Category::where('budget_id',$id_budget)->get();

        foreach($deletes as $value) {
            if(!in_array($value->category_id,$budget_categories)){
                $value->delete();
            }
        }

        return redirect('wallet/'.$id.'/budgetsDetail/'.$id_budget);
    }

    public function deleteBudgetDetailWallets($id,$id_budget){
        $budget = Budget::find($id_budget);

        $budget->delete();

        return redirect('wallet/'.$id.'/budgets');
    }
}

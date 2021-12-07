<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Category;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class settingsController extends Controller
{
    public function getAccount(){
        return view('settings.account');
    }

    public function postAccount(Request $request,$id){
        $user = User::find($id);

        $this->validate($request,
                [
                    'email' => 'required|unique:users,email,'.$user->id.',id',
                ],
                [
                    'email.required' => 'Bạn chưa nhập Email',
                    'email.unique' => 'Email đã tồn tại',
                ]
            );

        if($request->hasFile('img')){
            $file = $request->file('img');
            $name = $file->getClientOriginalName();
            $Hinh = Str::random(4)."_".$name;
            while(file_exists("images/slide".$Hinh)){
                $Hinh = Str::random(4)."_".$name;
            }
            $file->move("src/img/",$Hinh);
            if($user->img != 'unnamed.png'){
                unlink("src/img/".$user->img);
            }
            $user->img = $Hinh;
        }

        if(isset($request->firstname)){
            $user->firstname = $request->firstname;
        }
        if(isset($request->lastname)){
            $user->lastname = $request->lastname;
        }
        if(isset($request->email)){
            $user->email = $request->email;
        }
        if(isset($request->gender)){
            $user->gender = $request->gender;
        }
        if(isset($request->year) && isset($request->month) && isset($request->day)){
            $user->birthday = $request->year.'-'.$request->month.'-'.$request->day;
        }
       
        $user->save();

        return redirect('settings/account')->with('thongbao',"Cập nhập thành công");
    }

    public function deleteAccount(Request $request,$id){
        $user = User::find($id);
        $user->delete();

        $category = Category::where('create_by',$id)->get();
        foreach($category as $c){
            $c->delete();
        }

        return redirect('auth/login');
    }
}

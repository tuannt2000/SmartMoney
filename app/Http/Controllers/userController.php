<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{
    public function getdangnhap(){
        return view("auth.login");
    }

    public function postdangnhap(Request $request){
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){       //đăng nhập
            return redirect('dashboard');
        }else{
            return redirect()->back()->with('thongbao','Tài khoản hoặc mật khẩu không chính xác')->withInput();
        }
    }

    public function getdangky(){
        return view("auth.signup");
    }

    public function postdangky(Request $request){
        $this->validate($request,
            [
                'email' => 'unique:users,email',
                'password' => 'min:6|max:12',
                'confirmPassword' => 'same:password',
            ],
            [
                'password.max' => 'Password có độ dài 6 đến 12 ký tự',
                'password.min' => 'Password có độ dài 6 đến 12 ký tự',
                'email.unique' => 'Email đã tồn tại',
                'confirmPassword.same' => 'Nhập lại mật khẩu sai',
            ]
        );

        $user = new User;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->quyen = "user";
        $user->save();

        Category::where('create_by', 0)->each(function ($oldRecord) {
            $newRecord = $oldRecord->replicate();

            $newRecord->setTable('categories');
            $newRecord->create_by = -1;
            $newRecord->save();
        });

        $category = Category::where('create_by', -1)->get();

        foreach ($category as $value) {
            $value->create_by = $user->id;
            $value->save();
        }

        return redirect()->back()->with('thongbao',"Đăng ký thành công")->withInput();
    }

    public function getForgotPassword(){
        return view('auth.forgot-password');
    }

    public function postForgotPassword(Request $request){
        $user =  User::where('email',$request->email)->get();
        if(count($user) > 0){
            return redirect()->back()->with('thanhcong',"Đã gửi tin nhắn đến email của bạn");
        }else{
            return redirect()->back()->with('thatbai',"Email không tồn tại");
        }
    }
}

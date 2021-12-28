<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        return view('admin.users.user',['users' => User::get(), 'title' => 'User']);
    }
    public function edit($id = null)
    {
        if(empty($id))
        {
            return view('admin.users.form_create_edit',[
                'users' => User::get(),
                'route' => route('admin.users.create'),
                'title' => 'Create User',
                'button' => 'Create'
            ]);
        }

        return view('admin.users.form_create_edit',[
            'users' => User::findOrFail($id),
            'route' => route('admin.users.edit.update', $id),
            'title' => 'Edit User',
            'button' => 'Edit'
        ]);
    }


    public function create(Request $request)
    {
        $user = $request->only( 'name', 'email', 'password', 'account_type', 'phone_number', 'address');
        User::insert($user);

        return redirect(route('admin.users.index'))->with('status', 'Create successful user!');
    }

    public function update(Request $request, $id)
    {
        $user = $request->only('name', 'email', 'password', 'account_type', 'phone_number', 'address');
        User::findOrFail($id)->update($user);

        return redirect(route('index'))->with('status', 'Edit successful user!');
    }

    public function delete(Request $request)
    {
        User::findOrFail($request->delete)->delete();

        return redirect(route('index'))->with('status', 'Delete successful user!');
    }

    public function setting(){
        return view('admin.profile.setting',['profile' => User::findOrFail(Auth::id()), 'title' => 'User']);
    }

    public function changeProfile(Request $request)
    {
        $user = $request->only('name','phone_number','address');
        User::findOrFail(Auth::id())->update($user);
        return redirect(route('home'))->with('status', 'Edit successful profile!');
    }




}

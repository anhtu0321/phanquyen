<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
class userController extends Controller
{
    //
    public function Index(){
        $data['users'] = User::all();
        return view('user.index',$data);
    }
    public function create(){
        return view('user.add');
    }
    public function store(Request $request){
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        //inser data vao role
        $roles = $request->role;
        
        foreach ($roles as $roleId) {
            \DB::table('role_user')->insert([
                'user_id'=> $user->id,
                'role_id'=> $roleId
            ]);
        }
        return view('user.add');
    }
}

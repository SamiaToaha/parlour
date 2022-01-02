<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
  public function registration()
  {
      return view('Website.registration');
  }


  public function UserStore(Request $request){
    // dd($request->all());
    User::create([
        'name'=>$request->name,
        'phone_number'=>$request->Phone_number,
        'email'=>$request->email,
        'password'=>bcrypt($request->Password),
    ]);
    return redirect()->back()->with('success','Customer has registered successfully' );
}
public function login(Request $request)
{
    // dd($request->all());
    $userInfo=$request->except('_token');
//        $credentials['email']=$request->user_email;
//        $credentials['password']=$request->user_password;
//        dd($credentials);
//        $credentials=$request->only('user_email','user_password');


    if(Auth::attempt($userInfo)){

        return redirect()->back()->with('message','Login successful.');
    }
    return redirect()->back()->with('error','Invalid user credentials');

}


public function logout()
{
    Auth::logout();
    return redirect()->route('website')->with('message','Logging out.');
}
}


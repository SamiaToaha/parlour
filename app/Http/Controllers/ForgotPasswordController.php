<?php

// namespace App\Http\Controllers;

// use Illuminate\Support\Facades\Mail;

// use Illuminate\Support\Facades\Schema;

// use Illuminate\Database\Schema\Blueprint;
// use Illuminate\Database\Migrations\Migration;

// class ForgotPasswordController extends Controller
// {
//     //
//     public function showForgetPasswordForm()
//     {
//        return view('Website.forgot_password');
//     }

//     /**
//      * Write code on Method
//      *
//      * @return response()
//      */
//     public function submitForgetPasswordForm(Request $request)
//     {
//         $request->validate([
//             'email' => 'required|email|exists:users',
//         ]);

//         $token = Str::random(64);

//         DB::table('password_resets')->insert([
//             'email' => $request->email, 
//             'token' => $token, 
//             'created_at' => Carbon::now()
//           ]);

//         Mail::send('email.forgetPassword', ['token' => $token], function($message) use($request){
//             $message->to($request->email);
//             $message->subject('Reset Password');
//         });

//         return back()->with('message', 'We have e-mailed your password reset link!');
//     }
//     /**
//      * Write code on Method
//      *
//      * @return response()
//      */
//     public function showResetPasswordForm($token) { 
//        return view('Website.forgetPasswordLink', ['token' => $token]);
//     }

//     /**
//      * Write code on Method
//      *
//      * @return response()
//      */
//     public function submitResetPasswordForm(Request $request)
//     {
//         $request->validate([
//             'email' => 'required|email|exists:users',
//             'password' => 'required|string|min:6|confirmed',
//             'password_confirmation' => 'required'
//         ]);

//         $updatePassword = DB::table('password_resets')
//                             ->where([
//                               'email' => $request->email, 
//                               'token' => $request->token
//                             ])
//                             ->first();

//         if(!$updatePassword){
//             return back()->withInput()->with('error', 'Invalid token!');
//         }

//         $user = User::where('email', $request->email)
//                     ->update(['password' => Hash::make($request->password)]);

//         DB::table('password_resets')->where(['email'=> $request->email])->delete();

//         return redirect('/login')->with('message', 'Your password has been changed!');
//     }
// }

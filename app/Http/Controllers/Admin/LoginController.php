<?php

namespace App\Http\Controllers\Admin;

use App\Classes\GeniusMailer;
use App\Models\Generalsetting;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Input;
use Validator;


class LoginController extends Controller
{
  public function __construct()
  {
    $this->middleware('guest:admin', ['except' => ['logout']]);
  }

  public function showLoginForm()
  {
    return view('admin.login');
  }

  // Railway database not working 
  // public function login(Request $request)
  // {
  //   //--- Validation Section
  //   $rules = [
  //     'email'   => 'required|email',
  //     'password' => 'required'
  //   ];

  //   $validator = Validator::make($request->all(), $rules);

  //   if ($validator->fails()) {
  //     return response()->json(array('errors' => $validator->getMessageBag()->toArray()));
  //   }
  //   //--- Validation Section Ends

  //   // Attempt to log the user in
  //   if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
  //     // if successful, then redirect to their intended location
  //     return redirect()->route('admin.dashboard');
  //   }

  //   // if unsuccessful, then redirect back to the login with the form data
  //   return response()->json(array('errors' => [0 => 'Credentials Doesn\'t Match !']));
  // }

  public function login(Request $request)
  {
      // Validation
      $rules = [
          'email'   => 'required|email',
          'password' => 'required'
      ];

      $validator = Validator::make($request->all(), $rules);

      if ($validator->fails()) {
          return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
      }

      // Get admin record manually
      $admin = \App\Models\Admin::where('email', $request->email)->first();

      if (!$admin) {
          return response()->json(['errors' => [0 => 'Invalid Email !']]);
      }

      // ⚠️ Plain Text Compare (NO HASH)
      if ($admin->password !== $request->password) {
          return response()->json(['errors' => [0 => 'Invalid Password !']]);
      }

      // Manual login (bypass bcrypt system)
      Auth::guard('admin')->login($admin);

      return redirect()->route('admin.dashboard');
  }


  public function showForgotForm()
  {
    return view('admin.forgot');
  }
 
  public function logout()
  {
    Auth::guard('admin')->logout();
    return redirect('/');
  }
}

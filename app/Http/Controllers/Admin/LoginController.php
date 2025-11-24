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

  public function login(Request $request)
  {
    $rules = [
      'email'   => 'required|email',
      'password' => 'required'
    ];

    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
      return response()->json(['errors' => $validator->getMessageBag()->toArray()]);
    }

    // Get admin by email
    $admin = Admin::where('email', $request->email)->first();

    if (!$admin) {
      return response()->json(['errors' => [0 => 'Invalid email or password']]);
    }

    $inputPassword = $request->password;
    $storedPassword = $admin->password;

    // CASE 1: Password is bcrypt hashed → use Hash::check
    if (strlen($storedPassword) > 20 && Hash::check($inputPassword, $storedPassword)) {
      Auth::guard('admin')->login($admin);
      return redirect()->route('admin.dashboard');
    }

    // CASE 2: Password is stored as plain text → compare directly
    if ($storedPassword === $inputPassword) {
      Auth::guard('admin')->login($admin);
      return redirect()->route('admin.dashboard');
    }

    // Otherwise login failed
    return response()->json(['errors' => [0 => 'Credentials Doesn\'t Match !']]);
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

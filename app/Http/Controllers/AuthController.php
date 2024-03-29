<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  public function users(RegisterRequest $request)
  {
      $data = $request->validated();
  
      $user = User::create([
          'name' => $data['name'],
          'email' => $data['email'],
          'password' => bcrypt($data['password']),
          'type' => $data['type'] 
      ]);
  
      Auth::login($user);
  
      if (Auth::check()) {
          $user_type = Auth::user()->type;
          if ($user_type == 0) {
              return redirect('/');
          } elseif ($user_type == 1) {
              return redirect('/dashboard');
          }
      }
  
      return redirect('/');
  }
  

    public function login(Request $request)
    {
        return view("Auth.login");
    }

    public function register(Request $request)
    {
      return view("Auth.register");
    }

    public function signin(LoginRequest $request)
    {
        $data = $request->validated();
        if(auth()->attempt($data)) {
            if (auth()->user()->type == 1) {
                return redirect('/dashboard');
            } else {
              return redirect('/');;
            }
        } else {
            return redirect()->route('login')->with('error', 'Email-Address and Password are wrong.');
        }
      }
    
  public function logout(Request $request)
  {
      auth()->logout();
      $request->session()->invalidate();
      $request->session()->regenerateToken();
      return redirect('/');
  }

}

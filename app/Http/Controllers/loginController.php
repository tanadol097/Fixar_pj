<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{
    
        // Other existing methods...
    
        public function username()
        {
            $loginType = request()->input('login');
            
            // Check if the input is an email, username or phone number
            $field = filter_var($loginType, FILTER_VALIDATE_EMAIL) ? 'email' 
                : (is_numeric($loginType) ? 'phone_number' : 'username');
    
            request()->merge([$field => $loginType]);
    
            return $field;
        }
    
        // Override the original login method
        protected function credentials(Request $request)
        {
            return [
                $this->username() => $request->input('login'),
                'password' => $request->input('password'),
            ];
            
        }
        protected function validateLogin(Request $request)
  {
    $field = $this->username();

    $request->validate([
        'login' => 'required|string',
        'password' => 'required|string',
    ]);
  }

    
}

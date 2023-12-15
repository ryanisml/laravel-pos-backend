<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'min:8|required'
        ]);

        $user = User::where('email', $data['email'])->first();

        if (!$user) {
            return response([
                'message' => 'The provided credentials are incorrect.'
            ], 401);
        }

        if (!Hash::check($data['password'], $user->password)) {
            return response([
                'message' => 'The provided credentials password are incorrect.'
            ], 401);
        }else{
            $token = $user->createToken('auth_token')->plainTextToken;

            return response([
                'message' => 'Login success',
                'user' => $user,
                'token' => $token
            ], 200);
        }
    }
}

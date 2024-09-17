<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiLoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function login(Request $request)
    {
        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = auth()->user();
            $token = $user->createToken('auth-token')->plainTextToken;
            return response()->json([
                'message' => 'berhasil login',
                'status' => true,
                'code' => 200,
                'data' => [
                    'token' => $token,
                    'user' => $user,
                    'password' => $user->password
                ]
            ], 200);
        } else {
            return response()->json(['message' => 'Email dan Password salah', 'status' => false, 'code' => 401], 401);
        }
    }

}

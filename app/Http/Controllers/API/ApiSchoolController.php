<?php

namespace App\Http\Controllers\API;

use App\Contracts\Interfaces\SchoolInterface;
use App\Http\Controllers\Controller;
use App\Models\User;
use F9Web\ApiResponseHelpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ApiSchoolController extends Controller
{
    use ApiResponseHelpers;
    private SchoolInterface $school;

    public function __construct(SchoolInterface $school)
    {
        $this->school = $school;
    }

    public function checkLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::where('email', $request->email)->first();
        

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json(['message' => 'Invalid credentials'], 401);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'message' => 'success',
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }
}

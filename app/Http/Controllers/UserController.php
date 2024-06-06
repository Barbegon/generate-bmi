<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required|string|unique:users',
            'password' => 'required|string',
            'birth_date' => 'required|date',
            'height' => 'required|string',
            'weight' => 'required|string',
        ]);

        $user = new User([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'password' => bcrypt($request->password),
            'birth_date' => $request->birth_date,
            'height' => $request->height,
            'weight' => $request->weight,
        ]);

        $user->save();

        return response()->json([
            'message' => 'Successfully created user!',
        ], 200);
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'message' => 'Unauthorized',
            ], 401);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Successfully logged out',
        ]);
    }
}

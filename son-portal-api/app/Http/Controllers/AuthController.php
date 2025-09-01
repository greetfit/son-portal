<?php 
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // normalize email to avoid subtle mismatches
        $request->merge(['email' => trim(strtolower((string) $request->input('email')))]);

        $data = $request->validate([
            'email'    => ['required','email'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $data['email'])->first();
        if (!$user) {
            return response()->json(['message' => 'Email not found'], 422);
        }
        if (!Hash::check($data['password'], $user->password)) {
            return response()->json(['message' => 'Wrong password'], 422);
        }

        // optional; keeps $request->user() populated
        Auth::login($user);

        $token = $user->createToken('web')->plainTextToken;

        return response()->json(['token' => $token, 'user' => $user], 200);
    }

    public function logout(Request $request)
    {
        $request->user()?->currentAccessToken()?->delete();
        return response()->noContent();
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Login method using Laravel Sanctum
     *
     * @todo Add move all auth to a business layer to clean the controller
     * @param Request $request
     *
     * @return [type]
     */
    public function login(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'Invalid login details',
            ], Response::HTTP_UNAUTHORIZED);
        }

        $user = User::where('email', $request['email'])
            ->firstOrFail();

        return response()->json([
            'access_token' => $user->createToken('auth_token')
                ->plainTextToken,
            'token_type' => 'Bearer',
        ]);
    }

    /**
     * Logout method using Laravel Sanctum
     *
     * @param Request $request
     *
     * @return Response
     */
    public function logout(Request $request)
    {
        Auth::user()
            ->tokens()
            ->delete();

        return response()
            ->noContent();
    }

    /**
     * @param Request $request
     *
     * @return User
     */
    public function me(Request $request)
    {
        return Auth::user();
    }
}

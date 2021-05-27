<?php

namespace App\Http\Controllers;

use http\Cookie;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthController
{
    public function login(Request $request)
    {
        try {
            $login = $request->input('login');
            $pass = $request->input('pass');
            //$resource = $this->authService->login($login, $pass);
            $token = 'token'; //$this->tokenService->getToken($resource);

            $request->cookie('token', $token);

            return redirect('/orders');
        } catch (\Exception $e) {
            return response(['error' => $e->getMessage()], $e->getCode());
        }
    }

    public function logout(Request $request)
    {
        $request->cookie('token', '');
        return redirect('/');
    }
}

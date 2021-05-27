<?php

namespace App\Http\Controllers;

use Firebase\JWT\JWT;
use Illuminate\Http\Request;

class AuthController
{
    public function login(Request $request)
    {
        try {
            $login = $request->input('login');
            $pass = $request->input('pass');
            $userData = ['test'=> 'data'];//$this->authService->login($login, $pass);
            $key = 'token_key';
            $payload = ["data" => $userData];
            $jwt = JWT::encode($payload, $key);
            setcookie('token', $jwt, strtotime("+30 days"));

            return redirect('/orders');
        } catch (\Exception $e) {
            return response(['error' => $e->getMessage()], $e->getCode());
        }
    }

    public function logout()
    {
        setcookie('token', '');
        return redirect('/');
    }
}

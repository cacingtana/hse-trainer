<?php

namespace App\Core\Auth;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class GenerateToken
{
    protected $token;

    public function encoding($user)
    {
        try {
            $session = \Config\Services::session();
            $key = getenv('TOKEN_KEY');
            $payload = array(
                "iat" => 1356999524,
                "nbf" => 1357000000,
                "uid" => $user->users_id,
                'role' => $user->ref_role_id,
                'name' => $user->first_name . " " . $user->last_name,
            );
            $this->token = JWT::encode($payload, $key, 'HS256');
            //setCookie('hrms', $token, time() + 60 * 60 * 24 * 30, "/");
            //$session->destroy(); //destroy last is active
            $session->set("credential-app", [
                'token' => $this->token,
            ]);
            return true;
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    function decoding($token)
    {
        try {
            $key = getenv('TOKEN_KEY');
            $decoded = JWT::decode($token, new Key($key, 'HS256'));
            if (!$decoded) {
                return null;
            } else {
                return $decoded;
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}

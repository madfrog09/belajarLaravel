<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswa;

class myAPIController extends Controller
{
	public function siswaLogin($username,$password)
    {
        $datasiswa = siswa::where('username', $username)->where('password', $password)->get();
        if (count($datasiswa)>0) {
            $token = $datasiswa->generateToken();
			$res['token'] = $token;
			return response($res);
        }
		else{
			$res['message'] = "Login Failed!";
			return response($res);
		}
    }
}

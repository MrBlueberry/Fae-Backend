<?php

namespace App\Api\v1\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

use Dingo\Api\Routing\Helpers;
use App\User;

class AuthenticationController extends Controller
{
    use Helpers;
    
    public function __construct(Request $request) {
    	$this->request = $request;
    }

    public function login() {
    	// echo 'login';
    	return $this->response->array(['token' => '123456']);
    }

    public function logout() {
    	echo 'logout';
    }
}

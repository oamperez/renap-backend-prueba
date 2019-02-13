<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Redirect;
use Session;
class FrontController extends Controller
{
	    public function __construct()
    {
        $this->middleware('noadmin',['only'=>'home']);
    }
    public function welcome(){
        return view('inicio');
    }
    public function home(){
		return view('solicitud.home');
    }
}

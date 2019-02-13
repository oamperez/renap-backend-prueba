<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Auth;
use Redirect;
use Session;

class LogController extends Controller
{
    public function index(){
        return Redirect::to('/');
    }
    public function store(LoginRequest $request){
    	if(Auth::attempt(['email'=>$request['email'], 'password'=> $request['password']])){
    		return Redirect::to('home');
    	}else{
            Session::flash('message-error','Datos icorrectos');
            return Redirect::to('/');
        }
       
    }
    public function logout(){
    	Auth::logout();
    	return Redirect::to('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SolicitudRequest;
use App\User;
use App\Solicitud;
use Redirect;
use Session;
use Mail;

class SolicitudController extends Controller
{
	public function __construct()
    {
        $this->middleware('solicitud',['only'=>'index','store']);
    }
    public function index(){
    	return view('solicitud.solicitud');
    }
    public function store(SolicitudRequest $request){
    	if($request){
            //crea usuario
            $password = str_random(8);
            $dpi = rand(1000,9000).' '.rand(10000,90000).' '.rand(1000,9000);
            if ($request->file('photo')) {
                $image    = $request->file('photo');
                $name = 'RENAP_' .time(). '.' . $image->getClientOriginalExtension();
                $path = public_path().'/img/profile/';
                $image->move($path,$name);
            }
            $user = User::Create([
                'first_name' => $request -> input('first_name'),
                'last_name' => $request -> input('last_name'),
                'birthdate' => $request -> input('birthdate'),
                'Department' => $request -> input('Department'),
                'municipality' => $request -> input('municipality'),
                'address' => $request -> input('address'),
                'phone' => $request -> input('phone'),
                'photo' => $name,
                'email' => $request -> input('email'),
                'password' => bcrypt($password),
                'dpi' => $dpi,
            ]);
            if($user->id!=1){
                $solicitud = new Solicitud();
                $solicitud->user()->associate($user);
                $solicitud->save();
            }else{
                $user->type = 'admin';   
            }
            //genera la solicitud
            
            //Manda gmail con passwor y contraseña
            $data = array(
                'email' => $user->email,
                'password'=>$password,
                'dpi'=>$dpi,
                'type'=>$user->type,
                'name'=>$user->first_name.' '.$user->last_name,
            );            
            Mail::send('solicitud.emails.solicitud',$data, function($msj) use ($user){
                $msj->subject('Solicitud de DPI');
                $msj->to($user->email);
            });
            //guarda usuario
            $user->save();
            Session::flash('message-success','Solicitud Enviada Correctamente.');
	        return Redirect::to('/');
	    }
    }
}

            
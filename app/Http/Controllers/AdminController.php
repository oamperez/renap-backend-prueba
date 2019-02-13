<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Solicitud;
use App\User;
use Redirect;
use Session;
use Mail;
class AdminController extends Controller
{
	public function __construct()
    {
        $this->middleware('admin');
    }
    public function index(Request $request){
    	$solicitud = Solicitud::orderBy('id','DESC')->paginate(15)->where('user.type', 'none');
        $solicitud->each(function($solicitud){
            $solicitud->user;
        });
        if($solicitud){
            return view('admin.inicio')->with('solicituds',$solicitud);
        }
    }
    public function update(Request $request,$id){
        $solicitud = Solicitud::find($id);
        $solicitud->state = $request->state;    
        $data = array(
            'email' => $solicitud->user->email,
            'dpi'=>$solicitud->user->dpi,
            'state'=>$solicitud->state,
            'name'=>$solicitud->user->first_name.' '.$solicitud->user->last_name,
        );            
        Mail::send('solicitud.emails.estado',$data, function($msj)use ($solicitud){
            $msj->subject('Solicitud de DPI');
            $msj->to($solicitud->user->email);
        });
        $solicitud->save();
        return Redirect::to('admin');
    }
    public function edit($id){
        $solicitud = Solicitud::find($id);
        return view('admin.edit')->with('solicitud',$solicitud);
    }   
}
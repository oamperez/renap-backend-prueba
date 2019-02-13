<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Solicitud;
use Exception;
class MovilController extends Controller
{
	Protected $status_code = 200;
    Protected $result      = false; 
    Protected $message     = 'There was a problem processing your request';
    Protected $records     = [];
    
    public function show($id)
    {
        try 
        {
            $records = User::find($id);
            $records->solicitud;
            if ($records)
            {
                $this->status_code = 200;
                $this->result      = true;
                $this->message     = 'The User has been displayed correctly';
                $this->records     = $records;
            } 
            else 
            {
                $this->status_code = 200;
                $this->result      = false;
                $this->message     = 'The User does not exist';
                $this->records     = []; 
            }
        }
        catch (Excepcion $e) 
        {
            $this ->status_code = 200;
            $this ->result      = false;
            $this ->message     = env('APP_DEBUG') ? $e->getMessage(): $this->message;
            
        }
        finally
        {
            $response = [
            'result'  =>  $this->result,
            'message' =>  $this->message,
            'records' =>  $this->records
            ];
            return response()->json($response, $this->status_code);
        } 
    }
    public function store(Request $request){
    	try {   
            $record = User::where('email', $request->input('email'))->first();
            if($record) {
                if(\Hash::check($request->input('password'), $record->password)) {
                    if($record->type == "none") {
				        $record->solicitud;
                        $this->status_code = 200;
                        $this->result = true;
                        $this->message = 'Welcome User';
                        $this->records = $record;
                    } else {
                        $this->status_code = 200;
                        $this->result = false;
                        $this->message = 'Wrong User';
                    }           
                } else {
                    $this->status_code = 200;
                    $this->result = false;
                    $this->message = 'Invalid Password';
                }
            } else {
                $this->status_code = 200;
                $this->result = false;
                $this->message = 'The User does not exist';
            }
        } catch (Exception $e) {
            $this->status_code =200;
            $this->result = false;
            $this->message = env('APP_DEBUG') ? $e ->getMessage() : $this ->message;
        } finally {
            $response = [
                'result' => $this->result,
                'message' => $this->message,
                'records' => $this->records,
            ];
            return response()->json($response, $this->status_code);
        }
    }
}

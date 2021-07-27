<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function sendRsponse($result,$message)
    {
        $response = [
            'success'=>true,
            'data'=> $result,
            'message'=>$message,
        ];
        return response()->json($response,200);
    }
    public function sendError($err,$errMsg=[],$code=404)
    {
        $response = [
            'success'=>false,
            'message'=>$err,
        ];
        if (!empty($errMsg)) {
                $response['data'] = $errMsg;
        }
        return response()->json($response,$code);
    }
}

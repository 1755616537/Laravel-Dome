<?php

namespace App\http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

use function Psy\debug;
use Illuminate\Support\Facades\Log;

class UserController extends Controller {
    public function index( Request $request ) {
        // $name = $request->input( 'name' );
        // return response()
        // ->json( ['a'=>'2'] )
        // ->header( '1', 'a' )
        // ->cookie( 'a', '1' );
        Log::debug( 'An informational message.' );
        return $this->Return('成功')->cookie( 'a', '1' );
    }
    protected function Return( $msg, $code = 0, $data='' ) {
        return response()
        ->json( [
            'code'=>$code,
            'msg' =>$msg,
            'data'=>$data
        ], 200 );
    }
}

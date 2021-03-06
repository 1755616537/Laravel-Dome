<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function Return( $msg, $code = 0, $data='' ) {
        return response()
        ->json( [
            'code'=>$code,
            'msg' =>$msg,
            'data'=>$data
        ], 200 );
    }
}

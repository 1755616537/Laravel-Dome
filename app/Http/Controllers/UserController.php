<?php

namespace App\http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

use function Psy\debug;
use Illuminate\Support\Facades\Log;

class UserController extends Controller {
    public function index( Request $request ) {
        $name = $request->input( 'name' );
        Log::debug( 'An informational message.' );
        return $this->Return('成功')->cookie( 'a', '1' );
    }

    
}

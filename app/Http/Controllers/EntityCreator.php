<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class EntityCreator extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke()
    {
        return auth()->user;
}

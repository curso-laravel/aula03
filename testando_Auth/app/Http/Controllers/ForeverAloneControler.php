<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForeverAloneControler extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return "<H1> Eu me sinto só </H1>";
    }
}

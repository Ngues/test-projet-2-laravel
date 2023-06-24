<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $blogs = [
            [
                'title' => 'titre un',
                'body' => 'Ceci est le corp du text',
                'status' => 0
            ],
            [
                'title' => 'titre deux',
                'body' => 'Ceci est le corp du text',
                'status' => 0
            ],
            [
                'title' => 'titre trois',
                'body' => 'Ceci est le corp du text',
                'status' => 1
            ],
            [
                'title' => 'titre quatre',
                'body' => 'Ceci est le corp du text',
                'status' => 0
            ]
            ];
            
        return view('home', compact('blogs'));
    }
}

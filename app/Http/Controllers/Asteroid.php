<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class Asteroid extends Controller
{
    //
    function list(Request $request)
    {
        //print_r($request->input());
       
        $from = $request->input('from-date');
        $to = $request->input('to-date');
        $key = "s1g4xWhe4KqvW1zZ5JZa7rpMmmk9JzJUrMQ8Jj1U";
        $urls = "https://api.nasa.gov/neo/rest/v1/feed?start_date=".$from."&end_date=".$to."&api_key=".$key;
        echo $urls;

        $data =  Http::get($urls)->json();
      // $data = Http::get('https://api.nasa.gov/neo/rest/v1/feed?start_date=2020-05-05&end_date=2020-05-07&api_key=s1g4xWhe4KqvW1zZ5JZa7rpMmmk9JzJUrMQ8Jj1U')->json();
       //return $data;

       return view('show',['data'=>$data]);
        
    }
}

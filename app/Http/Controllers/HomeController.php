<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use Illuminate\Support\Number;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $url = "https://prepaid.iak.dev/api/check-balance";

        $username = "username";
        $apiKey = "api-key";

        $response = Http::post($url, [
            'username'=>$username,
            'sign'=>$apiKey
        ]);

        $data = json_decode($response->getBody(), true);
        $result = Number::currency($data["data"]["balance"], 'IDR');

        // return $response["data"]["balance"];

        return view('home', ['result'=>$result]);
    }
}

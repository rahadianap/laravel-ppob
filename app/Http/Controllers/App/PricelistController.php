<?php

namespace App\Http\Controllers\App;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\Controller;

use Illuminate\Support\Number;

class PricelistController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexPra(Request $request)
    {
        $url = "https://prepaid.iak.dev/api/pricelist";

        $username = "username";
        $apiKey = "api-key";

        $response = Http::post($url, [
            'username'=>$username,
            'sign'=>$apiKey,
            'status'=>'active'
        ]);

        $data = json_decode($response->getBody(), true);

        $res = $data["data"]["pricelist"];

        $collection = collect($res)->paginate(15);

        $keyword = $request->keyword;

        return view('app/pricelist_pra', ['result'=>$collection]);
    }

    public function indexPasca(Request $request)
    {
        $url = "https://testpostpaid.mobilepulsa.net/api/v1/bill/check";

        $username = "username";
        $apiKey = "api-key";

        $response = Http::post($url, [
            'commands'=>'pricelist-pasca',
            'username'=>$username,
            'sign'=>$apiKey,
            'status'=>'active'
        ]);

        $data = json_decode($response->getBody(), true);

        $res = $data["data"]["pasca"];

        $collection = collect($res)->paginate(15);

        $keyword = $request->keyword;

        return view('app/pricelist_pasca', ['result'=>$collection]);
    }
}

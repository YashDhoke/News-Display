<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class FeedController extends Controller
{
    public function index()
    {
        // Fetch the data from the api
        $response = Http::withOptions(['verify' => false])->get('https://timesofindia.indiatimes.com/rssfeeds/-2128838597.cms?feedtype=json');
        //$response = Http::get('https://timesofindia.indiatimes.com/rssfeeds/-2128838597.cms?feedtype=json');
        $data = $response->json();

        // Check if the response has the expected structure
        $items = [];
        if (isset($data['channel']['item']) && is_array($data['channel']['item'])) {
            $items = $data['channel']['item'];
        }

        return view('feed', ['items' => $items]);
    }
}

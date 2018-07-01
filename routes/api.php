<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

Route::post('/view', function (Request $request) {
    $data = $request->validate([
        'cardNameInput' => 'required',
    ]);

    $cardname = $request->input('cardNameInput');

    $client = new Client(); //GuzzleHttp\Client

    $result = $client->request('GET', 'https://api.scryfall.com/cards/named', [
        'query' => ['exact' => $cardname],
    ]);

    $card = json_decode($result->getBody(), true);

    return view('view')->with('card', $card);
});

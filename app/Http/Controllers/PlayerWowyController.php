<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PlayerWowyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('puckiq.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $strQ = "?";
        $playername = null;
        foreach($_POST as $key => $val) {
            switch(substr($key, 0, 2)) {
                case "q0":
                    if($key == 'q0player1id')
                        $playername = $val;
                    break;
                case "q1":
                case "q2":
                    $strQ .= ($val != "") ? $key . '=' . $val . "&" : "";
                    break;
            }
        }
        $url = "http://172.19.0.1:3001/puckiq/0/schedule/getRangeWowy" . trim($strQ, "&");

        $playerWowy = json_decode(self::APIConnect($url));
        return view('puckiq.index')
            ->with('playerWowy', $playerWowy)
            ->with('playerName', $playername);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private static function APIConnect($url){
        $client = new \GuzzleHttp\Client();
        $res = $client->request('GET', $url);
        return $res->getBody();
    }
}

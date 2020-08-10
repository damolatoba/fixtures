<?php

namespace App\Http\Controllers;

use Config\app;
use App\Games;
use App\Http\Services\ApiCalls;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GamesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    private $ApiCalls;

    public function __construct(ApiCalls $apiCalls) {
        $this->apiCalls = $apiCalls;
    }

    
    public function index()
    {
        $leagues = [
            'World Cup' => [2, 3, 531],
            'England' => [39,45,528],
            'Spain' => [140, 556],
            'France' => [61, 526, 65],
            'Germany' => [529, 81, 78],
        ];
        // dd($leagues);
        // $gameDates = [date("Y-m-d"), date('Y-m-d',strtotime("+1 days")), date('Y-m-d',strtotime("+1 days"))];

        $finalLeague = [];
        foreach($leagues as $league){
            // array_push($finalLeague, $league);
            foreach($league as $set){
                array_push($finalLeague, $set);
            }
        }

        // dd($finalLeague);

        $daysFixture = [];
        foreach($finalLeague as $eachgame){
            $theParams = ['date'=>date("Y-m-d"), 'league'=>$eachgame, 'season'=>'2019'];
            $query = http_build_query($theParams);
            $pagePath = '/fixtures';
            $pagePath .= '/?'.$query;
            $response = $this->apiCalls->get($pagePath);
            array_push($daysFixture, $response);
        }

        dd($daysFixture);
        
        return view('index', compact('daysFixture'));
        
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Games  $games
     * @return \Illuminate\Http\Response
     */
    public function show(Games $games)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Games  $games
     * @return \Illuminate\Http\Response
     */
    public function edit(Games $games)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Games  $games
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Games $games)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Games  $games
     * @return \Illuminate\Http\Response
     */
    public function destroy(Games $games)
    {
        //
    }
}

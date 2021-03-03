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
        // load file
        $this->data = file_get_contents('fixtures.json');
        // decode json to associative array
        $this->fixtures = json_decode($this->data, true);
    }

    
    public function index()
    {
         dd($this->fixtures);

        return view('index', compact('fixtures'));  
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function updatejason()
    {
        //
        $uri = "fixtures";
        $currentSeason = 2020;
        $currentDate = date('Y-m-d');
        $league = 39;
        $fixtures = $this->fixtures;

        //set query params to make api request for fixtures
        $urlQueryParams = ['season'=>$currentSeason, 'date'=>$currentDate, 'league'=>$league];

        //make call to get fixtures of the day
        $apifixtures = json_decode($this->apiCalls->rapidGet($uri, $urlQueryParams));

        $apifixtures = $apifixtures->response;

        $uri = "odds";
        //set query params to make api request for fixtures
        $urlQueryParams = ['bookmaker'=>24, 'bet'=>1, 'league'=>$league, 'season'=>$currentSeason];

        //make call to get fixtures of the day
        $apiodds = json_decode($this->apiCalls->rapidGet($uri, $urlQueryParams));

        $apiodds = $apiodds->response;

        // dd($apiodds);

        foreach($apifixtures as $apifix)
        {
            $key = array_search($apifix->fixture->id, array_column(array_column($apiodds, 'fixture'), 'id'));
            $checker = 0;
            foreach ($fixtures as $key => $value) 
            {
                if ($apifix->fixture->id == $value['id']) 
                {
                    $fixtures[$key]['status'] = $apifix->fixture->status->short;
                    $fixtures[$key]['elapsed'] = $apifix->fixture->status->elapsed;

                    $fixtures[$key]['home-winner'] = $apifix->teams->home->winner;
                    $fixtures[$key]["home-goals"] = $apifix->goals->home;
                    $fixtures[$key]["home-ht-goals"]= $apifix->score->halftime->home;
                    $fixtures[$key]["home-ft-goals"]= $apifix->score->fulltime->home;
                    $fixtures[$key]["home-et-goals"]= $apifix->score->extratime->home;
                    $fixtures[$key]["home-penalty-goals"]= $apifix->score->penalty->home;

                    $fixtures[$key]['away-winner'] = $apifix->teams->away->winner;
                    $fixtures[$key]["away-goals"] = $apifix->goals->away;
                    $fixtures[$key]["away-ht-goals"]= $apifix->score->halftime->away;
                    $fixtures[$key]["away-ft-goals"]= $apifix->score->fulltime->away;
                    $fixtures[$key]["away-et-goals"]= $apifix->score->extratime->away;
                    $fixtures[$key]["away-penalty-goals"]= $apifix->score->penalty->away;

                    $fixtures[$key]["home-win"]= $apiodds[$key]->bookmakers[0]->bets[0]->values[0]->odd;
                    $fixtures[$key]["draw"]= $apiodds[$key]->bookmakers[0]->bets[0]->values[1]->odd;
                    $fixtures[$key]["away-win"]= $apiodds[$key]->bookmakers[0]->bets[0]->values[2]->odd;
                    $checker = 1;
                }
                
            }

            if($checker == 0)
            {
                $fixtures[] = array(
                    "league-id" => $apifix->league->id,
                    "id"=> $apifix->fixture->id,
                    "date"=> $apifix->fixture->date,
                    "time"=> $apifix->fixture->timestamp,
                    "status"=> $apifix->fixture->status->short,
                    "elapsed"=> $apifix->fixture->status->elapsed,

                    "home-id"=> $apifix->teams->home->id,
                    "home-name"=> $apifix->teams->home->name,
                    "home-logo"=> $apifix->teams->home->logo,
                    "home-winner"=> $apifix->teams->home->winner,
                    "home-goals"=> $apifix->goals->home,
                    "home-ht-goals"=> $apifix->score->halftime->home,
                    "home-ft-goals"=> $apifix->score->fulltime->home,
                    "home-et-goals"=> $apifix->score->extratime->home,
                    "home-penalty-goals"=> $apifix->score->penalty->home,

                    "away-id"=> $apifix->teams->away->id,
                    "away-name"=> $apifix->teams->away->name,
                    "away-logo"=> $apifix->teams->away->logo,
                    "away-winner"=> $apifix->teams->away->winner,
                    "away-goals"=> $apifix->goals->away,
                    "away-ht-goals"=> $apifix->score->halftime->away,
                    "away-ft-goals"=> $apifix->score->fulltime->away,
                    "away-et-goals"=> $apifix->score->extratime->away,
                    "away-penalty-goals"=> $apifix->score->penalty->away,


                    "home-win"=> $apiodds[$key]->bookmakers[0]->bets[0]->values[0]->odd,
                    "draw"=> $apiodds[$key]->bookmakers[0]->bets[0]->values[1]->odd,
                    "away-win"=> $apiodds[$key]->bookmakers[0]->bets[0]->values[2]->odd,
                );
            }
        }

        // encode json and save to file
        file_put_contents('fixtures.json', json_encode($fixtures));

        dd($fixtures);
        
    }

    


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

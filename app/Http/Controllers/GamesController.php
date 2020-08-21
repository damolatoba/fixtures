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
        $allleagues = [
            'World' => [
                [
                    'id'=>2, 
                    'fullname'=> 'Uefa Champions League',
                    'shortname'=> 'UCL',
                    'fixtures'=> []
                ],
                [
                    'id'=>3, 
                    'fullname'=> 'Uefa Europa League', 
                    'shortname'=> 'Europa',
                    'fixtures'=> []
                ],
                [
                    'id'=>531, 
                    'fullname'=> 'Uefa Super Cup', 
                    'shortname'=> 'Super Cup',
                    'fixtures'=> []
                ],
                [
                    'id'=>14, 
                    'fullname'=> 'UEFA Youth League', 
                    'shortname'=> 'UEFA Youth League',
                    'fixtures'=> []
                ]
            ],
            'England' => [
                [
                    'id'=>39, 
                    'fullname'=> 'English Premier League',
                    'shortname'=> 'EPL',
                    'fixtures'=> []
                ],
                [
                    'id'=>45, 
                    'fullname'=> 'FA Cup', 
                    'shortname'=> 'FA Cup',
                    'fixtures'=> []
                ],
                [
                    'id'=>528, 
                    'fullname'=> 'Community Shield', 
                    'shortname'=> 'Community Shield',
                    'fixtures'=> []
                ]
            ],
            'Spain' => [
                [
                    'id'=>140, 
                    'fullname'=> 'Primera Division (La LIga)',
                    'shortname'=> 'La Liga',
                    'fixtures'=> []
                ],
                [
                    'id'=>556, 
                    'fullname'=> 'Super Cup', 
                    'shortname'=> 'Super Cup',
                    'fixtures'=> []
                ]
            ],
            'Germany' => [
                [
                    'id'=>78, 
                    'fullname'=> 'Bundesliga 1',
                    'shortname'=> 'Bundesliga',
                    'fixtures'=> []
                ],
                [
                    'id'=>529, 
                    'fullname'=> 'Super Cup', 
                    'shortname'=> 'Super Cup',
                    'fixtures'=> []
                ],
                [
                    'id'=>81, 
                    'fullname'=> 'DFB Pokal', 
                    'shortname'=> 'DFB',
                    'fixtures'=> []
                ],
            ],
            'France' => [
                [
                    'id'=>61, 
                    'fullname'=> 'Ligue 1',
                    'shortname'=> 'Ligue 1',
                    'fixtures'=> []
                ],
                [
                    'id'=>526, 
                    'fullname'=> 'Trophee de Champions', 
                    'shortname'=> 'Trophee de Champions',
                    'fixtures'=> []
                ],
                [
                    'id'=>65, 
                    'fullname'=> 'Coipe de la Ligue', 
                    'shortname'=> 'Coipe de la Ligue',
                    'fixtures'=> []
                ],
            ],
            'Italy' => [
                [
                    'id'=>135, 
                    'fullname'=> 'Seria A',
                    'shortname'=> 'Seria A',
                    'fixtures'=> []
                ],
                [
                    'id'=>137, 
                    'fullname'=> 'Copa Italia', 
                    'shortname'=> 'Copa Italia',
                    'fixtures'=> []
                ],
                [
                    'id'=>547, 
                    'fullname'=> 'Super Cup', 
                    'shortname'=> 'Super Cup',
                    'fixtures'=> []
                ],
                [
                    'id'=>136, 
                    'fullname'=> 'Seria B', 
                    'shortname'=> 'Seria B',
                    'fixtures'=> []
                ],
            ],
            'Argentina' => [
                [
                    'id'=>128, 
                    'fullname'=> 'Primera Division',
                    'shortname'=> 'Primera Division',
                    'fixtures'=> [],
            'odds'=> []
                ],
                [
                    'id'=>130, 
                    'fullname'=> 'Copa Argentina', 
                    'shortname'=> 'Copa Argentina',
                    'fixtures'=> []
                ],
            ],
            'Portugal' => [
                [
                    'id'=>96, 
                    'fullname'=> 'Taca de Portugal',
                    'shortname'=> 'Taca de Portugal',
                    'fixtures'=> []
                ],
                [
                    'id'=>457, 
                    'fullname'=> 'Campeonato de Portugal Prio - Group A', 
                    'shortname'=> 'Campeonato de Portugal Prio - Group A',
                    'fixtures'=> []
                ],
                [
                    'id'=>550, 
                    'fullname'=> 'Super Cup', 
                    'shortname'=> 'Super Cup',
                    'fixtures'=> []
                ],
            ],
            'Netherlands' => [
                [
                    'id'=>88, 
                    'fullname'=> 'Eredivisie',
                    'shortname'=> 'Eredivisie ',
                    'fixtures'=> []
                ],
                [
                    'id'=>90, 
                    'fullname'=> 'KNVB Beker', 
                    'shortname'=> 'KNVB',
                    'fixtures'=> []
                ],
                [
                    'id'=>543, 
                    'fullname'=> 'Super Cup', 
                    'shortname'=> 'Super Cup',
                    'fixtures'=> []
                ],
            ],
            'Belgium' => [
                [
                    'id'=>144, 
                    'fullname'=> 'Jupiler Pro League',
                    'shortname'=> 'Jupiler Pro League ',
                    'fixtures'=> []
                ],
                [
                    'id'=>90, 
                    'fullname'=> 'KNVB Beker', 
                    'shortname'=> 'KNVB',
                    'fixtures'=> []
                ],
                [
                    'id'=>543, 
                    'fullname'=> 'Super Cup', 
                    'shortname'=> 'Super Cup',
                    'fixtures'=> []
                ],
                [
                    'id'=>88, 
                    'fullname'=> 'Eredivisie', 
                    'shortname'=> 'Eredivisie',
                    'fixtures'=> []
                ],
            ],
            'Scotland' => [
                [
                    'id'=>179, 
                    'fullname'=> 'Premiership',
                    'shortname'=> 'Jupiler Pro League Premiership',
                    'fixtures'=> []
                ],
            ],
            'Norway' => [
                [
                    'id'=>103, 
                    'fullname'=> 'Eliteserien',
                    'shortname'=> 'Eliteserien',
                    'fixtures'=> []
                ],
            ],
            'Sweden' => [
                [
                    'id'=>144, 
                    'fullname'=> 'Superettan',
                    'shortname'=> 'Superettan',
                    'fixtures'=> []
                ],
                [
                    'id'=>113, 
                    'fullname'=> 'Allsvenskan',
                    'shortname'=> 'Allsvenskan',
                    'fixtures'=> []
                ],
            ],
            'Brazil' => [
                [
                    'id'=>71, 
                    'fullname'=> 'Serie A',
                    'shortname'=> 'Serie A',
                    'fixtures'=> []
                ],
                [
                    'id'=>72, 
                    'fullname'=> 'Serie B',
                    'shortname'=> 'Serie B',
                    'fixtures'=> []
                ],
            ],
            'Usa' => [
                [
                    'id'=>253, 
                    'fullname'=> 'Major League Soccer',
                    'shortname'=> 'Major League Soccer',
                    'fixtures'=> []
                ],
            ],
            'China' => [
                [
                    'id'=>169, 
                    'fullname'=> 'Super League',
                    'shortname'=> 'Super League',
                    'fixtures'=> []
                ],
            ],
            'Iran' => [
                [
                    'id'=>291, 
                    'fullname'=> 'Azadegan League',
                    'shortname'=> 'Azadegan League',
                    'fixtures'=> []
                ],
            ],
            'South-Africa' => [
                [
                    'id'=>288, 
                    'fullname'=> 'Premier Soccer League',
                    'shortname'=> 'Premier Soccer League',
                    'fixtures'=> []
                ],
                [
                    'id'=>289, 
                    'fullname'=> '1st Division',
                    'shortname'=> '1st Division',
                    'fixtures'=> []
                ],
            ],
        ];

        $countries = array_keys($allleagues);

        $uri = "fixtures";
        $currentSeason = 2019;
        // $currentDate = date('Y-m-d');
        $currentDate = "2020-08-19";
        //set query params to make api request for fixtures
        $urlQueryParams = ['season'=>$currentSeason, 'date'=>$currentDate];
        // dd($urlQueryParams);

        //make call to get fixtures of the day
        $allfixtures = json_decode($this->apiCalls->rapidGet($uri, $urlQueryParams));

        //reset query params to make api request for odds
        $urlQueryParams = ['date'=>$currentDate, 'bookmaker'=>6, 'bet'=>1];
        //make call to get all odds of the day
        $getodds = json_decode($this->apiCalls->rapidGet('odds', $urlQueryParams));
        $getodds = $getodds->response;
        // dd($getodds);
        

        $allodds = [];
        if($getodds != null){
            //logic to loop through odds array, take streamline odds data
            foreach($getodds as $go){
                $pgo = [$go->fixture->id => $go->bookmakers[0]->bets[0]->values];
                array_push($allodds, $pgo);
            }
        }
        dd($allodds);

        $allfixtures = $allfixtures->response;

        if($allfixtures != null && $getodds != null){
            //loop through fixtures array from api and update $allleagues array with fixtures and odds data
            foreach($allfixtures as $fixture){
                $currentcountry = $fixture->league->country;
                if(in_array($fixture->league->country, $countries)){
                    $key = array_search($fixture->league->id, array_column($allleagues[$fixture->league->country], "id"));
                    if(array_key_exists($fixture->fixture->id, $allodds)){
                        array_push($allleagues[$currentcountry][$key]['fixtures'], $fixture, $allodds[$fixture->fixture->id]);
                    }else{
                        array_push($allleagues[$currentcountry][$key]['fixtures'], $fixture);
                    }
                    
                }
            }
        }
        

        dd($allleagues);

        return view('index', compact('allleagues', 'countries', 'currentDate'));
        
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

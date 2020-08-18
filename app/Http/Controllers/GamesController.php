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
                    'fixtures'=> [],
                    'odds'=> []
                ],
                [
                    'id'=>3, 
                    'fullname'=> 'Uefa Europa League', 
                    'shortname'=> 'Europa',
                    'fixtures'=> [],
                    'odds'=> []
                ],
                [
                    'id'=>531, 
                    'fullname'=> 'Uefa Super Cup', 
                    'shortname'=> 'Super Cup',
                    'fixtures'=> [],
                    'odds'=> []
                ],
                [
                    'id'=>14, 
                    'fullname'=> 'UEFA Youth League', 
                    'shortname'=> 'UEFA Youth League',
                    'fixtures'=> [],
                    'odds'=> []
                ]
            ],
            'England' => [
                [
                    'id'=>39, 
                    'fullname'=> 'English Premier League',
                    'shortname'=> 'EPL',
                    'fixtures'=> [],
                    'odds'=> []
                ],
                [
                    'id'=>45, 
                    'fullname'=> 'FA Cup', 
                    'shortname'=> 'FA Cup',
                    'fixtures'=> [],
                    'odds'=> []
                ],
                [
                    'id'=>528, 
                    'fullname'=> 'Community Shield', 
                    'shortname'=> 'Community Shield',
                    'fixtures'=> [],
                    'odds'=> []
                ]
            ],
            'Spain' => [
                [
                    'id'=>140, 
                    'fullname'=> 'Primera Division (La LIga)',
                    'shortname'=> 'La Liga',
                    'fixtures'=> [],
                    'odds'=> []
                ],
                [
                    'id'=>556, 
                    'fullname'=> 'Super Cup', 
                    'shortname'=> 'Super Cup',
                    'fixtures'=> [],
                    'odds'=> []
                ]
            ],
            'Germany' => [
                [
                    'id'=>78, 
                    'fullname'=> 'Bundesliga 1',
                    'shortname'=> 'Bundesliga',
                    'fixtures'=> [],
                    'odds'=> []
                ],
                [
                    'id'=>529, 
                    'fullname'=> 'Super Cup', 
                    'shortname'=> 'Super Cup',
                    'fixtures'=> [],
                    'odds'=> []
                ],
                [
                    'id'=>81, 
                    'fullname'=> 'DFB Pokal', 
                    'shortname'=> 'DFB',
                    'fixtures'=> [],
                    'odds'=> []
                ],
            ],
            'France' => [
                [
                    'id'=>61, 
                    'fullname'=> 'Ligue 1',
                    'shortname'=> 'Ligue 1',
                    'fixtures'=> [],
                    'odds'=> []
                ],
                [
                    'id'=>526, 
                    'fullname'=> 'Trophee de Champions', 
                    'shortname'=> 'Trophee de Champions',
                    'fixtures'=> [],
                    'odds'=> []
                ],
                [
                    'id'=>65, 
                    'fullname'=> 'Coipe de la Ligue', 
                    'shortname'=> 'Coipe de la Ligue',
                    'fixtures'=> [],
                    'odds'=> []
                ],
            ],
            'Italy' => [
                [
                    'id'=>135, 
                    'fullname'=> 'Seria A',
                    'shortname'=> 'Seria A',
                    'fixtures'=> [],
                    'odds'=> []
                ],
                [
                    'id'=>137, 
                    'fullname'=> 'Copa Italia', 
                    'shortname'=> 'Copa Italia',
                    'fixtures'=> [],
                    'odds'=> []
                ],
                [
                    'id'=>547, 
                    'fullname'=> 'Super Cup', 
                    'shortname'=> 'Super Cup',
                    'fixtures'=> [],
                    'odds'=> []
                ],
                [
                    'id'=>136, 
                    'fullname'=> 'Seria B', 
                    'shortname'=> 'Seria B',
                    'fixtures'=> [],
                    'odds'=> []
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
                    'fixtures'=> [],
                    'odds'=> []
                ],
            ],
            'Portugal' => [
                [
                    'id'=>96, 
                    'fullname'=> 'Taca de Portugal',
                    'shortname'=> 'Taca de Portugal',
                    'fixtures'=> [],
                    'odds'=> []
                ],
                [
                    'id'=>457, 
                    'fullname'=> 'Campeonato de Portugal Prio - Group A', 
                    'shortname'=> 'Campeonato de Portugal Prio - Group A',
                    'fixtures'=> [],
                    'odds'=> []
                ],
                [
                    'id'=>550, 
                    'fullname'=> 'Super Cup', 
                    'shortname'=> 'Super Cup',
                    'fixtures'=> [],
                    'odds'=> []
                ],
            ],
            'Netherlands' => [
                [
                    'id'=>88, 
                    'fullname'=> 'Eredivisie',
                    'shortname'=> 'Eredivisie ',
                    'fixtures'=> [],
                    'odds'=> []
                ],
                [
                    'id'=>90, 
                    'fullname'=> 'KNVB Beker', 
                    'shortname'=> 'KNVB',
                    'fixtures'=> [],
                    'odds'=> []
                ],
                [
                    'id'=>543, 
                    'fullname'=> 'Super Cup', 
                    'shortname'=> 'Super Cup',
                    'fixtures'=> [],
                    'odds'=> []
                ],
                [
                    'id'=>88, 
                    'fullname'=> 'Eredivisie', 
                    'shortname'=> 'Eredivisie',
                    'fixtures'=> [],
                    'odds'=> []
                ],
            ],
            'Belgium' => [
                [
                    'id'=>144, 
                    'fullname'=> 'Jupiler Pro League',
                    'shortname'=> 'Jupiler Pro League ',
                    'fixtures'=> [],
                    'odds'=> []
                ],
                [
                    'id'=>90, 
                    'fullname'=> 'KNVB Beker', 
                    'shortname'=> 'KNVB',
                    'fixtures'=> [],
                    'odds'=> []
                ],
                [
                    'id'=>543, 
                    'fullname'=> 'Super Cup', 
                    'shortname'=> 'Super Cup',
                    'fixtures'=> [],
                    'odds'=> []
                ],
                [
                    'id'=>88, 
                    'fullname'=> 'Eredivisie', 
                    'shortname'=> 'Eredivisie',
                    'fixtures'=> [],
                    'odds'=> []
                ],
            ],
            'Scotland' => [
                [
                    'id'=>179, 
                    'fullname'=> 'Premiership',
                    'shortname'=> 'Jupiler Pro League Premiership',
                    'fixtures'=> [],
                    'odds'=> []
                ],
            ],
            'Norway' => [
                [
                    'id'=>103, 
                    'fullname'=> 'Eliteserien',
                    'shortname'=> 'Eliteserien',
                    'fixtures'=> [],
                    'odds'=> []
                ],
            ],
            'Sweden' => [
                [
                    'id'=>144, 
                    'fullname'=> 'Superettan',
                    'shortname'=> 'Superettan',
                    'fixtures'=> [],
                    'odds'=> []
                ],
                [
                    'id'=>113, 
                    'fullname'=> 'Allsvenskan',
                    'shortname'=> 'Allsvenskan',
                    'fixtures'=> [],
                    'odds'=> []
                ],
            ],
            'Brazil' => [
                [
                    'id'=>71, 
                    'fullname'=> 'Serie A',
                    'shortname'=> 'Serie A',
                    'fixtures'=> [],
                    'odds'=> []
                ],
                [
                    'id'=>72, 
                    'fullname'=> 'Serie B',
                    'shortname'=> 'Serie B',
                    'fixtures'=> [],
                    'odds'=> []
                ],
            ],
            'Usa' => [
                [
                    'id'=>253, 
                    'fullname'=> 'Major League Soccer',
                    'shortname'=> 'Major League Soccer',
                    'fixtures'=> [],
                    'odds'=> []
                ],
            ],
            'China' => [
                [
                    'id'=>169, 
                    'fullname'=> 'Super League',
                    'shortname'=> 'Super League',
                    'fixtures'=> [],
                    'odds'=> []
                ],
            ],
            'Iran' => [
                [
                    'id'=>291, 
                    'fullname'=> 'Azadegan League',
                    'shortname'=> 'Azadegan League',
                    'fixtures'=> [],
                    'odds'=> []
                ],
            ],
            'South-Africa' => [
                [
                    'id'=>288, 
                    'fullname'=> 'Premier Soccer League',
                    'shortname'=> 'Premier Soccer League',
                    'fixtures'=> [],
                    'odds'=> []
                ],
                [
                    'id'=>289, 
                    'fullname'=> '1st Division',
                    'shortname'=> '1st Division',
                    'fixtures'=> [],
                    'odds'=> []
                ],
            ],
        ];

        $countries = array_keys($allleagues);

        $uri = "fixtures";
        $currentSeason = 2019;
        $currentDate = date('Y-m-d');
        $urlQueryParams = ['season'=>$currentSeason, 'date'=>$currentDate];
        // dd($urlQueryParams);

        $allfixtures = json_decode($this->apiCalls->rapidGet($uri, $urlQueryParams));
        // dd($allfixtures);

        //odds array search doc
        //https://www.geeksforgeeks.org/how-to-search-by-keyvalue-in-a-multidimensional-array-in-php/?ref=rp
        $urlQueryParams = ['date'=>$currentDate, 'bookmaker'=>6, 'bet'=>1];
        $allodds = json_decode($this->apiCalls->rapidGet('odds', $urlQueryParams));

        dd($allodds->response);

        $allfixtures = $allfixtures->response;
        if(count($allfixtures)>0){
            foreach($allfixtures as $fixture){
                if(in_array($fixture->league->country, $countries)){
                    $key = array_search($fixture->league->id, array_column($allleagues[$fixture->league->country], "id"));
                        array_push($allleagues[$fixture->league->country][$key]['fixtures'], $fixture);
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

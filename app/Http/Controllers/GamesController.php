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
                ],
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
                ],
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
                    'fixtures'=> []
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
                [
                    'id'=>88, 
                    'fullname'=> 'Eredivisie', 
                    'shortname'=> 'Eredivisie',
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
        ];

        $countries = array_keys($allleagues);

        $uri = "fixtures";
        $currentSeason = 2019;
        $currentDate = date('Y-m-d');
        $urlQueryParams = ['season'=>$currentSeason, 'date'=>$currentDate];

        $allfixtures = json_decode($this->apiCalls->rapidGet($uri, $urlQueryParams));

        $allfixtures = $allfixtures->response;
        foreach($allfixtures as $fixture){
            if(in_array($fixture->league->country, $countries)){
                $key = array_search($fixture->league->id, array_column($allleagues[$fixture->league->country], "id"));
                if($key != false){
                    $time = strtotime($fixture->fixture->date);
                    $newformat = date('Y-m-d',$time);
                    $fixture->fixture->date = $newformat;
                    array_push($allleagues[$fixture->league->country][$key]['fixtures'], $fixture);
                }
            }
        }

        // dd($allleagues);

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

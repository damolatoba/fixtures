<?php

namespace App\Http\Services;


class ApiCalls
{
    /**
     * @param string $configPath
     * @param array $replaceBaseUrlParameters - NOTE: only mandatory parameters not query parameters
     * @return string|null
     */

    public static function get(string $pagePath): ?string
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            // CURLOPT_URL => "https://api-football-beta.p.rapidapi.com",
            CURLOPT_URL => config('app.base_url').'/'.$pagePath,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "x-rapidapi-host: api-football-beta.p.rapidapi.com",
                "x-rapidapi-key: 9bba8adeecmsh9b7a2d91363e660p1d0000jsnf58d2293a224"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            return $response;
        }
    }
        

    
    // public static function getApiUrl(string $configPath, array $replaceBaseUrlParameters = []): ?string
    // {
    //     $uri = config($configPath);
    //     $baseUrl = config('api_url.base_url.' . config('app.env'));

    //     if (!empty($replaceBaseUrlParameters)) {
    //         foreach ($replaceBaseUrlParameters as $key => $value) {
    //             $replaceString = '{' . $key . '}';
    //             $uri = str_replace_first($replaceString, $value, $uri);
    //         }
    //     }
    //     return $baseUrl . $uri;
    // }
}
<?php
namespace App\Libraries;

class Rest 
{
    public function callRest($url)
    {
        $curl = curl_init();

        curl_setopt_array($curl, [
        CURLOPT_URL => "http://10.10.20.105//api/v1/$url",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_POSTFIELDS => ""
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
        echo "cURL Error #:" . $err;
        } else {
        return json_decode($response);
        }
    }
}
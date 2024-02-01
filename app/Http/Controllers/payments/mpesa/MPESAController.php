<?php

namespace App\Http\Controllers\payments\mpesa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MPESAController extends Controller
{
    public function getAccessToken(){
        $url = env('MPESA_ENV') == 0
        ? 'https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials'
        : 'https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials';

        $curl = curl_init($url);
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_HTTPHEADER => ['Content-Type: application/json; charset=utf8'],
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_HEADER => false,
                CURLOPT_USERPWD => env('MPESA_CONSUMER_KEY') . ':' . env('MPESA_CONSUMER_SECRET') 
            )
            );
            $response = curl_exec($curl);
            \curl_close($curl);

            return $response;
    }

    public function makeHttp($url, $body){
       {  "OriginatorConversationID": "feb5e3f2-fbbc-4745-844c-ee37b546f627",
        "InitiatorName": "testapi",
        "SecurityCredential":"EsJocK7+NjqZPC3I3EO+TbvS+xVb9TymWwaKABoaZr/Z/n0UysSs..",
        "CommandID":"BusinessPayment",
         "Amount":"10"
   "PartyA":"600996",
   "PartyB":"254728762287"
   "Remarks":"here are my remarks",
   "QueueTimeOutURL":"https://mydomain.com/b2c/queue",
   "ResultURL":"https://mydomain.com/b2c/result",
   "Occassion":"Christmas"
       }
    }
}

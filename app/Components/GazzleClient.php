<?php

namespace App\Components;

use GuzzleHttp\Client;

class GazzleClient
{
    public $client;
    public function __construct()
    {
        $this->client  =  new  Client ([
            // Базовый URI используется с относительными запросами
            'base_uri'  =>  'https://www.noob-club.ru/index.php?topic=79016.0' ,
            // Вы можете установить любое количество параметров запроса по умолчанию.
            'timeout'   =>  2.0 ,
            'verify' => false
        ]);
    }
}

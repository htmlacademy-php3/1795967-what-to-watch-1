<?php

namespace WTW\services\filmgetter;

use GuzzleHttp\Client;

class OmdRepository implements InterfaceFilmsRepository
{
    private string $omdId;
    private string $apiKey = 'b406965d';

    public function __construct(string $omdId)
    {
        $this->omdId = $omdId;

    }

    public function getFilm()
    {
        // TODO: Implement getFilm() method.
        echo "Ищем фильм $this->omdId" . PHP_EOL;
//        http://www.omdbapi.com/?i=tt3896198&apikey=b406965d
        $client = new Client(['base_uri' => 'http://www.omdbapi.com']);
        $response = $client->request('GET', '?i=' . $this->omdId . '&apikey=' . $this->apiKey);
        return json_decode($response->getBody()->getContents(), true);
    }
}
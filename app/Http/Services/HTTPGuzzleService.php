<?php

namespace App\Http\Services;

use GuzzleHttp\Client;

class HTTPGuzzleService
{
    public $client, $token, $accept, $endpoint;

    public function __construct($token, $accept, $endpoint)
    {
        $this->token = $token;
        $this->accept = $accept;
        $this->endpoint = $endpoint;

        $this->client = new Client([
            'base_uri' => $this->endpoint,
            'headers' => [
                'Authorization' => $this->token,
                'Accept' => $this->accept
            ]
        ]);

    }

    public function peticionHTTP($method, $uri, $conf = [])
    {
        return $this->client->request($method, $uri, $conf);
    }

    public function getArray($response)
    {
        return json_decode($response->getBody()->getContents());
    }
}

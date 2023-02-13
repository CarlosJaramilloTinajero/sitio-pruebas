<?php

namespace App\Http\Services\APIS\Exel;

use Illuminate\Support\Facades\Http;

class ExelConection
{
    private $token, $endpoint;

    public function __construct()
    {
        $this->token = config('services.exel.token');
        $this->endpoint = config('services.exel.endpoint');
    }

    public function methosGet($uri, $query = [])
    {
        $reponse = Http::withHeaders([
            'Authorization' => $this->token,
            'Content-Type' => 'appication/json'
        ])->get($this->endpoint . $uri, $query)->json();

        return $reponse;
    }

    public function methosPost($uri, $query = [])
    {
        $reponse = Http::withHeaders([
            'Authorization' => $this->token,
            'Content-Type' => 'appication/json'
        ])->post($this->endpoint . $uri, $query)->json();

        return $reponse;
    }
}

<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class pruebasGuzzle extends Controller
{

    public function getPosts()
    {
        // la base uri es el endpoint de la api a la que nos vamos a contectar y el timeout es el tiempo de espera para una respuesta
        $client = new Client([
            'base_uri' => 'https://jsonplaceholder.typicode.com',
            'timeout' => 2.0
        ]);

        // El metodo request del objeto de la clase/interfaz GuzzleHTTP\CLient  recibe o envia peticiones HTTP
        // El primer parametro es el metodo a realizar y el segundo es a donde va a hacer la peticion ejemplo: base_uri/posts
        // Y en la variable response se guarda todos los datos de la respuesta de la peticion
        $response = $client->request('GET', 'posts');

        // Con el metodo getBody nos retorna solo el stream de la respuesta de la peticion
        // Con el metodo getContents obtenemos todo el contenido en formato json en un string
        // Con el metodo json_decode convertirmos el string que tiene guardado todos los datos en formato json a un array
        $posts = json_decode($response->getBody()->getContents());

        return view('prubasGuzzle.posts.index', ['posts' => $posts]);
    }
}

<?php
namespace App\Controllers;

class HomeController extends BaseController
{
    public function index(\Slim\Http\Request $request, \Slim\Http\Response $response)
    {
        $response->write(json_encode(array("hi")));
    }
}


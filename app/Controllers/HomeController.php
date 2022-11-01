<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../public/");
    }

    public function index(): void
    {
        $url = CONF_URL_API . "breeds/list/all";

        $breeds = (json_decode(file_get_contents($url), false))->message;
        
        echo $this->view->render('pages/home', compact('breeds'));
    }
    
    public function image(array $data): void
    {
        $breed = $data["breed"];
        $url = CONF_URL_API . "breed/{$breed}/images/random";

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $response = json_decode(curl_exec($ch));

        echo $response->message;
    }
}
<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MyRepublic extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'myrepublic tangerang',
            'color' => 'rgb(0, 102, 255)',
            'description' => '',
            'keywords' => 'Internet No #1 di indonesia dengan harga terjangkau download streaming di jamin puas'
        ];
        return view('template/myrepublic/index', $data);
    }
    public function paketBussines()
    {
        $data = [
            'title' => 'myrepublic tangerang',
            'color' => 'rgb(0, 102, 255)',
            'description' => '',
            'keywords' => 'Internet No #1 di indonesia dengan harga terjangkau download streaming di jamin puas'
        ];
        return view('template/myrepublic/paket-bussines', $data);
    }
}

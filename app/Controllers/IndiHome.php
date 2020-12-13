<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class IndiHome extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Indihome Tangerang | 088214376816 | Indihome',
            'color' => '#ed0721',
            'description' => 'Daftar dan pasang indihome Tangerang melalui registrasi online untuk pelanggan di Tangerang dan sekitarnya, proses cepat langsung aktif.',
            'keywords' => 'indihome tangerang',
        ];
        return view('template/indihome/index.php', $data);
    }
    public function paketIndiHome()
    {
        $data = [
            'title' => 'Indihome Tangerang | 088214376816 | Indihome',
            'color' => '#ed0721',
            'description' => 'Daftar dan pasang indihome Tangerang melalui registrasi online untuk pelanggan di Tangerang dan sekitarnya, proses cepat langsung aktif.',
            'keywords' => 'indihome tangerang',
        ];
        return view('template/indihome/paket-indihome.php', $data);
    }
}

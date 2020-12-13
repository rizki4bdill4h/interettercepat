<?php

namespace App\Controllers;

class Template extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Internettercepat',
			'color' => '##37517e',
			'description' => 'Sales internet , Jasa pembuatan website ,Jasa pasang Kabel Lan , Jasa Setting router',
			'keywords' => 'Sales internet , Jasa pembuatan website ,Jasa pasang Kabel Lan , Jasa Setting router'
		];
		return view('template/index', $data);
	}

	public function jasaPembuatanWebsite()
	{
		$data = [
			'title' => 'Internettercepat',
			'color' => '##37517e',
			'description' => 'Sales internet , Jasa pembuatan website ,Jasa pasang Kabel Lan , Jasa Setting router',
			'keywords' => 'Sales internet , Jasa pembuatan website ,Jasa pasang Kabel Lan , Jasa Setting router'
		];
		return view('template/jasa-pembuatan-website', $data);
	}
	public function jasaInstalasiKabelLan()
	{
		$data = [
			'title' => 'Internettercepat',
			'color' => '##37517e',
			'description' => 'Sales internet , Jasa pembuatan website ,Jasa pasang Kabel Lan , Jasa Setting router',
			'keywords' => 'Sales internet , Jasa pembuatan website ,Jasa pasang Kabel Lan , Jasa Setting router'
		];
		return view('template/jasa-instalasi-kabel-lan', $data);
	}
	public function jasaSettingRouter()
	{
		$data = [
			'title' => 'Internettercepat',
			'color' => '##37517e',
			'description' => 'Sales internet , Jasa pembuatan website ,Jasa pasang Kabel Lan , Jasa Setting router',
			'keywords' => 'Sales internet , Jasa pembuatan website ,Jasa pasang Kabel Lan , Jasa Setting router'
		];
		return view('template/jasa-setting-router', $data);
	}
	public function jasaInstalasiCctv()
	{
		$data = [
			'title' => 'Internettercepat',
			'color' => '##37517e',
			'description' => 'Sales internet , Jasa pembuatan website ,Jasa pasang Kabel Lan , Jasa Setting router',
			'keywords' => 'Sales internet , Jasa pembuatan website ,Jasa pasang Kabel Lan , Jasa Setting router'
		];
		return view('template/jasa-instalasi-cctv', $data);
	}
	public function jasaInstalasiListrik()
	{
		$data = [
			'title' => 'Internettercepat',
			'color' => '##37517e',
			'description' => 'Sales internet , Jasa pembuatan website ,Jasa pasang Kabel Lan , Jasa Setting router',
			'keywords' => 'Sales internet , Jasa pembuatan website ,Jasa pasang Kabel Lan , Jasa Setting router'
		];
		return view('template/jasa-instalasi-listrik', $data);
	}

	//--------------------------------------------------------------------

}

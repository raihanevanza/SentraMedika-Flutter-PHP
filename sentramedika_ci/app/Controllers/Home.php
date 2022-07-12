<?php

namespace App\Controllers;

use App\Models\HomeModel;

class Home extends BaseController
{
	protected $homeModel;
	public function __construct()
	{
		$this->homeModel = new HomeModel();
	}

	public function index()
	{
		// $home = $this->homeModel->findAll();

		$data = [
			'title' => 'Home',
			'home' => $this->homeModel->getHome()
		];

		return view('user/home', $data);
	}
}

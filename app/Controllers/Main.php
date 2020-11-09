<?php 
namespace App\Controllers;

class Main extends BaseController 
{
	public function index()
	{
		echo view('templates/header');
		echo view('home');
        echo view('templates/footer');

	}

}

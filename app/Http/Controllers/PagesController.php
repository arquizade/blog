<?php

namespace App\Http\Controllers;

Class PagesController extends Controller{

	public function getIndex()
	{
		$first = 'Dhenmark';
		$last = 'Arquiza';

		$full = $first." ".$last;
		$email = 'dhenmark@email.com';
		$arraysample ='Im Inside of Array';
		$data = [];
		$data['data1'] = $arraysample;

		return view('pages.welcome')->withFullname($full)->withEmail($email)->withData($data);
	}

	public function getHome()
	{
		return view('pages.home');
	}

	public function getContact()
	{
		return view('pages.contact');
	}
	public function getAbout()
	{
		return view('pages.about');
	}


}

?>
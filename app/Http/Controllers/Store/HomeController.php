<?php

namespace App\Http\Controllers\Store;


use App\Http\Controllers\Controller;
use App\Mail\wellcomemail;
use Mail;

class HomeController extends Controller
{
	public function index()
	{
        Mail::to('congquyet08042012@gmail.com')->send(new Wellcomemail());
		return view('store.pages.index');
	}
}
<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class DayController extends Controller {

	public function welcome()
	{
		return view('index');
	}

	public function day1()
	{
		$a = 'Abbie';
		$b = 'Jaz';
		return view('pages.day1',compact('a','b'));
	}

	public function intro()
	{
		return view('pages.intro');
	}
}

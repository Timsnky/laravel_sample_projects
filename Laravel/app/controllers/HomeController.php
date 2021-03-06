<?php

class HomeController extends BaseController{

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function submit()
	{


		$input = Input::all();
		$user = new User;
		$user->name = $input['name'];
		$user->phone = $input['phone'];
		$user->email = $input['email'];
		$user->age = $input['age'];
		$user->save();

		return Redirect::to('/');
	}

	public function display()
	{

		$users = User::all();
		$message = "The Entered Details are:</br></br>";

		return View::make('display', ['users' => $users, 'message' => $message]);
	}

}

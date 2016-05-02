<?php

namespace Quaker\Authmeal\Controllers;

use App\Http\Controllers\Controller;
use Quaker\Authmeal\Authmeal;

class AuthmealController extends Controller {
	public function foo(){
		$page_title = '2 Coconuts';
		$welcome_message = 'Welcome! Welcome! Have 2 coconuts';

		$data = compact('page_title', 'welcome_message');

		return view('authmeal::welcome', $data);
		// return Authmeal::saySomething();
		// return 'Foo controller works!';
	}
}
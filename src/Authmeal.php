<?php

namespace Quaker\Authmeal;

class Authmeal{
	public static function saySomething(){
		// return 'Hello world!';
		return trans('authmeal::messages.greeting');
		// return config('authmeal.message');
	}
}
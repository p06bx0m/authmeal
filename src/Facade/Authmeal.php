<?php

namespace Quaker\Authmeal\Facade;

use Illuminate\Support\Facades\Facade;

class Authmeal extends Facade {
	protected static function getFacadeAccessor() {
		return 'authmeal';
	}
}
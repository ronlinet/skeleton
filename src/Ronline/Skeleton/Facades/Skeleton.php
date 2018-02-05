<?php
/**
 * 
 * Author: Roman Hurtik
 * Email: job@roman-online.net
 * 
 */

namespace Ronline\Skeleton\Facades;

use Illuminate\Support\Facades\Facade;

class Skeleton extends Facade{
	protected static function getFacadeAccessor(){
		return 'hello';
	}
}

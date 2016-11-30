<?php

namespace Alihossein\Time\Facade;
use Illuminate\Support\Facades\Facade;

class TimerFacade extends Facade
{

	protected static function getFacadeAccessor()
	{
		return 'MyTimer';
	}
	
}
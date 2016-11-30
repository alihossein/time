<?php

namespace Alihossein\Time\Controllers;


use Alihossein\Time\Timestamp;
use Alihossein\Time\Timezone;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TimeController extends Controller
{
	/*
	 * return current time
	 */
	public function showTime()
	{
		
		$timezone = config('MyConfig.madrid');
		$time=Carbon::now()->setTimezone($timezone)->toTimeString();
		return view('MyView::time')->with('time',$time);

	}
/*
 * return current date
 */
	public function showDate()
	{
		return \MyTimerFacade::aQuarterAgo();
		$date=Carbon::now()->toDateString();
		return view('MyView::date')->with('date',$date);
	}

	public function showTimestamp()
	{
		
		return Timestamp::all();
	}
	
	
}

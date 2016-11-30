<?php
Route::get('time','Alihossein\Time\Controllers\TimeController@showTime')->middleware('checkTime:50');

Route::get('date','Alihossein\Time\Controllers\TimeController@showDate');
Route::get('timestamp','Alihossein\Time\Controllers\TimeController@showTimestamp');




Route::get('test',function(){
	// 1 
//	$timer= new \Alihossein\Time\Facade\Timer();
//	return $timer->oneHourAgo();

	// 2
//	return app('MyTimer')->oneHourAgo();

	// 3
//	return MyTimerFacade::aQuarterAgo();


});


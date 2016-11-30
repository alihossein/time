<?php

namespace Alihossein\Time\Facade;
use Carbon\Carbon;

class Timer
{
	/**
	 * @var static
	 */
	public $time;
	/**
	 * Timer constructor.
	 */
	public function __construct()
	{
		$this->time=Carbon::now()->setTimezone('asia/tehran');
	}

	/**
	 * @return string
	 */
	public function oneHourAgo()
	{
		return $this->time->subHour(1)->toTimeString();
	}

	/**
	 * @return string
	 */
	public function aMinuteAgo()
	{
		return $this->time->subMinute(1)->toTimeString();
	}

	/**
	 * @return string
	 */
	public function aQuarterAgo()
	{
		return $this->time->subMinute(15)->toTimeString();
	}
}
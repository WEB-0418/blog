<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Carbon\Carbon;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $monthNames;

	public function __construct()
	{
		$this->monthNames = [
    		'января','февраля','марта','апреля','мая','июня','июля','августа','сентября','октября','ноября','декабря'

    	];
	}

	/**
     * Для получения даты в требуемом формате
     * 
     * @param $date Carbon
     * @return string
     */
	protected function formattedDate(Carbon $date): string
    {
    	return $date->day . ' ' 
    			. $this->monthNames[$date->month - 1] . ' ' 
    			. $date->year;
    }

}

<?php

namespace App\Observers;

use Modules\Entity\Model\Statistics\Model as Statistics;
//use App\Events\Banners\Update;
use Carbon\Carbon;

class StatisticsObserver
{
	 public function creating(Statistics $statistics)
    {
		dd($statistics);
       
    }
    public function updating(Statistics $statistics)
    {
		dd($statistics);
		//dd(455);
       // if ($user->isDirty('is_active')) {
    }
	
	
	 public function Created(Statistics $statistics)
    {
		//dd(50);
       
    }
    public function Updated(Statistics $statistics)
    {
		dd(800);
		
		event(new Update($Banners));
		
       // if ($user->isDirty('is_active')) {
    }
}
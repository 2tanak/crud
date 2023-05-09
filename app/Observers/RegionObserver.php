<?php

namespace App\Observers;

use Modules\Entity\Model\Region\Model as Region;
use App\Events\Banners\Update;
use Carbon\Carbon;

class RegionObserver
{
	 public function creating(Region $region)
    {
		//событие до
	    //$region->trassa = '1';
	  
       
    }
    public function updating(Region $region)
    {
		//$region->trassa ='1';
		
		
		
    }
	
	
	 public function Created(Region $region)
    {
		//событие после
		//dd(50);
       
    }
    public function Updated(Region $region)
    {
		 
		
		//event(new Update($Banners));
		
       // if ($user->isDirty('is_active')) {
    }
}
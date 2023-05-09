<?php

namespace App\Observers;

use Modules\Entity\Model\Banners\Model as Banners;
use App\Events\Banners\Update;
use Carbon\Carbon;

class BannerObserver
{
	 public function creating(Banners $Banners)
    {
		//dd(450);
       
    }
    public function updating(Banners $Banners)
    {
		//dd(455);
       // if ($user->isDirty('is_active')) {
    }
	
	
	 public function Created(Banners $Banners)
    {
		//dd(50);
       
    }
    public function Updated($Banners)
    {
		
		
		event(new Update($Banners));
		
       // if ($user->isDirty('is_active')) {
    }
}
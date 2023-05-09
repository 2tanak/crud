<?php

namespace App\Listeners\Banners;

use App\Models\User;
use App\Events\Banners\Update;
use Carbon\Carbon;

class UpdateListener
{
    
      public function handle($event)
    {
		
		  if ($event instanceof Update) {
           
		       $this->eventUpdate($event);
			}
		
	}
    public function eventUpdate(Registered $event)
    {
      
        
    }
 

   

  
    
}
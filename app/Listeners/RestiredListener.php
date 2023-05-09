<?php

namespace App\Listeners;

use App\Models\User;
use App\Events\RegisterEvent;
use Carbon\Carbon;

class RestiredListener
{
   

    public function __construct()
    {
        //$this->productService = $productService;
        //$this->ossTreeService = $ossTreeService;
    }

    public function handle($event)
    {
        if ($event instanceof RegisterEvent) {
			$user = $event->user;
			$user->roles()->attach(3);
            //$this->registered($event);
        } 
      
    }

   
 
		

       
     
}
<?php

namespace App\Listeners;
use App\User;
//use App\Services\Oss\ProductService;
//use App\Models\Trees\OnlineSmartSystemTreeNode;
//use App\Services\Oss\TreeService as OssTreeService;
//use App\Events\Requisitions\ConfirmedByOwner;
//use App\Events\Requisitions\ConfirmedByCurator;
//use App\Events\Requisitions\ConfirmedByAdmin;
use App\Events\News\News;

use Carbon\Carbon;

class NewsListener
{
    protected $productService;
    protected $ossTreeService;

    public function __construct()
    {
        
    }

    public function handle($event)
    {
		 if ($event instanceof News) {
			 
			 dd(33333);
                $this->registered($event);
			}
		
		
	
    }
 public function registered(Registered $event)
    {

    }
    /**
     * New requisition created
     *
     * @param Registered $event
     */

   

  
    
}
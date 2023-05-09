<?php

namespace App\Observers;

use Modules\Entity\Model\Blog\Model as News;
use Carbon\Carbon;
use App\Events\News\News as EventNews;

class NewsObserver
{
	
	
		protected $request;
	
	
	public function __construct()
    {
    $this->request = app('request');
	
    }
    public function creating(News $news)
    {
		
        //event(new Registered($news));
    }
	
	 public function updating(News $news)
    {
		
		event(new EventNews($news));
    }
	

}
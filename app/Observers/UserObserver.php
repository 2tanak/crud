<?php

namespace App\Observers;

use App\Models\User;
use App\Events\User\PartnerActivated;
use App\Events\User\PartnerUpgraded;
use App\Events\User\PartnerDeactivated;
use App\Events\User\ResidentActivated;
use App\Events\User\ResidentBlocked;
use App\Events\RegisterEvent;
use Carbon\Carbon;

class UserObserver
{
	 public function created(User $user)
    {
	   event(new RegisterEvent($user));
	}

	
    public function updating(User $user)
    {
      
    }
}
<?php

namespace Khaqani\GadgetTicket;

use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;

class GadgetTicketServiceProvider extends ServiceProvider
{
	public function boot()
	{
        $this->loadRoutesFrom(__DIR__ . '/routes.php');
        $this->loadViewsFrom(__DIR__.'/Views', 'Page');
	}

	public function register()
	{
	}
}

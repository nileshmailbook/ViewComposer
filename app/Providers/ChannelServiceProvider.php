<?php

namespace App\Providers;

use App\Channel;
use App\http\View\Composers\ChannelsComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ChannelServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {   
        ##share method accept two parameters 
        //option-1 every single view not recomended
        //View::share('channels',Channel::orderBy('name')->get());
        
        ##composer method 
        //option-2 granuelar views with wild cards
        // view()->composer(['post.*','channel.index'], function ($view) {
        //     $view->with('channels',Channel::orderBy('name')->get());
        // });

        //option-3 dedicate class
           // view()->composer(['post.*','channel.index'],ChannelsComposer::class);
            view()->composer(['methods.*','channel.index'],ChannelsComposer::class);

    }
}

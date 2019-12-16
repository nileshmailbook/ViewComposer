<?php

namespace App\http\View\Composers;

use App\Channel;
use Illuminate\View\View;

class ChannelsComposer
{
    public function compose(View $view)
    {
        return $view->with('channels',Channel::orderBy('name','DESC')->get());
    }
    
}
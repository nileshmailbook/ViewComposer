<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Channel;

class ChannelController extends Controller
{
    public function index()
    {
       return view('channel.index');
    }
}

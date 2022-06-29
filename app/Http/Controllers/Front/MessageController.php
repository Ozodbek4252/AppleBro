<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function create(Request $request)
    {
        Message::create($request->all());
    }
}


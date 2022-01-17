<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function create()
    {
        return view('admin.room.create');
    }
}

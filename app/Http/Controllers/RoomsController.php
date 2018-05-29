<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rooms;

class RoomsController extends Controller
{
    public function render() {
    	$room_obj = new Rooms();
    	$room_list = $room_obj->getAll();
    	return view('rooms', ['room_list'=>$room_list]);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lectures;

class LecturesController extends Controller
{
    public function render() {
    	$lect_obj = new Lectures();
    	$lect_list = $lect_obj->getAll();
    	return view('lectures', ['lect_list'=>$lect_list]);
    }

}

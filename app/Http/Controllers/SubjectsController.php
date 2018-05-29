<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subjects;

class SubjectsController extends Controller
{
    public function render() {
    	$subj_obj = new Subjects();
    	$subj_list = $subj_obj->getAll();
    	return view('subjects', ['subj_list'=>$subj_list]);
    }
}

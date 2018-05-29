<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Lectures;
use Illuminate\Support\Facades\DB;

class Lectures extends Model

{
    private $table_name = 'lectures';
    public function getAll() 
    {
    	return DB::table($this->table_name)->get();
    	// DB::select('select * from lectures');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Subjects;
use Illuminate\Support\Facades\DB;

class Subjects extends Model
{
    private $table_name = 'subjects';
    public function getAll() 
    {
    	return DB::table($this->table_name)->get();
    }
}

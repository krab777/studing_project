<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Rooms;
use Illuminate\Support\Facades\DB;

class Rooms extends Model
{
    private $table_name = 'rooms';
    public function getAll() 
    {
    	return DB::table($this->table_name)->get();
    }
}

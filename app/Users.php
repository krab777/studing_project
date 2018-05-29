<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Users;

class Users extends Model
{
    
	//$table_name = 'users';

    public function deleteStudent($id) {
        return DB::table('users')->where('id', $id)->delete();
    }

}


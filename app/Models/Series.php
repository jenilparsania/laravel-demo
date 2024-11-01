<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDelete;

class Series extends Model
{
    use SoftDeletes;

    protected $table = "companies";
    protected $dates = ['created_at','updated_at','deleted_at'];

    public function company(){
        return $this->hasOne('App\Models\Company','id','company_id');

        
    }


}

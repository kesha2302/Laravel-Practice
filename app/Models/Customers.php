<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customers extends Model
{
    use SoftDeletes;
    protected $table= "customers";
    protected $primaryKey = "customer_id";

    public function setNameAttribute($value){
        $this->attributes['name'] = ucwords($value);
    }

    public function getDobAttribute($value){
        return date("d-M-Y",strtotime($value));
    }
}

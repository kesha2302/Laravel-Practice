<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table= "members";
    protected $primaryKey = "member_id";

    function getGroup()
    {
        return $this->hasOne('App\Models\Group', 'group_id');
    }
}

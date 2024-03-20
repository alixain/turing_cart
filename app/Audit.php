<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audit extends Model
{
    //
    protected $table = "audit";
    protected $primaryKey = $this::table."_id";
}

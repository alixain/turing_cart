<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    //
    protected $table = "shipping";
    protected $primaryKey = $this::table."_id";
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShippingRegion extends Model
{
    //
    protected $table = "shipping_region";
    protected $primaryKey = $this::table."_id";
}

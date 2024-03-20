<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    //
    protected $table = "attribute_value";
    protected $primaryKey = $this::table."_id";
}

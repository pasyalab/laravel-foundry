<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Postmeta extends Model
{
    //

    protected $fillable = [
        "post_id",
        "meta_key",
        "meta_value",
    ];
}

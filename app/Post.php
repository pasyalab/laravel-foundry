<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\MetadataTrait;

class Post extends Model
{
    //
    use MetadataTrait;


    protected $metadataModel = "App\Postmeta";
    protected $metadataForeignKey = "post_id";
    // protected $metadataTable = "postmetas";


    public function metadata()
    {
        $operation = $this->hasMany('App\Postmeta', 'post_id');
// 
        // dd( get_class_methods($operation));
        // dd($operation->getResults());
        return $operation;
    }

    protected static function booted()
    {
        static::retrieved(function ($model) {
            //
            // dd( get_class_methods($model) );
            // $metadata = $model->postmeta()->get();

            // dd($metadata->get());
        });
    }
}

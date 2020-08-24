<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostmetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('postmetas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('post_id');
            $table->string('meta_key');
            $table->text('meta_value');
            $table->timestamps();
        });

        for ($i=1; $i < 11; $i++) { 
            \DB::table('postmetas')->insert([
                ['post_id' => $i, 'meta_key' => 'thumbnail', 'meta_value' => '/img/tn.jpg', 'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),],
                ['post_id' => $i, 'meta_key' => 'template', 'meta_value' => 'default', 'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),],
                ['post_id' => $i, 'meta_key' => 'has_polling', 'meta_value' => $i, 'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),],
                ['post_id' => $i, 'meta_key' => 'duration', 'meta_value' => 8, 'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),],
                ['post_id' => $i, 'meta_key' => 'rating', 'meta_value' => 5, 'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),],
            ]);
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('postmetas');
    }
}

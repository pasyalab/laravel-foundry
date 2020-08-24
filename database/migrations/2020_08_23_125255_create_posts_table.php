<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('content');
            $table->timestamps();
        });

        $titles = [
            "Satoshi Nakaboto: ‘Bitcoin is now worth as much as Netflix’",
            "We need to talk about Eastman Kodak’s insane 2,000% pharma pump",
            "European app claims flight delay compensation for you in BTC",
            "Watch Apple’s market cap hit $2 trillion in this NASDAQ bar chart race",
            "Here’s how rich you’d be if you bought its stock instead of its products",
            "Tesla and Apple set stock splits to lower share prices — then they rallied",
            "Bitcoin ends day above $12K for first time in a year",
            "Stock tanks amid SEC probe into billion-dollar fraud allegations",
            "This artist turns boring stock market data into gorgeous minimalist art",
            "Kraken expects Bitcoin to rally up to 200% in the coming months",
        ];

        $content = "Depending on who you ask, the stock market is either fascinating or painfully dull — but one artist is turning charts into aesthetic vaporwave prints to bridge the gap.

        Stoxart is the work of Gladys, a self-described visual insights innovator mixing data with art to capture 2020’s monumentally volatile markets.
        
        Entirely hand-drawn with Adobe Illustrator’s pen tool, Gladys amplifies the context surrounding this year’s biggest stock storylines by transforming sharp price movements into jagged mountain skylines.
        The result is compelling, and not only for fans of minimalist art.";

        foreach($titles as $key => $entry) {
            DB::table('posts')->insert([
                'title' => $entry,
                'content' => $content,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
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
        Schema::dropIfExists('posts');
    }
}

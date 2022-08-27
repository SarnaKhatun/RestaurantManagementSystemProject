<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specials', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('category_id');
            $table->string('title')->nullable();
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->text('image')->nullable();
            $table->tinyInteger('status')->default(1)->comment('1 => Available; 0 => Unavailable');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specials');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRepairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repairs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrainted()->onDelete('cascade');
            $table->text('address');
            $table->text('description');
            $table->text('category');
            $table->integer('price');
            $table->integer('final_price')->default(0);
            $table->integer('status')->default(1);
            $table->string('image')->default('image');
            $table->string('image_new')->default('image_new');
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
        Schema::dropIfExists('repairs');
    }
}

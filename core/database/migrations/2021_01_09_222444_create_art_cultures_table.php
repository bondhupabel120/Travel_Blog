<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtCulturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('art_cultures', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('image')->nullable();
            $table->longText('des')->nullable();
            $table->tinyInteger('status')->default(1)->comment('1=active, 0=inactive');
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
        Schema::dropIfExists('art_cultures');
    }
}

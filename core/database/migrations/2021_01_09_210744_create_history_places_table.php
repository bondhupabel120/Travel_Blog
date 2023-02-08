<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryPlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_places', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id')->nullable();
            $table->string('name')->nullable();
            $table->text('image')->nullable();
            $table->longText('des')->nullable();
            $table->integer('count')->default(0);
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
        Schema::dropIfExists('history_places');
    }
}

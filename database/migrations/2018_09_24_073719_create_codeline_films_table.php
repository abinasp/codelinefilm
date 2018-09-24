<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCodelineFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codeline_films', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable(false);
            $table->text('description')->nullable(false);
            $table->string('release_date')->nullable(false);
            $table->string('slug')->nullable(false);
            $table->enum('rating', [1,2,3,4,5])->nullable(false);
            $table->unsignedInteger('ticket_price')->nullable(false);
            $table->string('country')->nullable(false);
            $table->string('genre')->nullable(false);
            $table->string('photo')->nullable(false);
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('codeline_films');
    }
}

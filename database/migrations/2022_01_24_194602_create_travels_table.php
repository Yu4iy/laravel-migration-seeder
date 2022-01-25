<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trevels', function (Blueprint $table) {
			$table->id();

			$table->mediumInteger('price');
			$table->string('country', 50);
			$table->string('city', 50);
			$table->mediumText('description');
			$table->boolean('is_available')->default(1);

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
        Schema::dropIfExists('travels');
    }
}

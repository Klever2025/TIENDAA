<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
{
    Schema::create('producto', function (Blueprint $table) {
        $table->id();
        $table->string('nombre');
        $table->decimal('precio', 8, 2);
        $table->string('categoria'); // 👈 agregar este campo
        $table->integer('stock');
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
		Schema::dropIfExists('producto');
	}
};
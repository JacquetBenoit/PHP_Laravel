<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommandLigneTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('command_ligne', function(Blueprint $table)
		{
			$table->integer('id_ORDER_LIGNE', true);
			$table->integer('QUANTITY');
			$table->integer('id_PRODUCT')->index('id_PRODUCT');
			$table->integer('id_ORDER')->index('id_ORDER');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('command_ligne');
	}

}

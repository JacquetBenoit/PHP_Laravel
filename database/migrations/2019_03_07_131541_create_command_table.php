<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommandTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('command', function(Blueprint $table)
		{
			$table->integer('id_ORDER', true);
			$table->integer('id_CUSTOMER')->index('id_CUSTOMER');
			$table->integer('id_DELIVERY_ADDRESS')->index('id_DELIVERY_ADDRESS');
			$table->integer('id_INVOICE_ADDRESS')->index('id_INVOICE_ADDRESS');
			$table->dateTime('COMMAND_DATE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('command');
	}

}

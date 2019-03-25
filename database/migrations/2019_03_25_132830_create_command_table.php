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
			$table->integer('id_CUSTOMER')->default(10)->index('id_CUSTOMER');
			$table->integer('id_DELIVERY_ADDRESS')->default(1)->index('id_DELIVERY_ADDRESS');
			$table->integer('id_INVOICE_ADDRESS')->default(1)->index('id_INVOICE_ADDRESS');
			$table->dateTime('COMMAND_DATE');
			$table->date('LIVRAISON_DATE')->nullable();
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAddressTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('address', function(Blueprint $table)
		{
			$table->integer('id_ADDRESS', true);
			$table->string('STREET1', 45)->nullable();
			$table->string('STREET2', 45)->nullable();
			$table->integer('POSTCODE')->nullable();
			$table->string('TOWN', 45)->nullable();
			$table->string('COUNTRY', 45)->nullable();
			$table->integer('id_CUSTOMER')->index('id_CUSTOMER');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('address');
	}

}

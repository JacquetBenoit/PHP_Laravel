<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCommandTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('command', function(Blueprint $table)
		{
			$table->foreign('id_CUSTOMER', 'command_ibfk_1')->references('id_CUSTOMER')->on('customer')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_DELIVERY_ADDRESS', 'command_ibfk_2')->references('id_ADDRESS')->on('address')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_INVOICE_ADDRESS', 'command_ibfk_3')->references('id_ADDRESS')->on('address')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('command', function(Blueprint $table)
		{
			$table->dropForeign('command_ibfk_1');
			$table->dropForeign('command_ibfk_2');
			$table->dropForeign('command_ibfk_3');
		});
	}

}

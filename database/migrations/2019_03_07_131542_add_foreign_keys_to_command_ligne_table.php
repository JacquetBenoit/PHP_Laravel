<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCommandLigneTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('command_ligne', function(Blueprint $table)
		{
			$table->foreign('id_PRODUCT', 'command_ligne_ibfk_1')->references('id_PRODUCT')->on('products')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_ORDER', 'command_ligne_ibfk_2')->references('id_ORDER')->on('command')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('command_ligne', function(Blueprint $table)
		{
			$table->dropForeign('command_ligne_ibfk_1');
			$table->dropForeign('command_ligne_ibfk_2');
		});
	}

}

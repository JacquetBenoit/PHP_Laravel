<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->integer('id_PRODUCT', true);
			$table->string('NAME', 45);
			$table->string('DESCRIPTION', 100);
			$table->integer('PRICE');
			$table->integer('WEIGHT')->unsigned();
			$table->integer('STOCK');
			$table->integer('id_CATEGORY')->index('id_CATEGORY');
			$table->integer('id_PROMOTION')->nullable()->index('id_PROMOTION');
			$table->string('IMAGE', 300);
			$table->boolean('is_ACTIVE')->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}

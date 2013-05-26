<?php

class Create_Bands_Table {    

	public function up()
    {
		Schema::create('bands', function($table) {
			$table->engine = 'InnoDB';
			$table->increments('id');
			$table->string('email');
			$table->string('password');
		 	$table->string('name');
		 	$table->string('description')->nullable();
		 	$table->float('price');
		 	$table->string('logo')->nullable();

      $table->integer('status')->default(0);
      $table->integer('order_index')->nullable();

			$table->integer('play_count')->nullable();

			$table->timestamps();
			
			$table->unique('email');
	});

    }    

	public function down()
    {
		Schema::drop('bands');

    }

}
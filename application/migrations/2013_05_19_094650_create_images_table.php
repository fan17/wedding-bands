<?php

class Create_Images_Table {    

	public function up()
    {
		Schema::create('images', function($table) {
			$table->engine = 'InnoDB';
			$table->increments('id');
		 	$table->string('title')->nullable();
		 	$table->string('description')->nullable();

      $table->integer('status')->default(1);
      $table->integer('order_index')->nullable();
      $table->integer('id_band')->unsigned();

			$table->timestamps();
			
			$table->foreign('id_band')
				->references('id')
				->on('bands');
	});

    }    

	public function down()
    {
		Schema::drop('images');

    }

}
<?php

class Create_Musicians_Table {    

	public function up()
    {
		Schema::create('musicians', function($table) {
			$table->engine = 'InnoDB';
			$table->increments('id');
		 	$table->string('name');
		 	$table->string('description')->nullable();
		 	$table->string('pseudo')->nullable();
      $table->integer('status')->default(0);
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
		Schema::drop('musicians');

    }

}
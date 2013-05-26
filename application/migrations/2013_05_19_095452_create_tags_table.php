<?php

class Create_Tags_Table {    

	public function up()
    {
		Schema::create('tags', function($table) {
			$table->engine = 'InnoDB';
			$table->increments('id');
		 	$table->string('name');
      $table->integer('status')->default(1);
      $table->integer('id_set')->unsigned();

			$table->timestamps();
			
			$table->foreign('id_set')
				->references('id')
				->on('sets');
	});

    }    

	public function down()
    {
		Schema::drop('tags');

    }

}
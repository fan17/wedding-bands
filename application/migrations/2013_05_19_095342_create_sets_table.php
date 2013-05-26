<?php

class Create_Sets_Table {    

	public function up()
    {
		Schema::create('sets', function($table) {
			$table->engine = 'InnoDB';
			$table->increments('id');
		 	$table->string('name');
      $table->integer('status')->default(1);
			$table->timestamps();
		});

    }    

	public function down()
    {
		Schema::drop('sets');

    }

}
<?php

class Create_Comments_Table {    

	public function up()
    {
		Schema::create('comments', function($table) {
			$table->engine = 'InnoDB';
			$table->increments('id');
		 	$table->string('name');
		 	$table->string('comment');
      $table->integer('status')->default(0);
      $table->integer('rating');

      $table->integer('id_band')->unsigned();

			$table->timestamps();
			
			$table->foreign('id_band')
				->references('id')
				->on('bands');
	});

    }    

	public function down()
    {
		Schema::drop('comments');

    }

}
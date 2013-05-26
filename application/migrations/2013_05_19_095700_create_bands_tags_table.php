<?php

class Create_Bands_Tags_Table {    

	public function up()
    {
			Schema::create('bands_tags', function($table) {
			$table->engine = 'InnoDB';
			$table->increments('id');
      $table->integer('id_band')->unsigned();
      $table->integer('id_tag')->unsigned();

			$table->timestamps();
			
			$table->foreign('id_band')
				->references('id')
				->on('bands');

			$table->foreign('id_tag')
				->references('id')
				->on('tags');
		});

    }    

	public function down()
    {
		Schema::drop('tags');

    }

}
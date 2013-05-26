<?php

class Add_Src_To_From_Images_Table {    

	public function up()
    {
		Schema::table('images', function($table) {
			$table->string('src');
	});

    }    

	public function down()
    {
		Schema::table('images', function($table) {
			$table->drop_column('src');
	});

    }

}
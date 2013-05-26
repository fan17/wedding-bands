<?php

class Add_Key_To_Bands_Table {    

	public function up()
    {
		Schema::table('bands', function($table) {
			$table->string('key');
	});

    }    

	public function down()
    {
		Schema::table('bands', function($table) {
			$table->drop_column('key');
	});

    }

}
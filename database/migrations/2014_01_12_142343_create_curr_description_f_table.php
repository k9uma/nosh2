<?php

use Illuminate\Database\Migrations\Migration;

class CreateCurrdescriptionfTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('curr_description_f')) {
			Schema::create('curr_description_f', function($table) {
				$table->string('id', 18)->index();
				$table->char('effectivetime', 8)->index();
				$table->char('active', 1)->index();
				$table->string('moduleid', 18)->index();
				$table->string('conceptid', 18)->index();
				$table->string('languagecode', 2)->index();
				$table->string('typeid', 18)->index();
				$table->string('term', 255)->index();
				$table->string('casesignificanceid', 18)->index();
			});
		}
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('curr_description_f');
    }

}

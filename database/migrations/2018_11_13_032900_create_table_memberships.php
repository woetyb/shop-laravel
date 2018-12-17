<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMemberships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('memberships', function(Blueprint $table) {
			$table->increments('id');
			$table->string('name', 50);
			$table->tinyInteger('deleted')->default(0);
			$table->string('created_by', 20)->default('System');
			$table->string('updated_by', 20)->default('System');
			$table->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::dropIfExists('memberships');
    }
}

<?php

use App\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddCategoriesTable extends Migration
{
    public function up()
    {
        $this->schema->create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('type');
            $table->string('slug');
            $table->string('image');
            $table->timestamps();
        });
    }

    public function down()
    {
        $this->schema->drop('categories');

    }
}

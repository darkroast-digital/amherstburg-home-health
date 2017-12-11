<?php

use App\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddTypesTable extends Migration
{
    public function up()
    {
        $this->schema->create('types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('image');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        $this->schema->drop('types');
    }
}

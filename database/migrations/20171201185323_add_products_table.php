<?php

use App\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddProductsTable extends Migration
{
    public function up()
    {
        $this->schema->create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('image');
            $table->text('description');
            $table->string('manufacturer');
            $table->text('features');
            $table->text('specifications');
            $table->string('link');
            $table->string('category');
            $table->timestamps();
        });

    }

    public function down()
    {
        $this->schema->drop('products');
    }
}

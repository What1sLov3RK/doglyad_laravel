<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->string('title', 255);
            $table->string('description', 255);
            $table->string('img', 255);
            $table->integer('price');
        });

        DB::table('products')->insert([
            [
              'title' => 'ECO Засіб',
              'category_id' => 1,
              'description' => 'Товар для прання',
              'img' => 'images/goods2.jpg',
              'price' => 200
            ],
            [
                'title' => 'ECO Засіб',
                'category_id' => 2,
                'description' => 'Товар для миття',
                'img' => 'images/goods3.jpg',
                'price' => 300
            ],
            [
                'title' => 'ECO Засіб',
                'category_id' => 3,
                'description' => 'Товар для прибирання',
                'img' => 'images/goods4.jpg',
                'price' => 400
            ],
            [
                'title' => 'ECO Засіб',
                'category_id' => 3,
                'description' => 'Товар для прибирання',
                'img' => 'images/goods3.jpg',
                'price' => 500
            ],
            [
                'title' => 'ECO Засіб',
                'category_id' => 4,
                'description' => 'Товар для дому',
                'img' => 'images/goods2.jpg',
                'price' => 800
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

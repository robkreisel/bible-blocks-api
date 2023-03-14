<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('symbol')->unique();
            $table->enum('testament', ['old', 'new']);
            $table->enum('category', ['history', 'writing', 'prophecy', 'paulsLetter', 'generalLetter']);
            $table->string('year');
            $table->enum('era', ['creation', 'patriarch', 'exodus', 'conquest', 'judges', 'kingdom', 'exile',
                'return', 'silence', 'gospel', 'church', 'mission']);
            $table->string('author');
            $table->integer('order');
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
        Schema::dropIfExists('books');
    }
};

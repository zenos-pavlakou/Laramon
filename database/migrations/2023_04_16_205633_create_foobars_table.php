<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasCollection('foobars')) {
            Schema::create('foobars', function (Blueprint $table) {
                $table->id();
                $table->timestamps();
                $table->string("string_val");
                $table->integer("int_val");
                $table->boolean("bool_val");
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
        Schema::dropIfExists('foobars');
    }
};
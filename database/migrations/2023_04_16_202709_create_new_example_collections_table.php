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
        if (!Schema::hasCollection('new_example_collections')) {
            Schema::create('new_example_collections', function (Blueprint $table) {
                $table->id();
                $table->timestamps();
                $table->integer("value_user_1");
                $table->string("value_2");
                $table->string("value_3");
                $table->string("value_4");
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
        Schema::dropIfExists('new_example_collections');
    }
};
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
        if (!Schema::hasCollection('user_info_change_requests')) {
            Schema::create('user_info_change_requests', function (Blueprint $table) {
                $table->id();
                $table->timestamps();
                $table->integer("user_id");
                $table->string("email_address");
                $table->string("home_address");
                $table->string("status");
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
        Schema::dropIfExists('user_info_change_requests');
    }
};

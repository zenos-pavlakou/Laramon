<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Migrations\Migration;

class CreateUsersCollection extends Migration
{
    public function up()
    {
        // DB::connection('mongodb')->createCollection('users');
    }

    public function down()
    {
        // DB::connection('mongodb')->dropCollection('users');
    }
}


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
        if (!Schema::hasCollection('electronic_devices')) {

            DB::connection('mongodb')->getMongoDB()->createCollection('electronic_devices', [
                'validator' => [
                    '$jsonSchema' => [
                        'bsonType' => 'object',
                        'required' => ['name', 'make'],
                        'properties' => [
                            'name' => [
                                'bsonType' => 'string',
                                'description' => 'required field'
                            ],
                            'make' => [
                                'bsonType' => 'string',
                                'description' => 'required field'
                            ],
                            'price' => [
                                'bsonType' => 'int',
                                'minimum' => 18,
                                'description' => 'optional field'
                            ]
                        ]
                    ]
                ]
            ]);

        }
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('electronic_devices');
    }
};
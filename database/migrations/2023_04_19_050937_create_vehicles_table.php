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
        if (!Schema::hasCollection('vehicles')) {

            DB::connection('mongodb')->getMongoDB()->createCollection('vehicles', [
                'validator' => [
                    '$jsonSchema' => [
                        'bsonType' => 'object',
                        'required' => ['field_1', 'field_2'],
                        'properties' => [
                            'field_1' => [
                                'bsonType' => 'string',
                                'description' => 'required field'
                            ],
                            'field_2' => [
                                'bsonType' => 'string',
                                'description' => 'required field'
                            ],
                            'field_3' => [
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
        Schema::dropIfExists('vehicles');
    }
};
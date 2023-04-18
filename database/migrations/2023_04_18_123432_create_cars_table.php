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
        if (!Schema::hasCollection('cars')) {
            Schema::create('cars', function (Blueprint $table) {
                $table->id();
                $table->timestamps();
            });

            //Uncomment the code below to add validation rules. If you uncomment this code below,
            //make sure to comment out the Schema::create function. 
            /*DB::connection('mongodb')->getMongoDB()->createCollection('cars', [
                'validator' => [
                    '$jsonSchema' => [
                        'bsonType' => 'object',
                        'required' => ['name', 'email'],
                        'properties' => [
                            'name' => [
                                'bsonType' => 'string',
                                'description' => 'required field'
                            ],
                            'email' => [
                                'bsonType' => 'string',
                                'description' => 'required field'
                            ],
                            'age' => [
                                'bsonType' => 'int',
                                'minimum' => 18,
                                'description' => 'optional field'
                            ]
                        ]
                    ]
                ]
            ]);*/
        }
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cars');
    }
};
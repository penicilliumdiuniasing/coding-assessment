<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EventsMigration extends Migration
{    
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         /*
        - `Event` will have these properties
        - **id** -> PK, UNIQUE, value must be a UUID
        - **name** -> String
        - **slug** -> UNIQUE, String
        - **createdAt** -> NOT NULL, DateTime
        - **updatedAt** -> NOT NULL, DateTime

            */
        
        Schema::create('events', function (Blueprint $table) {
            $table->uuid('id')->unique();
            $table->string('name', 50)->nullable();
            $table->string('slug', 50)->unique()->nullable();

            $table->timestamps();

            $table->primary('id');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
};
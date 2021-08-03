<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('salutation');
            $table->string('first_name');
            $table->string('middle_name')->nullable;
            $table->string('last_name');
            $table->timestamp('dob');
            $table->string('address');
            $table->string('city');
            $table->string('postcode');
            $table->string('telephone');
            $table->string('email')->unique;
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
        Schema::dropIfExists('contacts');
    }
}

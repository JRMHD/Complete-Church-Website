<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrayerRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('prayer_requests', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone');
            $table->string('location');
            $table->string('whom');
            $table->text('prayer');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('prayer_requests');
    }
}

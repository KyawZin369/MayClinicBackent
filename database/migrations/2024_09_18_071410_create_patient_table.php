<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string("petname");
            $table->string("status");
            $table->string("pawrent");
            $table->string("breed");
            $table->string("gender");
            $table->date("date_of_birth");
            $table->string("contact");
            $table->text("address");
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('patients');
    }
};

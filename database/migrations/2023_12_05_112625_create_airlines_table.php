<?php

use App\Models\Airline;
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
        Schema::create('airlines', function (Blueprint $table) {
            $table->id("airline_id");
            $table->string("name");
            $table->string("country");
            $table->timestamps();
        });

        Airline::create(["name" => "WizAir", "country" => "Hungary"]);
        Airline::create(["name" => "Rainar", "country" => "Vienna"]);
        Airline::create(["name" => "Air France", "country" => "France"]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airlines');
    }
};

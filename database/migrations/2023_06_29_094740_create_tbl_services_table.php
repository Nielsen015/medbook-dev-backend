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
        Schema::create('tbl_services', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('patient_id');
            $table->string('service_name');
            $table->foreign('patient_id')->references('id')->on('tbl_patient')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_services');
    }
};

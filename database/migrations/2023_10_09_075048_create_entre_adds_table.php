<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('entre_adds', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('entre_id');
            $table->string('jobPosition');
            $table->string('jobPositionThai');
            $table->string('subject');
            $table->string('topic');
            $table->string('chapter');
            $table->string('check_type');
            $table->text('jobDescription');
            $table->timestamps();
        });

        Schema::table('entre_adds', function (Blueprint $table) {
            $table->foreign('entre_id')->references('id')->on('entrepreneurs')->onDelete('cascade');
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entre_adds');
    }
};
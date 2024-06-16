<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('job_applications', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('entre_id'); // เปลี่ยนเป็น unsignedBigInteger
        $table->foreign('entre_id')->references('id')->on('entre_adds');
        $table->string('name');
        $table->string('residence');
        $table->string('nationality');
        $table->string('education_level');
        $table->string('email');
        $table->string('phone_number');
        $table->string('image_path')->nullable();
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_applications');
    }
};
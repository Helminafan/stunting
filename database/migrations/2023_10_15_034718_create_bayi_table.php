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
        Schema::create('bayi', function (Blueprint $table) {
            $table->id();
            $table->string('nikBayi');
            $table->string('namaBayi');
            $table->date('tglLahirBayi');
            $table->string('tglLahirBayi');
            $table->string('jenisKelamin');
            $table->unsignedBigInteger('ibu_id');
            $table->foreign('ibu_id')->references('id')->on('ibu')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bayi');
    }
};

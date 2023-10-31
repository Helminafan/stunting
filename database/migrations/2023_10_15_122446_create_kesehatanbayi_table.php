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
        Schema::create('kesehatanbayi', function (Blueprint $table) {
            $table->id();
            $table->integer('usiaBayi');
            $table->float('tinggiBadanBayi', 8, 2);
            $table->float('beratBadanBayi', 8, 2);
            $table->text('keterangan')->nullable();
            $table->string('status');
            $table->text('hasil');
            $table->unsignedBigInteger('bayi_id');
            $table->foreign('bayi_id')->references('id')->on('bayi')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kesehatanbayi');
    }
};

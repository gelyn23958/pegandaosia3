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
        Schema::create('reading', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("admin_id");
            $table->string("customername");
            $table->date("readingdate");
            $table->integer("previous_reading");
            $table->integer("current_reading");
            $table->integer("usage_amount");
            $table->foreign("admin_id")->references("id")->on("admin")->onUpdate("cascade")->onDelete("cascade");



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reading');
    }
};

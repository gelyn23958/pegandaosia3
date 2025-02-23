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
        Schema::create('bill', function (Blueprint $table) {
            $table->id();
        
            $table->unsignedBigInteger("reading_id");

            $table->string("customerName");
            $table->date("due_date");
            $table->decimal("amount");
            $table->enum("status",["paid","unpaid"]);
            $table->foreign("reading_id")->references("id")->on("reading")->onUpdate("cascade");



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bill');
    }
};

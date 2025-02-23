<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payment', function (Blueprint $table) {
            $table->id();
            $table->string("customer");
            $table->unsignedBigInteger("bill_id");
            $table->date("dateofPayment");
            $table->string("paymentmethod");
            $table->string("customerName");
            $table->decimal("totalPayment");
            $table->foreign("bill_id")->references("id")->on("bill")->onUpdate("cascade");







            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment');
    }
};

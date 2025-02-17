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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('registration_id')->constrained()->onDelete('cascade');
            $table->decimal('amount', 10, 2);
            $table->string('payment_method'); // e.g., "M-Pesa", "Bank Transfer", "Offline"
            $table->string('status')->default('pending'); // e.g., "pending", "completed", "failed"

            // Fields for M-Pesa payments
            $table->string('mpesa_phone_number')->nullable();
            $table->string('mpesa_transaction_code')->nullable();

            // Fields for Bank Transfers
            $table->string('bank_name')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->string('bank_transaction_code')->nullable();

            // Fields for Offline Payments
            $table->string('offline_receipt_number')->nullable();
            $table->date('offline_payment_date')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};

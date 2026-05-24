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
        Schema::create('job_orders', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('jo_number')->unique(); // e.g., JO-2026-7701
            $table->string('client_tier')->default('standard'); // standard, vip
            $table->integer('total_units_required');
            $table->integer('setup_overhead_minutes');
            $table->jsonb('routing_sequence'); // Array blueprint of machine ids
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_orders');
    }
};

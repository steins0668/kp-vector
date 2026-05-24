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
        Schema::create('queue_schedules', function (Blueprint $table) {
            $table->uuid('id')->primary();

            // Foreign Keys linking to our core assets
            $table->foreignUuid('machine_id')->constrained('machines')->onDelete('cascade');
            $table->foreignUuid('job_order_id')->constrained('job_orders')->onDelete('cascade');

            // Engine Control Fields
            $table->integer('queue_order'); // Floating pointer index (1, 2, 3...)
            $table->string('status')->default('pending'); // processing, pending, halted, blocked

            // Scheduling Timeline Stamps
            $table->timestamp('scheduled_start');
            $table->timestamp('scheduled_end');
            $table->timestamp('actual_start')->nullable();
            $table->timestamps();

            // Safety Index to speed up queue lookups during cascading calculations
            $table->index(['machine_id', 'queue_order']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('queue_schedules');
    }
};

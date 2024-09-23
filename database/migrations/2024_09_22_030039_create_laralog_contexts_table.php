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
        Schema::create('laralog_contexts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('laralog_id')->nullable()->constrained('laralogs')->onDelete('cascade');
            $table->json('request_data')->nullable();
            $table->json('session_data')->nullable();
            $table->string('client_ip', 255)->nullable();
            $table->string('user_agent', 1024)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laralog_contexts');
    }
};

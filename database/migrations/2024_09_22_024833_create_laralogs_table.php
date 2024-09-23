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
        Schema::create('laralogs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->nullable()->constrained('clients')->onDelete('cascade');
            $table->foreignId('client_app_id')->nullable()->constrained('client_apps')->onDelete('cascade');
            $table->foreignId('category_id')->constrained('laralog_categories')->onDelete('cascade');
            $table->text('message');
            $table->longText('stack_trace')->nullable();
            $table->string('error_code', 255)->nullable();
            $table->enum('severity', ['INFO', 'WARNING', 'ERROR', 'CRITICAL'])->default('ERROR');
            $table->timestamp('resolved_at')->nullable();
            $table->foreignId('resolved_by')->nullable()->constrained('users')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laralogs');
    }
};

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
        Schema::create('client_apps', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->nullable()->constrained('clients')->onDelete('cascade');
            $table->string('hostname')->nullable();
            $table->enum('environment', ['development', 'staging', 'production'])->default('production');
            $table->string('application_version')->nullable();
            $table->string('language_version')->nullable();
            $table->string('framework_version')->nullable();
            $table->string('os_details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_apps');
    }
};

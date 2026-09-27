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
        Schema::create('model_extension_packages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('extension_package_id')->constrained()->cascadeOnDelete();
            $table->unsignedInteger('quantity');
            $table->decimal('amount', 13, 2);
            $table->datetime('started_at');
            $table->datetime('ended_at');
            $table->timestamps();
            $table->morphs('model');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('model_extension_packages');
    }
};

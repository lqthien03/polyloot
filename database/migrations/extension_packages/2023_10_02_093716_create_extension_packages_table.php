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
        Schema::create('extension_packages', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('package_type');
            $table->unsignedInteger('from_quantity');
            $table->unsignedInteger('to_quantity')->nullable();
            $table->decimal('price_per_listing', 13, 2);
            $table->timestamps();
            $table->softDeletes();

            $table->index(['package_type']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('extension_packages');
    }
};

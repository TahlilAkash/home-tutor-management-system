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
        Schema::create('apply_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('members')->restrictOnDelete();
            $table->foreignId('tuition_post_id')->constrained('tuition_posts')->restrictOnDelete();
            $table->string('status')->default('pending');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apply_posts');
    }
};

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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('role');
            $table->string('image')->nullable();
            $table->string('email')->unique();
           
            // $table->string('contact');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            
            
            // for ssl need two column // it is attached with Buy premium controller
            
            $table->string('member_subscription')->nullable();
            $table->string('tran_id')->nullable()->unique();
            // $table->integer('limit')->nullable();
            $table->string('amount')->nullable();
            
            $table->string('status')->nullable();





        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};

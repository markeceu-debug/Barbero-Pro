<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            
            $table->boolean('is_platform_admin')->default(false);
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            
            $table->index('is_platform_admin');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
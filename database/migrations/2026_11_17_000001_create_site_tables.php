<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('subscribers', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->timestamps();
        });

        Schema::create('contact_submissions', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('organisation')->nullable();
            $table->string('subject');
            $table->text('message');
            $table->string('ip_address', 45)->nullable();
            $table->timestamps();
        });

        Schema::create('news_items', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('publication');
            $table->string('url')->unique();
            $table->text('excerpt')->nullable();
            $table->string('category')->default('Press');
            $table->date('published_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('news_items');
        Schema::dropIfExists('contact_submissions');
        Schema::dropIfExists('subscribers');
    }
};

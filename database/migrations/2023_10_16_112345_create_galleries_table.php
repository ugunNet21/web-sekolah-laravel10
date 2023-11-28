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
        Schema::create('galleries', function (Blueprint $table) {
            $table->id(); // Ini tipe data INT (sesuai default Laravel)
            $table->string('title');
            $table->text('description');
            $table->string('category');
            $table->string('image', 255)->nullable();
            $table->unsignedInteger('uploader_id')->nullable(); // Tipe data harus sesuai dengan tipe data di tabel 'users'
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('uploaded_at')->nullable();
            $table->integer('status')->default(1);

            // $table->foreign('uploader_id')->references('id')->on('users')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('galleries');
    }
};

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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            // Campo 'user_id' que almacena la identificación del usuario asociado a la publicación
            $table->unsignedBigInteger('user_id');
            // Establece una clave foránea en 'user_id' que se vincula al campo 'id' en la tabla 'users'
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            // Campo 'body' que almacena el contenido textual de cualquier publicación
            $table->text('body');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};

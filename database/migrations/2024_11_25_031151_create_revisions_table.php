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
        Schema::create('revisions', function (Blueprint $table) {
            $table->id();

            //Relación con tabla Docente(professors)
            $table->foreignId('portfolio_id')
                ->constrained()
                ->onDelete('cascade')
                ->onUpdate('cascade')
                ->nullable();
            $table->string('content')->nullable();
            $table->boolean('accepted')->default(false);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('revisions');
    }
};

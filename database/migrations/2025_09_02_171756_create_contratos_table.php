<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('contratos', function (Blueprint $table) {
        $table->id();
        $table->string('solicitante');
        $table->date('data_atualizacao');
        $table->date('recebimento');
        $table->date('data_lai');
        $table->text('publicacao');
        $table->foreignId('categoria_id')->constrained()->onDelete('cascade');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contratos');
    }
};

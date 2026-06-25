<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('vendas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('cliente_id')->constrained('clientes');
            $table->foreignId('produto_id')->constrained('produtos');
            $table->integer('quantidade')->default(1);
            $table->decimal('valor_total', 10, 2)->default(0.00);
            $table->date('data_venda');
            $table->text('observacoes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vendas');
    }
};

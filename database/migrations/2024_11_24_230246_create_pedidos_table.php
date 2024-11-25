<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('pedido');
            $table->string('reference')->nullable();
            $table->string('description')->nullable();
            $table->bigInteger('comercio_id');
            $table->bigInteger('user_id');
            $table->decimal('coste', 12, 2);
            $table->string('currency')->default('1'); // 1 bs 2 $
            $table->string('in_delivery')->default('0');
            $table->boolean('confirmed')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pedidos');
    }
}

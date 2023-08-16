<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('tiendas', function (Blueprint $tiendas) {
            $tiendas->increments('id');
            $tiendas->string('nombre',50);

        });

        Schema::create('categoria_productos', function (Blueprint $categoria_productos) {
            $categoria_productos->increments('id');
            $categoria_productos->string('nombre',60);

        });

        Schema::create('proveedors', function (Blueprint $proveedors) {
            $proveedors->increments('id');
            $proveedors->string('nombre',100);
            $proveedors->text('direccion');

        });

        Schema::create('medidas', function (Blueprint $medida) {
            $medida->increments('id');
            $medida->string('nombre',20);
        });

        Schema::create('productos', function (Blueprint $productos) {
            $productos->bigInteger('codigo');
            $productos->primary('codigo');
            $productos->string('nombre',200);
            $productos->integer('id_proveedors')->nullable();
            $productos->integer('id_categoria')->nullable();
            $productos->integer('stock')->nullable();
            $productos->integer('id_medida')->nullable();
            $productos->longText('descripcion')->nullable();
            $productos->mediumText('imagen')->nullable();

            $productos->foreign('id_proveedors')
            ->references('id')->on('proveedors')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $productos->foreign('id_categoria')
            ->references('id')->on('categoria_productos')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $productos->foreign('id_medida')
            ->references('id')->on('medidas')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tiendas');
        Schema::dropIfExists('categoria_productos');
        Schema::dropIfExists('proveedors');
        Schema::dropIfExists('medidas');
        Schema::dropIfExists('productos');
    }
};

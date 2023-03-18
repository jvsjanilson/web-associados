<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anuidades', function (Blueprint $table) {
            $table->id();
            $table->string('ano', 4);
            $table->decimal('valor',10,2);
            $table->unsignedBigInteger('associado_id');
            $table->foreign('associado_id')->references('id')->on('associados');
            $table->boolean('pago')->default(0);
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
        Schema::dropIfExists('anuidades');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKasumumTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kasumum', function (Blueprint $table) {
            $table->integer('id_kasumum')->autoIncrement();
            $table->integer('id_akun');
            $table->date('tanggal');
            $table->decimal('kredit', 12, 2);
            $table->decimal('debit', 12, 2);
            $table->decimal('saldo', 12, 2);
            $table->string('keterangan');
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
        Schema::dropIfExists('kasumum');
    }
}

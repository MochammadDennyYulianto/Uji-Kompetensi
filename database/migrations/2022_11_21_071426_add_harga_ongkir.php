<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHargaOngkir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::table('orders',function (Blueprint $table){
        $table->decimal('harga_ongkir');
        $table->bigInteger('id_kurir');
        $table->foreign('id_kurir')->reference('id')->on('expeditions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::table('orders',function (Blueprint $table){
        $table->decimal('harga_ongkir');
        $table->bigInteger('id_kurir');
        $table->foreign('id_kurir')->reference('id')->on('expeditions')->onDelete('cascade');
        });
    }
}

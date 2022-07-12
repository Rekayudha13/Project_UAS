<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePemainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pemains', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->integer('umur');
            $table->integer('tinggi');
            $table->integer('berat');
            $table->integer('ukuran_sepatu');
            $table->text('alamat');
            $table->foreignId('posisi_id')->constrained('posisis');
            $table->foreignId('status_id')->constrained('statuses');
            $table->foreignId('staf_id')->constrained('stafs');
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
        Schema::dropIfExists('pemains');
    }
}

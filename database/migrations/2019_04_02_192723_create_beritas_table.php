<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeritasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beritas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('gunung_id');
            $table->integer('pengunjung_id')->nullable();
            $table->string('judul');
            $table->text('text_pembuka')->nullable();
            $table->text('berita');
            $table->text('lampiran')->nullable();
            $table->enum('publish', ['Public', 'Private', 'Pengajuan'])->default('Pengajuan');
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
        Schema::dropIfExists('beritas');
    }
}

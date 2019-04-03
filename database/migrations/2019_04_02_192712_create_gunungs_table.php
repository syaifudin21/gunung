<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGunungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gunungs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama');
            $table->string('alamat');
            $table->string('thumbnail');
            $table->text('deskripsi');
            $table->enum('status', ['Aktif Normal', 'Waspada ', 'Siaga', 'Awas', 'Non Aktif'])->default('Aktif Normal');
            $table->enum('publish', ['Public', 'Private'])->default('Private');
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
        Schema::dropIfExists('gunungs');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomplainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komplain', function (Blueprint $table) {
            $table->id();
            $table->string('komplain');
            $table->string('keterangan');
            $table->boolean('status_proses')->default(false);
            $table->foreignId('operator_id')->nullable()->constrained('operator');
            // $table->json('respon_keluhan')->nullable();
            $table->text('respon_keluhan')->nullable();
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
        Schema::dropIfExists('komplain');
    }
}

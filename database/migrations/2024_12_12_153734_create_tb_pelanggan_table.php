<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPelangganTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tb_pelanggan', function (Blueprint $table) {
            $table->integer('pel_id')->autoIncrement(); 
            $table->tinyInteger('pel_id_gol'); 
            $table->string('pel_no', 20); 
            $table->string('pel_nama', 50); 
            $table->text('pel_alamat'); 
            $table->string('pel_hp', 20); 
            $table->string('pel_ktp', 50); 
            $table->string('pel_seri', 50); 
            $table->integer('pel_meteran'); 
            $table->enum('pel_aktif', ['Y', 'N']); 
            $table->integer('pel_id_user'); 
            $table->timestamp('created_at')->nullable(); 
            $table->dateTime('updated_at')->nullable(); 

            
            $table->foreign('pel_id_gol')->references('gol_id')->on('tb_golongan')->onDelete('cascade');
            $table->foreign('pel_id_user')->references('user_id')->on('tb_users')->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('tb_pelanggan');
    }
}

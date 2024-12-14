<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbUsersTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('tb_users', function (Blueprint $table) {
            $table->integer('user_id')->autoIncrement(); 
            $table->string('user_email', 50)->unique(); 
            $table->string('user_password', 100); 
            $table->string('user_nama', 100); 
            $table->text('user_alamat'); 
            $table->string('user_hp', 25); 
            $table->string('user_pos', 5); 
            $table->tinyInteger('user_role'); 
            $table->tinyInteger('user_aktif'); 
            $table->timestamp('created_at')->nullable(); 
            $table->dateTime('updated_at')->nullable(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('tb_users');
    }
}

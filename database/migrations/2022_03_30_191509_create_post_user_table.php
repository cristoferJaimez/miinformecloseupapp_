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
        Schema::create('post_user', function (Blueprint $table) {
            $table->id();
            $table->string('stated');
            $table->timestamps();

            //relation 1:*
            
            $table->foreingId('fk_users')
            ->nullable()
            ->constrained('users')
            ->cascadaOnUpdate()
            ->nullOnDelete();

            $table->foreingId('fk_post')
            ->nullable()
            ->constrained('post')
            ->cascadaOnUpdate()
            ->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('post_user');
    }
};

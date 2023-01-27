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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('membership_type');
            $table->date('membership_expiration');
            $table->unsignedBigInteger('trainer_id')->nullable();
            $table->unsignedBigInteger('membership_id')->nullable();
            $table->timestamps();

            $table->foreign('trainer_id')->references('id')->on('trainers')->onDelete('set null');
            $table->foreign('membership_id')->references('id')->on('memberships')->onDelete('set null');
        });
    }

    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
};
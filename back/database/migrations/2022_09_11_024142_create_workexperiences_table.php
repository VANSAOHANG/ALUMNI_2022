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
        Schema::create('workexperiences', function (Blueprint $table) {
            $table->id();
            $table->date('start_year');
            $table->date('end_year');
            $table->string('position');
            $table->foreignId('alumni_id')->constrained()->onDelete('CASCADE');
            $table->foreignId('company_id')->constrained()->onDelete('CASCADE');
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
        Schema::dropIfExists('workexperiences');
    }
};

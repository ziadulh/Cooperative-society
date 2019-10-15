<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddmembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addmembers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('email');
            $table->string('phone');
            $table->string('membershipType');
            $table->float('tAmount');
            $table->float('gAmount');
            $table->float('rAmount');
            $table->decimal('tInstallment');
            $table->decimal('gInstallment');
            $table->decimal('rInstallment');
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
        Schema::dropIfExists('addmembers');
    }
}

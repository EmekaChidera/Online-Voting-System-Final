<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNominationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nomination', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('gender');
            $table->string('linked_url')->nullable();
            $table->string('bio')->nullable();
            $table->string('business_name')->nullable();
            $table->string('reason_for_nominations');
            $table->boolean('Is_admin_selected')->default(0);
            $table->integer('no_of_nominations');
            $table->boolean('Is_won')->default(0);
            $table->integer('user_d');
            $table->integer('category_id');
            $table->softDeletes();

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
        Schema::dropIfExists('nomination');
    }
}

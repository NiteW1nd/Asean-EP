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
        Schema::create('answers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gender');
            $table->integer('country');
            $table->integer('age');
            $table->string('business-type');
            $table->string('business-field');
            $table->text('quest1');
            $table->text('quest2');
            $table->text('quest3');
            $table->text('quest4');
            $table->text('quest5');
            $table->text('quest6');
            $table->text('quest7');
            $table->text('quest8');
            $table->text('quest9');
            $table->text('quest10');
            $table->text('quest11');
            $table->text('quest12');
            $table->text('quest13');
            $table->text('quest14');
            $table->text('quest15');
            $table->text('quest16');
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
        Schema::dropIfExists('answers');
    }
};

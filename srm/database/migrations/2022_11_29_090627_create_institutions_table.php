<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutions', function (Blueprint $table) {
            $table->id();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('image4')->nullable();
            $table->string('image5')->nullable();
            $table->text('image1comment')->nullable();
            $table->text('image2comment')->nullable();
            $table->text('image3comment')->nullable();
            $table->text('image4comment')->nullable();
            $table->text('image5comment')->nullable();
            $table->string('theta')->nullable();
            $table->string('madoriimage1')->nullable();
            $table->text('floornumber')->nullable();
            $table->string('status1')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->text('comment1')->nullable();
            $table->text('service')->nullable();
            $table->text('hikiwatashi')->nullable();
            $table->string('madori')->nullable();
            $table->string('type')->nullable();
            $table->string('roomnumber')->nullable();
            $table->string('direction')->nullable();
            $table->string('areasize')->nullable();
            $table->string('peopleimage')->nullable();
            $table->string('ispetok')->nullable();
            $table->integer('price1')->nullable();
            $table->integer('price2')->nullable();
            $table->string('writedate')->nullable();
            $table->integer('price1manage')->nullable();
            $table->integer('price1food')->nullable();
            $table->integer('price2manage')->nullable();
            $table->integer('price2food')->nullable();
            $table->string('sheetformat')->nullable();
            $table->string('reformstatus')->nullable();
            $table->integer('floortotalnumber')->nullable();
            $table->integer('price1_80')->nullable();
            $table->integer('price2_80')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('institutions');
    }
}

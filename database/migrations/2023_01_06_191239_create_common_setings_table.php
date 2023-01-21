<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommonSetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('common_setings', function (Blueprint $table) {
            $table->id();
            $table->string('meta_title');
            $table->text('meta_content');
            $table->text('meta_keywords');
            $table->longText('header_kod');
            $table->longText('footer_kod');
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
        Schema::dropIfExists('common_setings');
    }
}

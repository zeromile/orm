<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('card_id')->unsigned()->index();
            $table->text('body');
            $table->timestamps();
        });

        DB::table('notes')->insert(array(
            array('body'=> 'This is the first note','card_id'=>1),
            array('body'=> 'This is the second note','card_id'=>2),
            array('body'=> 'This is the third note','card_id'=>3),
            array('body'=> 'This is the fourth note','card_id'=>4)
        ));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('notes');
    }
}

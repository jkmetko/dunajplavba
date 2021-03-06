<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('location');
            $table->string('state');
            $table->date('date');
            $table->time('time_from');
            $table->time('time_to');
            $table->text('description');
            $table->text('age_group');
            $table->boolean('active')->default(0);
            $table->boolean('our_event')->default(0);

            $table->integer('user_id')->nullable()->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('attendee_type_id')->nullable()->unsigned();
            $table->foreign('attendee_type_id')->references('id')->on('attendee_types')->onDelete('cascade');

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
        Schema::table('events', function (Blueprint $table) {
            $table->dropForeign('events_user_id_foreign');
            $table->dropForeign('events_attendee_type_id_foreign');
        });

        Schema::drop('events');
    }
}

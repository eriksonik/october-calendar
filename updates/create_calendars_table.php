<?php namespace Eriks\GoogleCalendar\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateCalendarsTable extends Migration
{

    public function up()
    {
        Schema::create('eriks_googlecalendar_calendars', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('key');
            $table->string('events');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('eriks_googlecalendar_calendars');
    }

}

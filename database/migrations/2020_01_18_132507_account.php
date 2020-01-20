<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Account extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('accounts', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->char('user_name',50);
      $table->integer('follow_count');
      $table->integer('followers');
      $table->text('prof_image');
      $table->char('dog_name1',50);
      $table->char('dog_name2',50);
      $table->char('dog_name3',50);
      $table->char('dog_name4',50);
      $table->char('dog_name5',50);
      $table->integer('dog_age1');
      $table->integer('dog_age2');
      $table->integer('dog_age3');
      $table->integer('dog_age4');
      $table->integer('dog_age5');
      $table->char('dog_sex1',10);
      $table->char('dog_sex2',10);
      $table->char('dog_sex3',10);
      $table->char('dog_sex4',10);
      $table->char('dog_sex5',10);
      $table->text('comment');
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
        //
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->string('leader_name')->nullable();
            $table->string('leader_address')->nullable();
            $table->string('leader_email')->nullable();
            $table->string('leader_birthplace')->nullable();
            $table->string('leader_birthdate')->nullable();
            $table->string('leader_number')->nullable();
            $table->string('leader_line')->nullable();
            $table->string('leader_github')->nullable();
            $table->string('leader_cv')->nullable();
            $table->string('leader_project')->nullable();
            $table->string('member1_name')->nullable();
            $table->string('member1_address')->nullable();
            $table->string('member1_email')->nullable();
            $table->string('member1_birthplace')->nullable();
            $table->string('member1_birthdate')->nullable();
            $table->string('member1_number')->nullable();
            $table->string('member1_line')->nullable();
            $table->string('member1_github')->nullable();
            $table->string('member1_cv')->nullable();
            $table->string('member1_project')->nullable(); 
            $table->string('member2_name')->nullable();
            $table->string('member2_address')->nullable();
            $table->string('member2_email')->nullable();
            $table->string('member2_birthplace')->nullable();
            $table->string('member2_birthdate')->nullable();
            $table->string('member2_number')->nullable();
            $table->string('member2_line')->nullable();
            $table->string('member2_github')->nullable();
            $table->string('member2_cv')->nullable();
            $table->string('member2_project')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('payment_image')->nullable();
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
        Schema::dropIfExists('users');
    }
}

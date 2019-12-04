<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('employee_designation_id');
            $table->string('name');
            $table->date('birthday');
            $table->string('gender');
            $table->string('email',50);
            $table->string('phone',20);
            $table->text('addres');
            $table->date('join');
            $table->date('quit')->nullable();
            $table->decimal('salary_amount',8,2);
            $table->string('photo',50);

            $table->foreign('employee_designation_id')->references('id')->on('designations')->onDelete('cascade');

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
        Schema::dropIfExists('employees');
    }
}

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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->integer('job_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->integer('year');
            $table->userstamps();
            $table->unsignedBigInteger( column: 'created_by')->nullable();
            $table->foreign( columns: 'created_by')->references( columns: 'id')->on( table: 'candidates');            $table->timestamps();
            $table->unsignedBigInteger( column: 'updated_by')->nullable();
            $table->foreign( columns: 'updated_by')->references( columns: 'id')->on( table: 'candidates');
            $table->unsignedBigInteger( column: 'deleted_by')->nullable();
            $table->foreign( columns: 'deleted_by')->references( columns: 'id')->on( table: 'candidates');
            $table->softDeletes();
            $table->foreignId('job_id')->constrained('jobs')->onDelete('cascade')->onUpdate('cascade');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidates');
    }
};

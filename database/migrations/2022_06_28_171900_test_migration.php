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
    public function up(): void
    {
        Schema::create('test_migration', static function (Blueprint $table){
           $table->bigIncrements('id');
           $table->string('name');
           $table->integer('phone');
           $table->timestamps();//عمل  الكل  من  نفس  النوع
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::drop('test_migration');
    }
};

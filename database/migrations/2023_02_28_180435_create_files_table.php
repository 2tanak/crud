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
        Schema::create('files', function (Blueprint $table) {
            $table->id();
			
			$table->string('disk',255)->nullable();
            $table->string('path',255)->nullable();	
            $table->string('size_2000',255)->nullable();
 			$table->string('large',255)->nullable();
			$table->string('extralarge',255)->nullable();
			$table->string('original',255)->nullable();
			$table->string('medium',255)->nullable();
			$table->string('small',255)->nullable();
			$table->string('extension',255)->nullable();
			$table->string('mime_type',255)->nullable();
			$table->string('original_name',255)->nullable();
			$table->text('description')->nullable();
			$table->text('name')->nullable();
			$table->text('dir')->nullable();
			$table->integer('size')->nullable();
			$table->integer('is_deleted')->nullable();
			//$table->timestamp('date')->useCurrent();
			$table->dateTime('date')->nullable();
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
        Schema::dropIfExists('files');
    }
};

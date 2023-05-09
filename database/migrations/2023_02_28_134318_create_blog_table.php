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
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
			$table->string('name',255)->nullable();
			$table->string('file_id',255)->nullable();
			$table->text('gallery_img')->nullable();
			$table->text('photo')->nullable();
            $table->text('text')->nullable();
			$table->string('publish',255)->default('1');
			
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
        Schema::dropIfExists('blog');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('name')->unique();
            $table->tinyInteger('author_id');
            $table->tinyInteger('publication_id');
            $table->tinyInteger('cariculam_id')->nullable();
            $table->tinyInteger('department_id')->nullable();
            $table->tinyInteger('semester_id')->nullable();
            $table->integer('probidhan')->nullable();
            $table->integer('theory')->nullable();
            $table->integer('practical')->nullable();
            $table->integer('credit')->nullable();
            $table->integer('tc')->nullable();
            $table->integer('tf')->nullable();
            $table->integer('pc')->nullable();
            $table->integer('pf')->nullable();
            $table->float('printed_price');
            $table->float('purchase_price')->nullable();
            $table->tinyInteger('created_by')->nullable();
            $table->tinyInteger('updated_by')->nullable();
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
        Schema::dropIfExists('books');
    }
}

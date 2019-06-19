<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'courses';

    /**
     * Run the migrations.
     * @table courses
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('start_week')->nullable();
            $table->integer('end_week')->nullable();
            $table->string('title', 45)->nullable();
            $table->unsignedInteger('term_id')->nullable();

            $table->index(["term_id"], 'fk_coruses_terms_idx');


            $table->foreign('term_id', 'fk_coruses_terms_idx')
                ->references('id')->on('terms')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}

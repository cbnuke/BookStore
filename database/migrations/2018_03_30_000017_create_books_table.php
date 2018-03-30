<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'books';

    /**
     * Run the migrations.
     * @table books
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('types_id');
            $table->string('name')->nullable();
            $table->text('des')->nullable();
            $table->integer('import_price')->nullable();
            $table->integer('sell_price')->nullable();
            $table->integer('point')->nullable();
            $table->string('img')->nullable();

            $table->index(["types_id"], 'fk_books_types1_idx');
            $table->nullableTimestamps();


            $table->foreign('types_id', 'fk_books_types1_idx')
                ->references('id')->on('types')
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
       Schema::dropIfExists($this->set_schema_table);
     }
}

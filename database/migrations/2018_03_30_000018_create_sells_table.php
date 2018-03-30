<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'sells';

    /**
     * Run the migrations.
     * @table sells
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasTable($this->set_schema_table)) return;
        Schema::create($this->set_schema_table, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->unsignedInteger('members_id');
            $table->unsignedInteger('books_id');
            $table->integer('discount')->nullable();

            $table->index(["members_id"], 'fk_sells_members1_idx');

            $table->index(["books_id"], 'fk_sells_books1_idx');
            $table->nullableTimestamps();


            $table->foreign('members_id', 'fk_sells_members1_idx')
                ->references('id')->on('members')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('books_id', 'fk_sells_books1_idx')
                ->references('id')->on('books')
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

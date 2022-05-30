<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaction_details', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('transaction_id');
        //     $table->foreign('transaction_id')
        //     ->references('id')->on('transactions')->onDelete('cascade');
        //     $table->unsignedBigInteger('book_id');
        //     $table->foreign('book_id')
        //  ->references('id')->on('books')->onDelete('cascade');
        //     $table->softDeletes();
        //     $table->timestamps();
            $table->id();
            $table->integer('transaction_id');
            $table->string('book_id');
            $table->softDeletes();
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
        Schema::dropIfExists('transaction_details');
    }
}

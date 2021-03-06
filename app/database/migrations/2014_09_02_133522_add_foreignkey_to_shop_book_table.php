<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignkeyToShopBookTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::table('shop_books', function(Blueprint $table) {
            $table->foreign('book_id')->references('id')->on('books')
                    ->onDelete('cascade');

            $table->foreign('digital_book_id')
                    ->references('id')->on('digital_books')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::table('shop_books', function(Blueprint $table) {
            $table->dropForeign('shop_books_book_id_foreign');

            $table->dropForeign('shop_books_digital_book_id_foreign');
        });
    }

}

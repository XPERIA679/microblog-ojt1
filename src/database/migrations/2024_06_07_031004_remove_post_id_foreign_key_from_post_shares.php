<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemovePostIdForeignKeyFromPostShares extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('post_shares', function (Blueprint $table) {
            // Drop the foreign key constraint on post_id
            $table->dropForeign(['post_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('post_shares', function (Blueprint $table) {
            // Recreate the foreign key constraint on post_id
            $table->foreign('post_id')->references('id')->on('user_posts');
        });
    }
}

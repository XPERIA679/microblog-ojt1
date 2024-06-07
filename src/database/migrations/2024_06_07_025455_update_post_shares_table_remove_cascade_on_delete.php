<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePostSharesTableRemoveCascadeOnDelete extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('post_shares', function (Blueprint $table) {
            // Drop the existing foreign keys
            $table->dropForeign(['post_id']);
            $table->dropForeign(['user_id']);
            
            // Recreate the foreign keys without cascade on delete
            $table->foreign('post_id')->references('id')->on('user_posts');
            $table->foreign('user_id')->references('id')->on('users');
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
            // Drop the foreign keys without cascade on delete
            $table->dropForeign(['post_id']);
            $table->dropForeign(['user_id']);
            
            // Recreate the original foreign keys with cascade on delete
            $table->foreign('post_id')->references('id')->on('user_posts')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }
}

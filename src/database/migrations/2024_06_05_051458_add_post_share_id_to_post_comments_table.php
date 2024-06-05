<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPostShareIdToPostCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('post_comments', function (Blueprint $table) {
            $table->unsignedBigInteger('post_share_id')->nullable()->after('post_id');
            $table->foreign('post_share_id')->references('id')->on('post_shares')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('post_comments', function (Blueprint $table) {
            $table->dropForeign(['post_share_id']);
            $table->dropColumn('post_share_id');
            $table->dropUnique(['user_id', 'post_id']);
            $table->dropUnique(['user_id', 'post_share_id']);
        });
    }
}
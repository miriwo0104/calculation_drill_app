<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAdditionTFSubtractionTFSubtractionTFToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //カラム追加する時はこっちに記載
            $table->boolean('addition');
            $table->boolean('subtraction');
            $table->boolean('multiplication');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //カラム削除するときはこっちに記載
        });
    }
}

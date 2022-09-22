<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPlanToInvestmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('investments', function (Blueprint $table) {
            $table->string('plan')->after('user_id');
            $table->integer('percentage')->after('plan');
            $table->string('status')->after('percentage');
            $table->uuid('uuid')->after('status');
            $table->integer('duration')->after('uuid')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('investments', function (Blueprint $table) {
            $table->dropColumn('plan');
            $table->dropColumn('percentage');
            $table->dropColumn('status');
            $table->dropColumn('uuid');
            $table->dropColumn('duration');
        });
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tools', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('provider')->default('UnlockBase');
            $table->boolean('active')->default(true);
            $table->integer('groupID');
            $table->string('groupName');
            $table->integer('toolID');
            $table->string('toolName');
            $table->integer('toolCredits');
            $table->boolean('toolSMS');
            $table->string('toolMessage');
            $table->integer('toolDeliveryMin');
            $table->integer('toolDeliveryMax');
            $table->string('toolDeliveryUnit');
            $table->string('toolRequiresNetwork');
            $table->string('toolRequiresProvider');
            $table->string('toolRequiresPin');
            $table->string('toolRequiresType');
            $table->string('toolRequiresKBH');
            $table->string('toolRequiresMEP');
            $table->string('toolRequiresPRD');
            $table->integer('toolRequiresLocks');
            $table->string('toolRequiresSN');
            $table->string('toolRequiresSecRO');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tools');
    }
}

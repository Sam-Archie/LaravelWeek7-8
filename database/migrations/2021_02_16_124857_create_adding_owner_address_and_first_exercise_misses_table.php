<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddingOwnerAddressAndFirstExerciseMissesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('owners', function (Blueprint $table) {
            $table->string("first_name", 50);
            $table->string("last_name", 50);
            $table->string("telephone", 14);
            $table->string("email", 150);
            $table->string("address_1", 255);
            $table->string("address_2", 255)->nullable();
            $table->string("town", 100);
            $table->string("postcode", 255);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('owners', function(Blueprint $table) {

            $table->dropColumn("first_name");
            $table->dropColumn("last_name");
            $table->dropColumn("telephone");
            $table->dropColumn("email");
            $table->dropColumn("address_1");
            $table->dropColumn("address_2");
            $table->dropColumn("town");
            $table->dropColumn("postcode");
        });
        
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->id();
            $table->foreignId("owner_id")->constrained()->onDelete("cascade");
            $table->string('name')->nullable();
            $table->date("date_of_birth")->nullable();
            $table->string("type")->nullable();
            $table->decimal("weight_kg")->nullable();
            $table->decimal("height_m")->nullable();
            $table->enum("biteyness", ["1", "2", "3", "4", "5"])->nullable();
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
        Schema::dropIfExists('animals');
    }
}

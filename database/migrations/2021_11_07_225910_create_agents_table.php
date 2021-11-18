<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string("nom");
            $table->string("postnom");
            $table->string("prenom");
            $table->string("username");
            $table->string("password");
            $table->foreignId("zone_id")->constrained("zones");
            $table->string("grade");
            $table->timestamps();
        });
        schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()

    {
        schema::table("agents", function (Blueprint $table) {
            $table->dropConstrainedForeignId("zone_id");
        });
        Schema::dropIfExists('agents');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeadFlowUpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lead_flow_ups', function (Blueprint $table) {
            $table->id();
            $table->string('MessageToLead');
            $table->string('Response');
            $table->integer('lead_id');
            $table->string('EvaluationCall');
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
        Schema::dropIfExists('lead_flow_ups');
    }
}

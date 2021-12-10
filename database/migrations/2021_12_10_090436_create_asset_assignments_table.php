<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssetAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset_assignments', function (Blueprint $table) {
            $table->increments('asset_assignment_id');
            $table->unsignedinteger('asset_id');
            $table->foreign('asset_id')->references('asset_id')->on('assets');
            $table->date('assignment_date');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->dateTime('is_due');
            $table->date('due_date');
            $table->unsignedinteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->string('assigned_by');
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
        Schema::dropIfExists('asset_assignments');
    }
}

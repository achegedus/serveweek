<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('requester_organization')->nullable();
            $table->string('requester_name');
            $table->string('requester_email');
            $table->string('requester_church')->nullable();
            $table->string('event_poc');
            $table->string('event_phone');
            $table->string('location_address');
            $table->string('location_address2')->nullable();
            $table->string('location_city');
            $table->string('location_state');
            $table->string('location_zipcode');
            $table->string('location_phone');
            $table->integer('region_id');
            $table->text('project_description');
            $table->text('project_direction');
            $table->text('project_parking');
            $table->integer('project_date_id');
            $table->string('project_time');
            $table->integer('volunteers_needed');
            $table->boolean('children_allowed')->nullable()->default(false);
            $table->text('volunteer_use');
            $table->text('skills_requested');
            $table->text('materials_provided');
            $table->text('materials_not_provided');
            $table->integer('coordinator_id')->nullable();
            $table->boolean('is_approved')->default(false);
            $table->integer('evaluator_id')->nullable();
            $table->boolean('is_evaluated')->default(false);
            $table->text('notes')->nullable();
            $table->boolean('is_confirmed')->default(false);
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
        Schema::dropIfExists('projects');
    }
}

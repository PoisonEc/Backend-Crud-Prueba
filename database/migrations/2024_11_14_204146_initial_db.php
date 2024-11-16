<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        $this->createSchemaDepartment();
        $this->createSchemaJobTitle();
        $this->createSchemaUser();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('department');
        Schema::dropIfExists('job_title');
        Schema::dropIfExists('user');
    }

    public function createSchemaDepartment(): void
    {
        Schema::create('department', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->boolean('active')->default(false);
            $table->bigInteger('user_creation_id');
        });
    }

    public function createSchemaJobTitle(): void
    {
        Schema::create('job_title', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->boolean('active')->default(false);
            $table->bigInteger('user_creation_id');
        });
    }

    public function createSchemaUser(): void
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('first_name');
            $table->string('second_name');
            $table->string('first_last_name');
            $table->string('second_last_name');
            $table->foreignId('department_id')->references('id')->on('department');
            $table->foreignId('job_title_id')->references('id')->on('job_title');
        });
    }
};

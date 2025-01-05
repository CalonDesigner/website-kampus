<?php
use App\Models\Job;
public function up(): void
      {
        Schema::create('job', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('description');
            $table->unsignedInteger('salary');
            $table->string('location');
            $table->enum('category', Job::$category);
            $table->enum('experience', Job::$experience);

            $table->timestamps();
        });
      }
      ...
      public function down(): void
      {
        Schema::dropIfExists('job');
      }
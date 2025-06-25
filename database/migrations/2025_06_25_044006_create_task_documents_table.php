<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('task_documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('task_id')->constrained('tasks')->onDelete('cascade');
            $table->string('path', 255);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('task_documents');
    }
};

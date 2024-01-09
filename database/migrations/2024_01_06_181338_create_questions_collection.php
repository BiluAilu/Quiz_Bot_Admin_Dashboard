<?php

// database/migrations/yyyy_mm_dd_hhmmss_create_questions_collection.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsCollection extends Migration
{
    public function up()
    {
        Schema::create('question', function (Blueprint $collection) {
            $collection->id();
            $collection->string('title');
            $collection->json('choices');
            $collection->string('answer');
            $collection->foreignId('user_id')->constrained();
            $collection->string('status');
            $collection->string('category');
            $collection->string('level');
            $collection->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('question');
    }
}

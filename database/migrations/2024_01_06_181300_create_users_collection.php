<?php

// database/migrations/yyyy_mm_dd_hhmmss_create_users_collection.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersCollection extends Migration
{
    public function up()
    {
        Schema::create('user', function (Blueprint $collection) {
            $collection->id();
            $collection->string('name');
            $collection->string('email')->unique()->nullable();
            $collection->string('phone_number');
            $collection->string('photo_id');
            $collection->boolean('is_admin')->default(false);
            $collection->string('password')->nullable();
            $collection->rememberToken();
            $collection->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('user');
    }
}

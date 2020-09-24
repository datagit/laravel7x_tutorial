<?php
// step 1:
// php artisan make:migration create_posts_table
//Created Migration: 2020_09_24_142927_create_posts_table

// step 2:
// run migrate by command
// php artisan migrate
//Migration table created successfully.
//Migrating: 2014_10_12_000000_create_users_table
//Migrated:  2014_10_12_000000_create_users_table (0.03 seconds)
//Migrating: 2014_10_12_100000_create_password_resets_table
//Migrated:  2014_10_12_100000_create_password_resets_table (0.03 seconds)
//Migrating: 2019_08_19_000000_create_failed_jobs_table
//Migrated:  2019_08_19_000000_create_failed_jobs_table (0.02 seconds)
//Migrating: 2020_09_24_142927_create_posts_table
//Migrated:  2020_09_24_142927_create_posts_table (0.01 seconds)

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->text('body');
            $table->timestamps();
            $table->timestamp('published_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}

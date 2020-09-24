<?php

// step 3:
// php artisan make:migration add_title_field_to_posts_table
//Created Migration: 2020_09_24_143724_add_title_field_to_posts_table

// step 4:
//  php artisan migrate
//Migrating: 2020_09_24_143724_add_title_field_to_posts_table
//Migrated:  2020_09_24_143724_add_title_field_to_posts_table (0.03 seconds)

// step 5:
//  php artisan migrate:rollback
//Rolling back: 2020_09_24_143724_add_title_field_to_posts_table
//Rolled back:  2020_09_24_143724_add_title_field_to_posts_table (0.03 seconds)

// step 6:
// php artisan migrate:refresh
//Nothing to rollback.
//Migrating: 2014_10_12_000000_create_users_table
//Migrated:  2014_10_12_000000_create_users_table (0.04 seconds)
//Migrating: 2014_10_12_100000_create_password_resets_table
//Migrated:  2014_10_12_100000_create_password_resets_table (0.03 seconds)
//Migrating: 2019_08_19_000000_create_failed_jobs_table
//Migrated:  2019_08_19_000000_create_failed_jobs_table (0.01 seconds)
//Migrating: 2020_09_24_142927_create_posts_table
//Migrated:  2020_09_24_142927_create_posts_table (0.01 seconds)
//Migrating: 2020_09_24_143724_add_title_field_to_posts_table
//Migrated:  2020_09_24_143724_add_title_field_to_posts_table (0.02 seconds)
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTitleFieldToPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->string('title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('title');
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ldb_settings_options', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->text('default_value')->nullable();
            $table->unsignedInteger('type')->default(1);
            $table->string('access_level')->nullable();
            $table->timestamps();
        });

        Schema::create('ldb_settings_values', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->unsignedBigInteger('ldb_user_settings_option_id')->index();
            $table->unsignedBigInteger('user_id')->nullable()->index();
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
        Schema::dropIfExists('ldb_user_settings_options');
        Schema::dropIfExists('ldb_user_settings_values');
    }
};

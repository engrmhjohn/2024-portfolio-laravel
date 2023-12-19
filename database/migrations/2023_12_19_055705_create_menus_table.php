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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('en_menu_first_name')->nullable();
            $table->string('en_menu_last_name')->nullable();
            $table->string('en_menu_intro')->nullable();
            $table->string('en_menu_about')->nullable();
            $table->string('en_menu_service')->nullable();
            $table->string('en_menu_team')->nullable();
            $table->string('en_menu_education')->nullable();
            $table->string('en_menu_work')->nullable();
            $table->string('en_menu_contact')->nullable();
            $table->longText('logo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};

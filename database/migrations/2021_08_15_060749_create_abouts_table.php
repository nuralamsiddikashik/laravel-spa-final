<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create( 'abouts', function ( Blueprint $table ) {
            $table->id();
            $table->string( 'about_title' );
            $table->string( 'about_subtitle' )->nullable();
            $table->string( 'about_description' )->nullable();
            $table->string( 'about_image' )->nullable();
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists( 'abouts' );
    }
}

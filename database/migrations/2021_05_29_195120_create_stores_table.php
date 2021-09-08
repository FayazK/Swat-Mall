<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'stores', function( Blueprint $table ) {
            $table->id();
            $table->unsignedBigInteger( 'user_id' );
            $table->string( 'name' );
            $table->string( 'title' );
            $table->string( 'slug' );
            $table->text( 'description' );
            $table->string( 'logo' );
            $table->string( 'cover' );
            $table->unsignedInteger( 'country_id' );
            $table->unsignedBigInteger( 'city_id' );
            $table->enum( 'status', [ 'Active', 'Suspended', 'Closed' ] );
            $table->softDeletes();
            $table->timestamps();
            $table->foreign( 'user_id', 'user_store' )->references( 'id' )->on( 'users' );
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists( 'stores' );
    }
}

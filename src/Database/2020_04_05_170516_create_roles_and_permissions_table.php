<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesAndPermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('role' , function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('label')->nullable();
            $table->timestamps();
        });

        Schema::create('permissions' , function (Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('label')->nullable();
            $table->timestamps();
        });

        Schema::create('permissions_role' , function (Blueprint $table){
            $table->bigIncrements('role_id')->unsigned();
            $table->bigIncrements('permission_id')->unsigned();

            $table->foregin('role_id')
                  ->references('id')
                  ->on('role')
                  ->onDelete('cascade')
                  ->onupdate('cascade');

            $table->foregin('permission_id')
                  ->references('id')
                  ->on('permissions')
                  ->onDelete('cascade')
                  ->onupdate('cascade');

            $table->primary(['permission_id', 'role_id']);
        });



        Schema::create('role_user', function (Blueprint $table) {
            $table->bigInteger('role_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();

            $table->foreign('role_id')
                ->references('id')
                ->on('roles')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->primary(['role_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
        Schema::dropIfExists('permissions');
        Schema::dropIfExists('permission_role');
        Schema::dropIfExists('role_user');
    }
}

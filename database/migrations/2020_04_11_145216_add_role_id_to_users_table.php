<?php

    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class AddRoleIdToUsersTable extends Migration {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up(){
            Schema::table('users', function(Blueprint $table){
                $table->bigInteger('role_id')->index()->unsigned()->nullable(false);
                $table->foreign('role_id', 'fk_users_roles')->references('id')->on('roles');
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down(){
            Schema::table('users', function(Blueprint $table){
                //
            });
        }
    }

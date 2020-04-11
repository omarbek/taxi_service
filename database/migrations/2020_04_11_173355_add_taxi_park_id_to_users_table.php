<?php

    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class AddTaxiParkIdToUsersTable extends Migration {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up(){
            Schema::table('users', function(Blueprint $table){
                $table->bigInteger('taxi_park_id')->index()->unsigned()->nullable();
                $table->foreign('taxi_park_id', 'fk_users_taxi_parks')->references('id')->on('taxi_parks');
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

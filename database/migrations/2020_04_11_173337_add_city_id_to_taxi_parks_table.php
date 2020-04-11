<?php

    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class AddCityIdToTaxiParksTable extends Migration {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up(){
            Schema::table('taxi_parks', function(Blueprint $table){
                $table->bigInteger('city_id')->index()->unsigned()->nullable(false);
                $table->foreign('city_id', 'fk_taxi_parks_cities')->references('id')->on('cities');
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down(){
            Schema::table('taxi_parks', function(Blueprint $table){
                //
            });
        }
    }

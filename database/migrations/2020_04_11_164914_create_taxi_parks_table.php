<?php

    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CreateTaxiParksTable extends Migration {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up(){
            Schema::create('taxi_parks', function(Blueprint $table){
                $table->bigIncrements('id');
                $table->string('name');
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down(){
            Schema::dropIfExists('taxi_parks');
        }
    }

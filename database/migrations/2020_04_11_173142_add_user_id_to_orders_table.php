<?php

    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class AddUserIdToOrdersTable extends Migration {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up(){
            Schema::table('orders', function(Blueprint $table){
                $table->bigInteger('client_id')->index()->unsigned()->nullable(false);
                $table->foreign('client_id', 'fk_orders_clients')->references('id')->on('users');

                $table->bigInteger('driver_id')->index()->unsigned()->nullable(false);
                $table->foreign('driver_id', 'fk_orders_drivers')->references('id')->on('users');
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down(){
            Schema::table('orders', function(Blueprint $table){
                //
            });
        }
    }

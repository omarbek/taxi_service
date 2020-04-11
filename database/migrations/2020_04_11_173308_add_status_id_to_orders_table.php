<?php

    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class AddStatusIdToOrdersTable extends Migration {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up(){
            Schema::table('orders', function(Blueprint $table){
                $table->bigInteger('status_id')->index()->unsigned()->nullable(false);
                $table->foreign('status_id', 'fk_orders_order_statuses')->references('id')
                    ->on('order_statuses');
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

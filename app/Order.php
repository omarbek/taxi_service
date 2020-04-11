<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Order extends Model {

        protected $fillable = ['start_address', 'destination_address', 'price', 'client_id', 'driver_id',
                               'status_id'];

        public function getClient(){
            return $this->belongsTo(User::class, 'client_id', 'id');
        }

        public function getDriver(){
            return $this->belongsTo(User::class, 'driver_id', 'id');
        }

        public function getOrderStatus(){
            return $this->belongsTo(OrderStatus::class, 'status_id', 'id');
        }
    }

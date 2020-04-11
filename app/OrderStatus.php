<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class OrderStatus extends Model {

        protected $fillable = ['name'];

        public function getOrders(){
            return $this->hasMany(Order::class, 'status_id', 'id');
        }
    }

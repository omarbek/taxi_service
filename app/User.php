<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class User extends Model {

        protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'role_id', 'taxi_park_id'];

        public function getRole(){
            return $this->belongsTo(Role::class, 'role_id', 'id');
        }

        public function getOrderForClient(){
            return $this->hasOne(Order::class, 'client_id', 'id');
        }

        public function getOrderForDriver(){
            return $this->hasOne(Order::class, 'driver_id', 'id');
        }

        public function getTaxiPark(){
            return $this->belongsTo(TaxiPark::class, 'taxi_park_id', 'id');
        }
    }

<?php

    namespace App;

    use Illuminate\Foundation\Auth\User as Authentication;

    class User extends Authentication {

        protected $fillable = [
            'first_name',
            'last_name',
            'email',
            'phone',
            'role_id',
            'taxi_park_id',
            'password'
        ];

        public function isAdmin(){
            if($this->role_id == Role::ADMIN) {
                return true;
            }
            return false;
        }

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

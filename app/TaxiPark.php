<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class TaxiPark extends Model {

        protected $fillable = ['name', 'city_id'];

        public function getCity(){
            $this->belongsTo(City::class, 'city_id', 'id');
        }

        public function getUsers(){
            $this->hasMany(User::class, 'tax_park_id', 'id');
        }
    }

<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class City extends Model {

        protected $fillable = ['name'];

        public function getTaxiParks(){
            $this->hasMany(TaxiPark::class, 'city_id', 'id');
        }
    }

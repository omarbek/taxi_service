<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Role extends Model {

        protected $fillable = ['name'];

        public function getUsers(){
            return $this->hasMany(User::class, 'role_id', 'id');
        }
    }

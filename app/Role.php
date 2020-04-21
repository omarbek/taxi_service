<?php

    namespace App;

    use Illuminate\Database\Eloquent\Model;

    class Role extends Model {

        const ADMIN = 1;
        const DRIVER = 2;
        const CLIENT = 3;
        const USER = 4;

        protected $fillable = ['name'];

        public function getUsers(){
            return $this->hasMany(User::class, 'role_id', 'id');
        }
    }

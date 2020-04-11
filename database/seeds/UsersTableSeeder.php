<?php

    use Illuminate\Database\Seeder;

    class UsersTableSeeder extends Seeder {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run(){
            \Illuminate\Support\Facades\DB::table('users')->insert(['first_name' => 'Admin',
                                                                    'last_name'  => 'Admin',
                                                                    'email'      => 'admin@mail.kz',
                                                                    'phone'      => '111', 'role_id' => 1,
                                                                    'password'   => md5('112233')]);
        }
    }

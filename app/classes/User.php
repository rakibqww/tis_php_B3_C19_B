<?php


namespace App\classes;


class User{

    public function getAllUser(){
        return[
          0 => [
              'id'      => 1,
              'name'    => 'Rakib Hasan',
              'email'   => 'rakib456@gmail.com',
              'password'=> '123'
          ],
            1 => [
                'id'        => 2,
                'name'      => 'Rakib 7',
                'email'     => 'rakib457@gmail.com',
                'password'  => '123'
            ],
            2 => [
            'id'        => 3,
            'name'      => 'Rakib 8',
            'email'     => 'rakib458@gmail.com',
            'password'  => '123'
        ],
            3 => [
                'id'        => 4,
                'name'      => 'ADMIN',
                'email'     => 'admin@gmail.com',
                'password'  => '123'
            ]
        ];
    }

}
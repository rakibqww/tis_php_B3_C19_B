<?php


namespace App\classes;


class Home{
    protected $number;
    protected $i;

    public function __construct($post = null){
        $this->number = $post['given_number'];
    }

    public function index(){
        header('Location: action.php?pages=home');
    }
    public function primeNumber(){

        if($this->number == 1 || $this->number == 2){
            return"$this->number is Prime Number";
        }else{
            for ($this->i = 2; $this->i < $this->number; $this->i++){
                if($this->number%$this->i == 0){
                    return "$this->number is not a Prime Number";
                }
            }return "$this->number is a Prime Number";
        }
    }
}
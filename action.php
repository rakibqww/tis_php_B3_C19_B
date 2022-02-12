<?php
session_start();
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Series;
use App\classes\Registration;
use App\classes\Auth;

if (isset($_GET['pages'])){
    if ($_GET['pages'] == 'home'){
        if (isset($_SESSION['id'])){
            include 'pages/home.php';
        }else{
            $auth = new Auth();
            $auth->login();
        }

    }elseif ($_GET['pages'] == 'series'){
        if (isset($_SESSION['id'])){
            include 'pages/series.php';
        }else{
            $auth = new Auth();
            $auth->login();
        }

    }elseif ($_GET['pages'] == 'register'){
        if (isset($_SESSION['id'])){
            include 'pages/register.php';
        }else{
            $auth = new Auth();
            $auth->login();
        }
    }elseif ($_GET['pages'] == 'session_test'){
        include 'session_test.php';
        $home = new Home();
        $home->index();
    }elseif ($_GET['pages'] == 'login'){
        if (isset($_SESSION['id'])){
            $home = new Home();
            $home->index();
        }else {
            include 'pages/login.php';
        }
    }elseif ($_GET['pages'] == 'logout'){
        $auth = new Auth();
        $auth->logout();
        include 'pages/login.php';
    }elseif ($_GET['pages'] == 'all-data'){
        $register = new Registration();
        $result = $register->allData();
        echo '<pre>';
        print_r($result);
    }else{
        if (isset($_SESSION['id'])){
            $home = new Home();
            $home->index();
        }else{
            $auth = new Auth();
            $auth->login();
        }
    }

}
elseif (isset($_POST['prime_btn'])){
    $home   = new Home($_POST);
   $result  = $home->primeNumber();
    include "pages/home.php";
}elseif (isset($_POST['series_btn'])){
    $series   = new Series($_POST);
    $result  = $series->getSeries();
    include "pages/series.php";
}elseif (isset($_POST['login_btn'])){
    $auth = new Auth($_POST);
    $message = $auth->verityUser();
    include "pages/login.php";
}elseif (isset($_POST['register_btn'])){
    $register = new Registration($_POST);
    $message= $register->add();
    include 'pages/register.php';

}

else{
    $home = new Home();
    $home->index();
}
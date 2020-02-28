<?php
/**
 * Author   : christnovie.kiala-binga@cpnv.ch
 * Project  : ICT-151 Controler
 * Created  : 05.02.2019 - 18:40
 */
session_start();
require "model/userManagement.php";
require "model/Management.php";
/**
 *function for home page
 */
function home(){
    $_GET['action'] = "home";
    require "view/home.php";
}

/**
 *function for login
 * @param $loginregister *containt all data of login
 */
function login($loginregister)
{

    $_GET['action'] = "login";
    if (!isset($_SESSION['login']) || $_SESSION['login'] == "") {
        if(isset($loginregister['inputUsername'])) {
            if (checkin($loginregister)) {

                $_SESSION['login'] = $_POST['inputUsername'];
                $_SESSION['userEmail'] = $_GET['userEmail'];
                $_GET['action'] = "resultLogin";
                require "View/resultLogin.php";
            } else
                require "View/login.php";
        }else
            require  "View/login.php";
    } else {
        require "View/resultLogin.php";
    }

}

/**
 *function for create user
 * @param $dataUser
 */
function register($dataUser)
{
    $erroreConfirme = "";
    $_GET['errorPassword'] = $erroreConfirme;
    $_GET['action'] = "login";
    if (isset($dataUser['createUser'])) {
        if ($dataUser['createpwd'] == $dataUser['confirmepwd']) {
            $_GET['action'] = "login";
            $_GET['errorConfirme'] = '';
            if (creatUser($dataUser)) {

                require "View/login.php";
            } else
                require "View/register.php";
        } else
            $_GET['errorConfirme'] = 'password no match';
        require "View/register.php";

    } else {
        require "View/register.php";

    }
}

/**
 *function for error
 */
function error(){
    $_GET['action'] = "error";
    require "view/error.php";

}
/**
 *function for logout to session
 */
function deconnect()
{
    $_GET['action'] = "login";
    $_SESSION['login'] = "";
    session_unset();
    session_destroy();
    require "View/login.php";
}
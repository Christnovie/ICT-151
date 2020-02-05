<?php
/**
 * Author   : christnovie.kiala-binga@cpnv.ch
 * Project  : ICT-151 Controler
 * Created  : 05.02.2019 - 18:40
 */
require "model/model.php";

/**
 *function for home page
 */
function home(){
    $_GET['action'] = "home";
    require "view/home.php";
}

/**
 *function for login
 */
function login(){
    $_GET['action'] = "login";
    require "view/login.php";

}

/**
 *function for error
 */
function error(){
    $_GET['action'] = "error";
    require "view/error.php";

}
;
<?php
/**
 * ICT-151 - index.php
 *version : ${VERSION}
 *Initial version by: Christnovie.KIALA-BI
 *Initial version created on : 05.02.2020
 *Time : 15:37
 */
require "controler/controler.php";
if (isset($_GET['action'])) {
    $action = $_GET['action'];
    switch ($action) {
        case 'home':
            home();
            break;
        case 'login':
            login();
            break;
        case 'error':
            error();
            break;

    }
}else{
    home();
}
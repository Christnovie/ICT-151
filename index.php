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
    $itemPanier = $_GET['element'];
    $action = $_GET['action'];
    switch ($action) {
        case 'home':
            home();
            break;
        case 'login':
            login($_POST);
            break;
        case 'registry' :
            register($_POST);
            break;
        case 'logout' :
            deconnect();
            break;
        case 'produit' :
            produit();
            break;
        case 'addItem' :
            addItem($itemPanier);
            break;
        case 'error':
            error();
            break;
        case 'newItem' :
            newItem($_POST);
            break;

    }
}else{
    home();
}
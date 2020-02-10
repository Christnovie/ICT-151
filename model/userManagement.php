<?php
/**
 * Author   : nicolas.glassey@cpnv.ch
 * Project  : 151_2019_ForStudents
 * Created  : 05.02.2019 - 18:40
 *
 * Last update :    [01.12.2018 author]
 *                  [add $logName in function setFullPath]
 * Git source  :    [link]
 */

function checklogin($password)
{

    $dbConnector = mysqlConnection();
    $query = "SELECT userEmailAddress, userPsw, pseudo FROM user ; ";
    $statment = $dbConnector->prepare($query);//prepare query
    $statment->execute();//execute query
    $queryResult = $statment->fetchAll();//prepare result for client
    foreach ($queryResult as $item) {
        if (($password['inputUsername'] == $item->pseudo || $password['inputUsername'] == $item->userEmailAddress)) {
            if ($password['pwd'] == $item->userPsw)
                return true;
            else
                return false;
        }
    }


    $dbConnector = null;//close database connexion
}

function mysqlConnection()
{
    $severName = "localhost";
    $password = "2001C.star";
    $pseudo = "root";
    $hostname = "127.0.0.0";
    $dbports = "50000";
    $sql_driver = "mysql";
    $connect = $sql_driver . ':host='. $hostname.';port='.$dbports;
    $dbConnector = new PDO('mysql:host='.$hostname.';port='.$dbports,$pseudo, $password);


    return $dbConnector;
}
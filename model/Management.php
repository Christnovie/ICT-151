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

function rats($password)
{
    $username = $password['inputUsername'];
    $passwords = $password['pwd'];
    $dbConnector = mysqlConnection();
    $query = "SELECT  userPsw  FROM users 
                        where  snows.userEmailAddress = '$username' or snows.pseudo = '$passwords'; ";
    $statment = $dbConnector->prepare($query);//prepare query
    $statment->execute();//execute query
    $queryResult = $statment->fetchAll();//prepare result for client



    $dbConnector = null;//close database connexion
}

function mysqlConnection()
{
    $tempDbConnexion = null;
    $sqlDriver = 'mysql';
    $hostname = 'localhost';
    $port = 50000;
    $charset = 'utf8';
    $dbName = 'snows';
    $userName = 'root';
    $userPwd = '2001Chris';
    $dsn = $sqlDriver . ':host=' . $hostname . ';dbname=' . $dbName . ';port=' . $port . ';charset=' . $charset;

    try{
        $tempDbConnexion = new PDO($dsn, $userName, $userPwd);
    }
    catch (PDOException $exception) {
        echo 'Connection failed: ' . $exception->getMessage();
    }
    return $tempDbConnexion;

}
function dbConnector( ){
    $dbName = "localhost";
    $password = "2001C.star";
    $pseudo = "root";
    $hostname = "localhost";
    $dbports = 50000;


   $result =  new PDO('mysql:host='.$hostname.';port='.$dbports.';dbname='.$dbName,$pseudo, $password);
return $result;
}
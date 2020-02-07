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



}
function mysqlConnection(){
    $severName = "localhost";
    $password = "2001Chris";
    $pseudo = "root";
    $hostname = "localhost";
    $dbports = "50000";
    $sql_driver = "MySql";
    $connect = $sql_driver.': host='.$hostname.';port='.$dbports;
    $dbConnector = new PDO($connect,$hostname,$password);

    try{
        $tempDbConnection = new PDO($dbConnector, $pseudo, $password);
    }
    catch (PDOException $exception) {
        echo 'Connection failed: ' . $exception->getMessage();
    }
}
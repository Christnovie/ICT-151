<?php
/**
 * ICT-151 - userManagement.php
 *version : ${VERSION}
 *Initial version by: Christnovie.KIALA-BI
 *Initial version created on : 14.02.2020
 *Time : 11:45
 *
 */
/**
 * @param $inputdata
 */
function checkin($inputdata){
    $query = "SELECT userEmailAddress, userPsw, pseudo FROM user;";
    $result = execute_query($query);

}
function execute_query($requete){
    try {
        $result = dbConnector();
    }catch ( PDOException $exception){
         echo "Connection echouer de la base de donner".$exception->getMessage();
    }



}
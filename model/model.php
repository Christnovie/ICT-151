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


    foreach ($parsed as $item => $value) {
        if ($value->User == @$password['inputUsername'] || $value->Email == @$password['inputUsername']) {
            if (@$password['pwd'] == $value->Password && (@$password['inputUsername'] == $value->User || @$password['inputUsername'] == $value->Email)) {


                return true;
            }else
                return false;

        }
    }
}
function mysqlConnection($severName,$password,$pseudo,$hostname,$dbports,$sql_driver){
    $dbConnector = new PDO($pseudo,$password,$hostname,);
}
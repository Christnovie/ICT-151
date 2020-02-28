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
 * @return bool
 */
function checkin($inputdata){
    require "model/Management";
    $username = $inputdata['inputUsername'];
    $passwords = $inputdata['pwd'];
    $query = "SELECT  userPsw  FROM users 
                        where  snows.userEmailAddress = '$username' or snows.pseudo = '$passwords'; ";
    $result = execute_query($query);
    if(isset($result)){
        return true;
    }{
        return false;
    }
}

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

    $username = $inputdata['inputUsername'];
    $passwords = $inputdata['pwd'];
    $query = "SELECT  userPsw  FROM users 
                        where  snows.userEmailAddress = '$username' or snows.pseudo = '$username'; ";
    $result = ExecuteQuery($query);
    if(isset($result)){
        if($result == $passwords){
            return true;
        }else{
            return false;
        }

    }{
        return false;
    }
}

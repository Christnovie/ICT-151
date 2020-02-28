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
 * function for check login
 * @param $inputdata
 * @return bool
 */
function checkin($inputdata){

    $username = $inputdata['inputUsername'];
    $passwords = $inputdata['pwd'];
    $query = "SELECT  userPsw  FROM users where  users.userEmailAddress = '$username' or users.pseudo = '$username'; ";
    $result = ExecuteQuery($query);
    foreach ($result as $item){
        $pwdResult = $item[0];
    }

    if(isset($pwdResult)){
        if($pwdResult == $passwords){
            return true;
        }else{
            return false;
        }

    }{
        return false;
    }
}

/**
 * function for create new user
 * @param $userData
 * @return bool
 */
function creatUser($userData)
{

    $pseudo = $userData['createUser'];
    $password = $userData['createpwd'];
    $email = $userData['createEmail'];
    $query = "SELECT users.userEmailAddress,users.pseudo  FROM users where  users.userEmailAddress = '$email' or users.pseudo = '$pseudo'; ";
    $result = ExecuteQuery($query);
    /** @var TYPE_NAME $item */
    foreach ($result as $item) {
        if (!isset($item)) {
            $query = "INSERT INTO users ( userEmailAddress, userPsw, pseudo) VALUES( '$email', '$password', '$pseudo');";
            $result = ExecuteQuery($query);
            return true;
        }
        return false;
    }

}

<?php
/**
 * ICT-151 - productManagement.php
 *version : ${VERSION}
 *Initial version by: Christnovie.KIALA-BI
 *Initial version created on : 28.02.2020
 *Time : 11:41
 */



function snowsDatabase(){
    $query = "select * from snows.snows ";
    $result = ExecuteQuery($query);
    return $result;
}
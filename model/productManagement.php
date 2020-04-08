<?php
/**
 * ICT-151 - productManagement.php
 *version : ${VERSION}
 *Initial version by: Christnovie.KIALA-BI
 *Initial version created on : 28.02.2020
 *Time : 11:41
 */


function snowsDatabase()
{
    $query = "select * from snows.snows where snows.snows.qtyAvailable > 0;";
    $result = ExecuteQuery($query);
    return $result;
}

function snowAddUpdate($snows)
{
    $file = $_FILES['newImage']['name'];
    $name = $snows['newName'];
    $temp_name = $_FILES["newImage"]["tmp_name"];
    $chemin = 'view/content/images/' . $snows['newName'] . ".jpg";

    if (move_uploaded_file($temp_name, $chemin)) {
       $query = "select * from snows.snows where snows.snows.code = '$name';";
        $result = ExecuteQuery($query);
        if($result[0] == ""){
            $valueSnow = "$name','".$snows['newMarque']."','".$snows['newModel']."',".$snows['newLength'].",".$snows['newqty'].",".$snows['newPrice'].",'".$snows['newDescrip']."','".$chemin. "',1";


            $query = "insert into snows.snows (`code`, `brand`, `model`, `snowLength`, `qtyAvailable`,`dailyPrice`, `description`,  `photo`, `active`) value ('$valueSnow);";
            ExecuteQuery($query);
        }else{
            echo"snow existe deja";
        }
    } else {
        echo "fichier non enregistrer";
    }


}
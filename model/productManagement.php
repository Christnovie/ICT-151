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
function snowAddUpdate($snows){
    $file = $_FILES['newImage']['name'];
    $temp_name = $_FILES["newImage"]["tmp_name"];
    $chemin = 'view/content/images/'.$snows['newName'].".jpg";
    if(move_uploaded_file($temp_name,$chemin)){
        $source = imagecreatefromjpeg($chemin);
        imagerotate($source,90,0);
        echo "connexion reussi";
    }else{
        echo "fichier non enregistrer";
    }


}
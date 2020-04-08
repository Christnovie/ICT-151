<?php
/**
 * ICT-151 - test.php
 *version : ${VERSION}
 *Initial version by: Christnovie.KIALA-BI
 *Initial version created on : 06.03.2020
 *Time : 08:52
 */
?>
<!--
<html>
<head>
    <style>
        .perso{
            position: fixed;

            display: none;
            width:80%;
            height: 80%;
            z-index: 980;
           text-align: center;
            background-color: gray;
            lighting-color: black;
        }
    </style>
    <title></title>
</head>
    <body >
    <div style="z-index: 950;position: absolute">
    <button id="outre"  href="#test01">teste up</button>
    <form action="" method="post">
        <input type="text"placeholder="mot de passe" name="password"><input type="submit">
    </form>
    </div>
    <div style="position: center"><div id="page_blanche" class="perso">oahgfafbofabofbaobfasbsfosah f fa fa
    ffa
     fafa0fhafha0fpafhas fasfaofh0sa8fahfasn f
    safa
    as
     faf0ea
            fhef</div></div>

    <script>
        outre.addEventListener('click',open);
        function open() {
            var x = document.getElementById('page_blanche');
            var y = document.getElementById('outre');
            x.style.display = 'block';
            x.style.lightingColor = 'gray'


        }
    </script>
</body>

</html>
 -->

<?php
// Fichier et degrés de rotation
$filename = 'K3GE.jpg';
$filePath = "content/images/";
$rotaded = $filePath.'rotated_'.$filename;
$degrees = 90;

// Content type
@header('Content-type: image/jpg');

// Chargement
$source = @imagecreatefromjpeg($filePath.$filename);
@imagejpeg($source);
// Rotation
$rotate = @imagerotate($source, $degrees, 0);

// Affichage
@imagejpeg($rotate,$rotaded);

// Libération de la mémoire
@imagedestroy($source);
@imagedestroy($rotate);




function convert_to_jpg($filename){

    switch (exif_imagetype($filename))
    {
        case IMAGETYPE_GIF:
            $image = imagecreatefromgif($filename);
            break;
        case IMAGETYPE_JPEG:
            $image = imagecreatefromjpeg($filename); // ou return true; en fait, vu que c'est déjà du jpg
            break;
        case IMAGETYPE_PNG:
            $image = imagecreatefrompng($filename);
            break;
        default:
            return false;
    }
    image

    // change la couleur transparente par du blanc
    imagecolorset($image, imagecolortransparent($image), 255, 255, 255);

    return imagejpeg($image, pathinfo($filename, PATHINFO_FILENAME) . '.jpg');
}
?>
la


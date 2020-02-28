<?php
/**
 * ICT-151 - resultLogin.php
 *version : ${VERSION}
 *Initial version by: Christnovie.KIALA-BI
 *Initial version created on : 28.02.2020
 *Time : 10:03
 */
/** tampon de fliux stocké en mémoire */
ob_start();
$titre = "Rent a show - Login";

?>
    <div>
        <h1>Login</h1><br>
        <?php
        if (isset($_POST['inputUsername']))
            echo "Connection reussi avec succés de ", $_POST['inputUsername'];
        else {
            echo "Vous êtes déjà connecté";
        }

        ?>
    </div>


<?php
$contenu = ob_get_clean();
require 'gabarit.php';

?>
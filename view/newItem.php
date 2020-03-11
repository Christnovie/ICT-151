<?php
/**
 * ICT-151 - newItem.php
 *version : ${VERSION}
 *Initial version by: Christnovie.KIALA-BI
 *Initial version created on : 11.03.2020
 *Time : 15:32
 */ob_start();
$titre = "register";
?>
    <div>
        <h1>Register</h1><br>
        <form action="index.php?action=registry" id="formulaireRegister" name="formRegister"  method="post">
            <label>Name</label>
            <input type="image" id="" name="createUser"   placeholder="import" value=""  required><br>
            <label>Name</label>
            <input type="text" id="" name="createUser"   placeholder="input your username" value=""  required><br>
            <label>Marque</label>
            <input type="text" id="" name="createEmail"   placeholder="input your email" value=""  required><br>
            <label>Password</label>
            <input type="password" id="createpwds" name="createpwd" placeholder="Enter new password" value="" minlength="8"   required>
            <label>Confirme password</label>
            <input type="password" id="confirmepwds" name="confirmepwd" placeholder="Enter password" value="" minlength="8"  required>
            <br>
            <button type="submit" id="registered" name="register">Register </button><input type="reset" value="Reset"><br>
            Déjà membre?          <a href="index.php?action=login">Login </a>
        </form>
        <?php  echo $_GET['errorConfirme']?>
    </div>


<?php



$contenu = ob_get_clean();
require 'gabarit.php';
?>
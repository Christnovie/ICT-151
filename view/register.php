<?php

/**
 * PROJET: ICT-151
 * FILE : register.php
 * AUTEUR : Skarfox
 * DATE : 2/9/2020
 * VERSION : 1.0
 * TIME :  11:36 PM
 */
/** tampon de fliux stocké en mémoire */
ob_start();
$titre = "register";
?>
<div>
    <h1>Register</h1><br>
    <form action="index.php?action=registry" id="formulaireRegister" name="formRegister" method="post">
        <label>Username</label>
        <input type="text" id="" name="createUser" placeholder="input your username" value="" minlength="4"
               required><br>
        <label>Email</label>
        <input type="email" id="" name="createEmail" placeholder="input your email" value="" required><br>
        <label>Password</label>
        <input type="password" id="createpwds" name="createpwd" placeholder="Enter new password" value="" minlength="8"
               required>
        <label>Confirme password</label>
        <input type="password" id="confirmepwds" name="confirmepwd" placeholder="Enter password" value="" minlength="8"
               required>
        <br>
        Compte admin :<input type="button" onchange="passwords()" name="adminchk" value="admin" id="chkadmin">
        <br>
        <div id="adminContent" style="display: none">
            <br>
            <input type="password" id="adminPwd" placeholder="Admin Password">
            <button id="adminPwd">validé</button>
            <br>
        </div>
        <br>
        <button type="submit" id="registered" name="register">Register</button>
        <input type="reset" value="Reset"><br>
        Déjà membre? <a href="index.php?action=login">Login </a>
    </form>
    <?php echo $_GET['errorConfirme'] ?>
</div>


<?php


$contenu = ob_get_clean();
require 'gabarit.php';
?>
<script>

    adminPwd.addEventListener('click', chkpassword);

    function passwords() {
        var xchk = document.getElementById('adminchk');
        var hiddenContent = document.getElementById('adminContent');
        hiddenContent.style.display = "block";
        if(xchk.adminchk.value){

        }else {
            hiddenContent.style.display = "block";
        }
    }

    function chkpassword() {

    }

</script>

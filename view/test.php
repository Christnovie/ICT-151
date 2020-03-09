<?php
/**
 * ICT-151 - test.php
 *version : ${VERSION}
 *Initial version by: Christnovie.KIALA-BI
 *Initial version created on : 06.03.2020
 *Time : 08:52
 */
?>

<form action="" method="post">
    <input type="text"placeholder="mot de passe" name="password"><input type="submit">
</form>
<?php
$password = $_POST['password'];
$hach = password_hash($password,PASSWORD_DEFAULT);
if(isset($password))
echo $hach;
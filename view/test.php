<?php
/**
 * ICT-151 - test.php
 *version : ${VERSION}
 *Initial version by: Christnovie.KIALA-BI
 *Initial version created on : 06.03.2020
 *Time : 08:52
 */
?>
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

<?php
$password = $_POST['password'];
$hach = password_hash($password,PASSWORD_DEFAULT);
if(isset($password))
echo $hach;

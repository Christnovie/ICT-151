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
        <form action="index.php?action=newItem" id="formulaireNewItem" name="formRegister" enctype="multipart/form-data" method="post">
            <label>image</label>
            <img name="ImageUpload" src="">
            <input type="file" accept="image/*" id="" name="newImage"   placeholder="import" value=""  required><br>
            <label>Name</label>
            <input type="text" id="" name="newName"   placeholder="input name" value=""  required><br>
            <label>Marque</label>
            <input type="text" id="" name="newMarque"   placeholder="input Brand" value=""  required><br>
            <label>Model</label>
            <input type="text" id="" name="newModel"   placeholder="input model" value=""  required><br>
            <label>Taille</label>
            <input type="number" id="" name="newLength"   placeholder="" value=100  required>cm<br>
            <label>Quantité</label>
            <input type="number" id="" name="newqty"   placeholder="Quantity " value=""  required><br>
            <label>description</label>
            <textarea name="newDescrip" required placeholder="Enter Description" ></textarea> <br>
            <label>Prix</label>
            <input type="number" id="" name="newPrice"   placeholder="" value=""  required><br>
            <button type="submit" id="registered" name="newItemAdd">Create</button><input type="reset" value="Reset"> <button type="submit" id="registered" name="newItemAdd"><a href="index.php?action=login">Edit </a></button>

        </form>
        <?php  echo $_GET['errorConfirme']?>
    </div>



<?php



$contenu = ob_get_clean();
require 'gabarit.php';
?>
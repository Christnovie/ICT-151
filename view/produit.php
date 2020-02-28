<?php
/**
 * ICT-151 - produit.php
 *version : ${VERSION}
 *Initial version by: Christnovie.KIALA-BI
 *Initial version created on : 28.02.2020
 *Time : 11:33
 */
/** tampon de fliux stocké en mémoire */
ob_start();
$titre = "Rent a show - Acceuil";
if(isset($_SESSION['login']))
    $itemAcces = "additem";
else
    $itemAcces = "login";
$index = 0;
?>
    <link href="view/content/scripts/bootstrap/css/boostrapShop" rel="stylesheet" type="text/css">
    <h1> Snowboard shop </h1>



    <div class="contentArea">
        <div class="divPanel notop page-content">
            <div class="row-fluid">
                <div class="span12">
                    <div class="yoxview">
                        <div class="row-fluid">

                            <?php
                            /** @var  $item *reading into the array and pin up data of snow with information */
                            foreach ($_GET['prContent'] as $item)  : ?>


                                    <?php if($item['id'] == $index || $item['id'] == 1) : ?>

                                        <ul class="thumbnails">


                                        <?php $index = $index+4; endif;?>

                                    <?php   if($index >= $item['id']) : ?>



                                        <li class="span3">
                                            <div class="thumbnail">
                                                <a href="<?='index.php?action='.$itemAcces.'&element='.$item['brand'].' '.$item['model']?>" name="<?= $item->code?>"><img src="<?= $item['photo']?>" alt="Thumbnail Placeholder" title="Thumbnail Placeholder" /></a>
                                                <div class="caption">
                                                    <h3> <?= $item['brand'] ?><br> </h3>
                                                    <p> <?= $item['model'] ?></p>
                                                    <textarea id="story" name="story"
                                                              rows="5" >
                                                            <?= $item['description'] ?>
                                                        </textarea>

                                                    <p><a href="<?='index.php?action='.$itemAcces.'&element='.$item->brand.' '.$item->model?>" class="btn btn-primary">Buy</a></p>
                                                </div>
                                            </div>
                                        </li>

                                    <?php endif;?>
                                    <?php if($item->id == $index) : ?>
                                        </ul>;
                                    <?php endif; ?>
                                <?php endforeach; ?>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/End Portfolio Content Area-->
<?php

$contenu = ob_get_clean();
require 'gabarit.php';

?>
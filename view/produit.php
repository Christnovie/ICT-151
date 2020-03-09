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
$titre = "Rent a show - Store";
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
                                                <a href="<?='index.php?action='.$itemAcces.'&element='.$item['code'].' '.$item['brand']?>" name="<?= $item->code?>"><img src="<?= $item['photo']?>" alt="Thumbnail Placeholder" title="Thumbnail Placeholder" /></a>
                                                <div class="caption">
                                                    <h3> <?= $item['code'] ?><br> </h3>
                                                    <p> <strong>Marque :</strong> <?= ' '.$item['brand'] ?></p>
                                                    <p> <strong>Model :</strong> <?=' '.$item['model'] ?></p>
                                                    <p> <strong>Longueur : </strong> <?= $item['snowLength'] ?> cm</p>
                                                    <p><strong>Price :</strong> <?=' '.$item['dailyPrice'] ?>.- par jour</p>
                                                    <p> <strong>Quantité : </strong> <?= $item['qtyAvailable'] ?></p>
                                                    <textarea id="story" style="width: 95%"  name="story"
                                                              rows="4"  >
                                                            <?= $item['description'] ?>
                                                        </textarea>

                                                    <p><a href="<?='index.php?action='.$itemAcces.'&element='.$item->brand.' '.$item->model?>" class="btn btn-primary transparent-bg">Buy</a></p>
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
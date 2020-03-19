<?php
/**
 * ICT-151 - prVente.php
 *version : ${VERSION}
 *Initial version by: Christnovie.KIALA-BI
 *Initial version created on : 11.03.2020
 *Time : 14:00
 */
ob_start();
$titre = "Rent a show - Store";
if(isset($_SESSION['login']))
    $itemAcces = "newItem";
else
    $itemAcces = "login";
$index = 0;
?>
    <link href="view/content/scripts/bootstrap/css/boostrapShop.css" rel="stylesheet" type="text/css">
    <h1> Snowboard shop </h1>




    <div class="contentArea">
        <a href="index.php?action=newItem" class="btn-success" style="float: right">Ajouter un nouveau snow</a>
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
                                            <a data-toggle="modal"  <?php $code=$item['code'] ?>href="#portofolio<?=$code?>"<?="name=" ?><?= $item['code']?>><img src="<?= $item['photo']?>" alt="Thumbnail Placeholder" title="Thumbnail Placeholder" /></a>
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
                                                <div class="portfolio-modal modal fade" id="portofolio<?=$code?>" tabindex="-1" role="dialog" style="display: none;" aria-hidden="true">
                                                    <div class="modal-dialog" >
                                                        <div class="modal-content">
                                                            <div class="container" style="width: 100%">
                                                                <div class="row">
                                                                    <div class="col-lg-8 mx-auto">
                                                                        <div class="modal-body">
                                                                            <!-- Project Details Go Here -->
                                                                            <h2 class="text-uppercase"><?= $item['code'] ?></h2>

                                                                            <img class="img-fluid d-block mx-auto" style="float:inside;width: 80% " src="view/content/images/<?=$item['code'] ?>.jpg" alt="">
                                                                            <p><?= $item['description']?></p>
                                                                            <ul class="list-inline">
                                                                                <li> <strong>Marque :</strong> <?= ' '.$item['brand'] ?></li>
                                                                                <li> <p><strong>Model :</strong> <?=' '.$item['model'] ?></p></li>
                                                                                <li> <p><strong>Longueur : </strong> <?= $item['snowLength'] ?> cm</p></li>
                                                                                <li> <p><strong>Price :</strong> <?=' '.$item['dailyPrice'] ?>.- par jour</p></li>
                                                                                <li> <p><strong>Quantité : </strong> <?= $item['qtyAvailable'] ?></p></li>


                                                                            </ul>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-primary">buy</button>
                                                    <button class="btn btn-primary" data-dismiss="modal" type="button">
                                                        <i class="fas fa-times"></i>
                                                        Close Project</button>
                                                </div>
                                                <p><a href="<?='index.php?action='.$itemAcces.'&element='.$item?>" class="btn btn-primary transparent-bg">Editer</a></p>
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


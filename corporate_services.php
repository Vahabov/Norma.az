<!DOCTYPE html>
<html lang="az">
<head>
    <?php include("inc/head.php"); ?>
</head>
<body class="az">



<?php
include("inc/header.php")
?>


<section class="news-inner">
    <div class="container">
        <div class="row">
            <div class="invoice-head col-xs-12">
                <div class="col-md-4 col-sm-5 col-xs-6">
                    <h4>KORPORATİV XİDMƏTLƏR </h4>
                </div>
                <div class="col-md-8 col-sm-7 col-xs-6">
                    <ol class="breadcrumb web">
                        <li><a href="/">Ana səhifə </a></li>
                        <li class="active"> KORPORATİV XİDMƏTLƏR</li>
                    </ol>
                    <ol class="breadcrumb mobile">
                        <li><a href="/">... </a></li>
                        <li class="active">KORPORATİV XİDMƏTLƏR</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
     <div class="container">
        <div class="row relative corporate">
            <div class="col-md-9 op " id="op">


                <?php
                    for($i=1;$i<=10;$i++){
                ?>
                <div class="once_panel_full">
                    <div class="once_panel panel_toggle">
                        <div class="row">
                            <div class="col-md-1 col-sm-1 col-xs-2">
                                <input type="checkbox" class="op_check">
                            </div>
                            <div class="col-md-11 col-xs-10"   data-toggle="collapse" data-parent="#op" href="#<?= $i?>collapse">
                                <div class="row">
                                    <div class="col-md-9 col-sm-9 col-xs-6">
                                        <p class="op_text">
                                            Lorem Ipsum məhdudiyyətlər.
                                        </p>
                                    </div>
                                    <div class="col-md-3 col-sm-2 col-xs-2">
                                        <p class="op_price">
                                            50 <sup class="manat">m</sup>
                                        </p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="op_desc" id="<?= $i?>collapse">
                        Web dizayn saxta mətn istifadə bir məhdudiyyət bu mətn oxumaq heç vaxt ki, onun faktiki okunabilirlik yoxlamaq deyil. Dummy mətn ilə nəzərdə Bundan əlavə, düsturlar newsrooms sonra ayrılan yer çox deyil, sadə adları və ya qeyri-dəqiq etmək məcbur yer düzgün edirlər.
                    </div>
                </div>
                <?php } ?>

            </div>
            <div class="col-md-3">
                <div class="op_right_panel">
                    <div class="op_right_head">
                        2 Xidmət seçilib
                    </div>
                    <div class="op_right_text">
                        <p class="op_right_text_desc">Ödəniləcək Məbləğ</p>
                        <p class="op_right_text_price">100 AZN </p>
                        <button class="btn btn-gold">Ödənişi tamamla</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>

<?php
include ("inc/footer.php");
?>

<?php
include ("inc/foot.php");
?>
</body>
</html>

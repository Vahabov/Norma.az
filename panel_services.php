
<!DOCTYPE html>
<html lang="az">
<head>
    <?php include("inc/head.php"); ?>
</head>
<body class="az">



<?php
include("inc/header.php")
?>
<section class="content ">
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="page-head col-xs-12">
                    <div class="col-md-3 col-sm-6 col-xs-6"><h4>İSTİFADƏÇİ <span>PANELİ</span></h4></div>
                    <div class="col-md-9 col-sm-6 col-xs-6"><span class="user-code">MÜŞTƏRİ KODU:  <b>0000663</b></span>
                        <ol class="breadcrumb web">
                            <li><a href="/">Ana səhifə </a></li>
                            <li class="active">İstifadəçi paneli</li>
                        </ol>
                    </div>
                </div>
                <div id="sticky-anchor"></div>
                <div class="panel-page col-xs-12">
                    <div class="row relative">
                        <?php include "inc/sidebar.php"; ?>
                        <div class="col-md-9 col-sm-11 col-xs-11 coin" shop="0">

                            <div class="row relative">
                                <div class="col-md-9 op" id="op">


                                    <?php
                                    for($i=1;$i<=10;$i++){
                                        ?>
                                        <div class="once_panel_full">
                                            <div class="once_panel panel_toggle">
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-2 col-xs-2">
                                                        <input type="checkbox" class="op_check op_check_panel">
                                                    </div>
                                                    <div class="col-md-10 col-xs-10"   data-toggle="collapse" data-parent="#op" href="#<?= $i?>collapse">
                                                        <div class="row">
                                                            <div class="col-md-9 col-sm-9 col-xs-6">
                                                                <p class="op_text">
                                                                    Lorem Ipsum məhdudiyyətlər.
                                                                </p>
                                                            </div>
                                                            <div class="col-md-3 col-sm-2 col-xs-4">
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
                    </div>
                </div>
            </div>
        </div>
    </section>

</section>

<?php
include ("inc/footer.php");
?>

<?php
include ("inc/foot.php");
?>
</body>
</html>

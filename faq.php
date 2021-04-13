
<!DOCTYPE html>
<html lang="az">
<head>
    <?php include("inc/head.php"); ?>
</head>
<body class="az">



<?php
include("inc/header.php")
?>
<section class="questions rules brands">
    <div class="container">
        <div class="row">
            <div class="invoice-head col-xs-12">
                <div class="col-md-4 col-sm-5 col-xs-6">
                    <h4>Suallar </h4>
                </div>
                <div class="col-md-8 col-sm-7 col-xs-6">
                    <ol class="breadcrumb web">
                        <li><a href="https://limak.az/az">Ana səhifə </a></li>
                        <li class="active"> Suallar</li>
                    </ol>
                    <ol class="breadcrumb mobile">
                        <li><a href="index.html">... </a></li>
                        <li class="active">Suallar</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>        <div class="news-body">
        <div class="container">
            <div class="row relative">
                <div class="col-md-3 col-sm-4 col-xs-12 web-xs">
                    <div class="brands-left">
                        <div class="left-top">
                            <div class="left-head relative">
                                <h4>Köməkçi bölmələr</h4>
                            </div>
                            <ul class="list-unstyled">
                                <li class="active">
                                    <a href="faq.php">Qaydalar</a>
                                </li>
                                <li>
                                    <a href="faq.php">Suallar</a>
                                </li>
                                <li class="">
                                    <a href="faq.php">Gizlilik şərtləri</a>
                                </li>
                                <li class="">
                                    <a href="about.php">Haqqımızda</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12 mobile-xs">
                    <div class="brands-left">
                        <div class="left-top-mob block">
                            <div class="left-head relative">
                                <h4>Köməkçi bölmələr</h4>Test
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    Suallar                                        <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li>
                                        <a href="/az/istifadeci-qaydalari">Qaydalar</a>
                                    </li>
                                    <li class="active">
                                        <a href="/az/suallar">Suallar</a>
                                    </li>
                                    <li>
                                        <a href="/az/gizlilik-sertleri">Gizlilik şərtləri</a>
                                    </li>
                                    <li>
                                        <a href="/az/about-us">Haqqımızda</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <div class="brands-right">
                        <div class="row">
                            <div class="col-xs-12">
                                <h2>ƏN ÇOX VERİLƏN SUALLAR</h2>
                                <div class="panel-group" id="accordion">

                                    <?php for ($i=1;$i<=15;$i++){?>
                                    <div class="panel panel-default ">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#<?= $i?>collapseOne">
                                                    Kartımdan nə qədər pul çıxacaq?
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="<?= $i?>collapseOne" class="panel-collapse collapse ">
                                            <div class="panel-body">
                                                Sifariş verərkən kartınızdan kəsiləcək tranzaksiya faizi kartınızın aid olduğu bank tərəfindən müəyyənləşdirilir.

                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>

                                </div>
                            </div>
                        </div>
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

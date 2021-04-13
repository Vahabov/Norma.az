
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
                    <h4>Xəbərlər </h4>
                </div>
                <div class="col-md-8 col-sm-7 col-xs-6">
                    <ol class="breadcrumb web">
                        <li><a href="https://limak.az/az">Ana səhifə </a></li>
                        <li class="active"> Xəbərlər</li>
                    </ol>
                    <ol class="breadcrumb mobile">
                        <li><a href="index.html">... </a></li>
                        <li class="active">Xəbərlər</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="last-news all-news">
        <div class="container">

            <div class="row">
                <?php for ($i=1;$i<=4;$i++) { ?>
                <div class="col-md-4 col-sm-4 col-xs-12 news_block">
                    <div class="overlay">
                        <a href="newsIn.php">
                            <img src="img/news1.png" class="img-responsive" alt="news-01">
                            <div class="caption">
                                <h4>Aldığımız məhsulları 14 gün müddətində geri qaytara bilərik. Amma hansını?</h4>
                                <p>
                                    <i class="fa fa-calendar"></i>04.10.2020
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 news_block">
                    <div class="overlay">


                        <a href="newsIn.php">
                            <img src="img/news2.png" class="img-responsive" alt="news-01">
                            <div class="caption">
                                <h4>Boşanma hansı hallarda təxirə salınır</h4>
                                <p>
                                    <i class="fa fa-calendar"></i>03.10.2020
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 news_block">
                    <div class="overlay">


                        <a href="newsIn.php">
                            <img src="img/news3.png" class="img-responsive" alt="news-01">
                            <div class="caption">
                                <h4>İş rejimi gündə 8, həftədə 40 saat</h4>
                                <p>
                                    <i class="fa fa-calendar"></i>30.09.2020
                                </p>
                            </div>
                        </a>
                    </div>
                </div>

                <?php } ?>


                <div class="text-center news-left">
                    <ul class="pagination">
                        <li class="page-item pagination-prev-nav">
                            <a href="#" aria-label="Previous" class="page-link"><span aria-hidden="true">
                                    &lt;
                                </span><span class="sr-only">Previous</span></a></li>
                        <li class="page-item pagination-page-nav ">
                            <a href="#" class="page-link">
                        1
                        <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="page-item pagination-page-nav active">
                            <a href="#" class="page-link">
                                2
                                <!----></a>
                        </li>
                        <li class="page-item pagination-page-nav">
                            <a href="#" class="page-link">
                                3
                                <!----></a>
                        </li>
                        <li class="page-item pagination-page-nav"><a href="#" class="page-link">
                        4
                        <!----></a></li><li class="page-item pagination-next-nav">
                            <a href="#" aria-label="Next" class="page-link"><span aria-hidden="true">&gt;</span><span class="sr-only">Next</span></a></li></ul>
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

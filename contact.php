
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
                    <h4>Əlaqə </h4>
                </div>
                <div class="col-md-8 col-sm-7 col-xs-6">
                    <ol class="breadcrumb web">
                        <li><a href="">Ana səhifə </a></li>
                        <li class="active"> Əlaqə</li>
                    </ol>
                    <ol class="breadcrumb mobile">
                        <li><a href="index.php">... </a></li>
                        <li class="active">Əlaqə</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="news-body">
        <div class="container driver_service">
            <div class="row relative">
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-xs-6 ">
                            <div class="form-group">
                                <label for="name">Ad *</label>
                                <input type="text" name="name" class="form-control" id="name" placeholder="Ad * ">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label for="surname">Soyad *</label>
                                <input type="text" class="form-control" id="surname" placeholder="Soyad * ">
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label for="surname">Text *</label>
                                <textarea name="text" class="form-control" rows="6"></textarea>
                            </div>
                        </div>
                        <div class="col-xs-2">
                            <button class="btn btn-norma">Göndər</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2149.520387234535!2d49.82682369799865!3d40.36716547338556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40307d164e83a7d9%3A0x899cce04d36a5797!2sLimak.az!5e0!3m2!1sru!2s!4v1590589089830!5m2!1sru!2s" width="100%" height="230"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                        <a href="https://www.maps.ie/map-my-route/">Create route map</a>
                    </iframe>
                    <div class="contact_icons">
                        <a><img src="img/icons/facebook.png" /></a>
                        <a><img src="img/icons/instagram.png" /></a>
                        <a><img src="img/icons/twitter.png" /></a>
                        <a><img src="img/icons/telegram.png" /></a>
                    </div>
                </div>
            </div>
            <hr class="hr" />
            <div class="row contact_foot">
                <div class="col-md-3"><img src="img/icons/phone.svg"> +994 12 488 37 23</div>
                <div class="col-md-4"><img src="img/icons/mail.svg">info@norma.az</div>
                <div class="col-md-5"><img src="img/icons/location.svg">Azərbaycan, Bakı. Nəcəfqulu Rəfiyev küç. məhəllə 11/45</div>
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

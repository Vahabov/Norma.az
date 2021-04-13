
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
                            <div class="row relative user_panel">
                                <div class="nav-panel">
                                    <ul class="nav navbar-nav navbar-left">
                                        <li class="active"><a href="panel_queries.php">Gözləyən sorğu</a></li>
                                        <li><a href="executing_queries.php">İcrada olan sorğu</a></li>
                                        <li><a href="finished_queries.php">Tamamlanmış sorğu</a></li>
                                    </ul>

                                </div>

                                <div class="query_head">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12 query_button query_title">
                                            <img src="img/icons/pencil.png"> Sorğu yarat
                                        </div>
                                        <div class="col-md-6 col-xs-12 pull-right">
                                            <button class="btn btn-noeffect pull-right"><img src="img/icons/undo.png" alt="">  Geri</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="query_create_body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="col-xs-12 ">
                                                <div class="form-group">
                                                    <label for="name">Başlıq *</label>
                                                    <select class="form-control">
                                                        <option>Boşanma prosesi necə başverir</option>
                                                        <option>Boşanma prosesi necə başverir</option>
                                                        <option>Boşanma prosesi necə başverir</option>
                                                        <option>Boşanma prosesi necə başverir</option>
                                                        <option>Boşanma prosesi necə başverir</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 ">
                                                <div class="form-group">
                                                    <label for="name">Başlıq *</label>
                                                    <textarea class="form-control" rows="6"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="form-group">
                                                    <label for="name">Fayl *</label>
                                                    <input type="file" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <button class="btn-effect">Göndər</button>
                                            </div>

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

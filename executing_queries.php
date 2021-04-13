
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
                                        <li><a href="panel_queries.php">Gözləyən sorğu</a></li>
                                        <li class="active"><a href="executing_queries.php">İcrada olan sorğu</a></li>
                                        <li><a href="finished_queries.php">Tamamlanmış sorğu</a></li>
                                    </ul>

                                </div>

                                <div class="query_head">
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12 query_button">
                                            <button class="btn btn-effect"><i class="glyphicon glyphicon-plus"></i>  Sorğu yarat</button>
                                        </div>
                                        <div class="col-md-4 col-xs-12 pull-right">
                                            <input type="text" class="form-control" placeholder="Axtarış">
                                        </div>
                                    </div>
                                </div>

                                <div class="query_list col-md-12">
                                    <table class="table table-striped table-queries">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Sorğu</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Bir çox proqram araçları mövcud təsadüfi ...
                                            <br />
                                                <span>10.09.2020</span>
                                            </td>
                                            <td><img src="img/icons/orange-point.png"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>
                                            <td>Bir çox proqram araçları mövcud təsadüfi ...
                                            <br />
                                                <span>10.09.2020</span>
                                            </td>
                                            <td><img src="img/icons/orange-point.png"></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Bir çox proqram araçları mövcud təsadüfi ...
                                            <br />
                                                <span>10.09.2020</span>
                                            </td>
                                            <td><img src="img/icons/orange-point.png"></td>
                                        </tr>
                                        </tbody>
                                    </table>
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

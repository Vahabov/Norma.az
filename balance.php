
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
                                <div class="balance-block col-md-5 col-sm-5 col-xs-12">
                                    <div class="balance">
                                        <img src="img/balance_bg.png" alt="balans" class="img-responsive balance_bg">
                                        <div class="balance-count">
                                            <span>Balansım</span>
                                            <br>
                                            <span class="count">5.2 <sup>M</sup></span>
                                        </div>
                                        <div class="balance-date">
                                            <span>Son əlavə tarixi</span> <br>
                                            <span class="time" >05.08.2020</span>
                                        </div>
                                        <div class="balance-text">
                                            Azərbaycana çatdırılma haqqının ödənilməsi və online kuryer sifarişi üçün balansınızı artıra bilərsiniz.
                                            <p><b> ARTIRILAN BALANS GERİ QAYTARILMIR</b></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 col-sm-7 col-xs-12 right-side increase-balance">
                                    <div class="right-top block">
                                        <div class="row">
                                            <div class="col-md-9 col-sm-9 col-xs-9">
                                                <h4>Milli Ön üzərindən balansınızı artırın</h4>
                                                <form action="">
                                                    <div class="input-group border-radius">
                                                        <label>
                                                            <input type="text" name="code" placeholder=" " readonly="readonly" value="123456" class="form-control inputText">
                                                            <p>Hesab Nömrəsi: </p>
                                                        </label></div>
                                                </form>
                                                <p>
                                                    Milli Ön terminalına yaxınlaşırsınız, lorem ipsum dizayn nəşrlərində istifadə olunan düzgün olmayan mətndir. Dəqiq quruluşa malik olmayan bu mətn latincada.
                                                </p></div>
                                            <div   class="col-md-3 col-sm-3 col-xs-3">
                                                <img src="img/terminal.png" alt="terminal" class=" center-block">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div   class="col-xs-12 basket">
                                    <div   class="order-body">
                                        <div   class="block">
                                            <div   class="coin-table">
                                                <div   class="select-all">
                                                    <div   class="filter">
                                                        <div class="form-group">
                                                            <label for="sort" class="col-sm-3 control-label"> Filter </label>
                                                            <div class="col-sm-9">
                                                                <select class="form-control" name="sort" id="sort">
                                                                    <option value="1">Bütün</option>
                                                                    <option value="12">Bu ay</option>
                                                                    <option value="13">Keçən ay</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div   class="right-side">
                                                        <button type="button" class="transparent">
                                                            <img src="img/excel.png" alt="excel">
                                                            <span>Excel faylda yaddaşa ver</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <table   class="table table-bordered">
                                                    <thead>
                                                    <tr>
                                                        <th>Əməliyyat</th>
                                                        <th>Məbləğ</th>
                                                        <th>Tarix</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>Million TRY Balans artirma</td>
                                                        <td>3.98 Tl</td>
                                                        <td>2020-06-08 14:22:56</td>
                                                    </tr>
                                                    </tbody>
                                                </table> <!---->
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

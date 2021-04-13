
<!DOCTYPE html>
<html lang="az">
<head>
    <?php include("inc/head.php"); ?>
</head>
<body class="az">



<?php
include("inc/header.php")
?>

<section class="countries brands tarifs container">
    <div class="container">
        <div class="row">
            <div class="invoice-head col-xs-12">
                <div class="col-md-4 col-sm-5 col-xs-6">
                    <h4>QEYDİYYAT </h4>
                </div>
                <div class="col-md-8 col-sm-7 col-xs-6">
                    <ol class="breadcrumb web">
                        <li><a href="https://limak.az/az">Ana səhifə </a></li>
                        <li class="active"> Qeydiyyat</li>
                    </ol>
                    <ol class="breadcrumb mobile">
                        <li><a href="index.html">... </a></li>
                        <li class="active">Qeydiyyat</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="countries-body register_block">
        <div class="container">
            <div class="row relative">
                <div class="col-xs-12">
                    <h2 class="text-center">QEYDİYYAT</h2>
                    <ul class="nav nav-tabs reg-tabs col-md-8 col-md-offset-2" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#tab1" aria-controls="home" role="tab" data-toggle="tab" class="left_a">
                                FİZİKİ ŞƏXS
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#tab2" aria-controls="home" role="tab" data-toggle="tab" class="right_a">
                                HÜQUQİ ŞƏXS
                            </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                    <!-- Tab panes -->
                    <div class="tab-content block">

                        <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                            <form method="POST" action="/register">
                                <div class="col-md-8 col-md-offset-2 register_form">
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
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="form-group">
                                                <label for="phone">Telefon *</label>
                                                <input type="text" name="phone" class="form-control" id="phone" placeholder="Telefon * ">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 ">
                                            <div class="form-group">
                                                <label for="email">Email *</label>
                                                <input type="text" name="email" class="form-control" id="email" placeholder="Email * ">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6 ">
                                            <div class="form-group">
                                                <label for="password">Şifrə</label>
                                                <input type="password" name="password" class="form-control" id="password" placeholder="Şifrə">
                                            </div>

                                        </div>
                                        <div class="col-xs-6">
                                            <div class="form-group">
                                                <label for="repassword">Şifrə təkrarı</label>
                                                <input type="password" name="repassword" class="form-control" id="repassword" placeholder="Şifrə təkrarı">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="btn-part">
                                                <label class="check-button">
                                                    <span class="check-btn-text">
                                                        <a target="_blank" data-toggle="modal" data-target=".privacy-modal"> İstifadəçi qaydaları ilə razıyam</a>
                                                    </span>
                                                    <input value="1" name="terms" type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <button type="submit" class="btn-effect pull-right">
                                                    <span>TƏSDİQ ET</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab2">
                            <form method="POST" action="/register">
                                <div class="col-md-8 col-md-offset-2 register_form">
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
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="form-group">
                                                <label for="phone">Telefon *</label>
                                                <input type="text" name="phone" class="form-control" id="phone" placeholder="Telefon * ">
                                            </div>
                                        </div>
                                        <div class="col-xs-6 ">
                                            <div class="form-group">
                                                <label for="email">Email *</label>
                                                <input type="text" name="email" class="form-control" id="email" placeholder="Email * ">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6 ">
                                            <div class="form-group">
                                                <label for="password">Şifrə</label>
                                                <input type="password" name="password" class="form-control" id="password" placeholder="Şifrə">
                                            </div>

                                        </div>
                                        <div class="col-xs-6">
                                            <div class="form-group">
                                                <label for="repassword">Şifrə təkrarı</label>
                                                <input type="password" name="repassword" class="form-control" id="repassword" placeholder="Şifrə təkrarı">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="btn-part">
                                                <label class="check-button">
                                                    <span class="check-btn-text">
                                                        <a target="_blank" data-toggle="modal" data-target=".privacy-modal"> İstifadəçi qaydaları ilə razıyam</a>
                                                    </span>
                                                    <input value="1" name="terms" type="checkbox">
                                                    <span class="checkmark"></span>
                                                </label>
                                                <button type="submit" class="btn-effect pull-right">
                                                    <span>TƏSDİQ ET</span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
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


<div class="privacy-modal modal fade"  tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <header class="modal-header">
                <h5 style="display: inline-block;" class="modal-title">
                    <h3>"NORMA" MMC-nin istifadəçi qaydaları</h3>
                </h5>
                <button type="button" class="close"  data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </header>
            <main class="modal-body">
                <div >

                    <ul>
                        <li>
                            İstifadəçi sistemdə qeydiyyatdan keçməklə, şəxsi məlumatlarını tələb
                            olunan qaydada qeyd etməlidir.
                        </li>
                        <li>
                            İstifadəçi sistemdə qeydiyyatdan keçməklə, şəxsi məlumatlarını tələb
                            olunan qaydada qeyd etməlidir.
                        </li>
                        <li>
                            İstifadəçi sistemdə qeydiyyatdan keçməklə, şəxsi məlumatlarını tələb
                            olunan qaydada qeyd etməlidir.
                        </li>
                        <li>
                            İstifadəçi sistemdə qeydiyyatdan keçməklə, şəxsi məlumatlarını tələb
                            olunan qaydada qeyd etməlidir.
                        </li>
                        <li>
                            İstifadəçi sistemdə qeydiyyatdan keçməklə, şəxsi məlumatlarını tələb
                            olunan qaydada qeyd etməlidir.
                        </li>
                        <li>
                            İstifadəçi sistemdə qeydiyyatdan keçməklə, şəxsi məlumatlarını tələb
                            olunan qaydada qeyd etməlidir.
                        </li>
                        <li>
                            İstifadəçi sistemdə qeydiyyatdan keçməklə, şəxsi məlumatlarını tələb
                            olunan qaydada qeyd etməlidir.
                        </li>
                        <li>
                            İstifadəçi sistemdə qeydiyyatdan keçməklə, şəxsi məlumatlarını tələb
                            olunan qaydada qeyd etməlidir.
                        </li>
                        <li>
                            İstifadəçi sistemdə qeydiyyatdan keçməklə, şəxsi məlumatlarını tələb
                            olunan qaydada qeyd etməlidir.
                        </li>

                        <li>
                            İstifadəçi sistemdə qeydiyyatdan keçməklə, şəxsi məlumatlarını tələb
                            olunan qaydada qeyd etməlidir.
                        </li>
                        <li>
                            İstifadəçi sistemdə qeydiyyatdan keçməklə, şəxsi məlumatlarını tələb
                            olunan qaydada qeyd etməlidir.
                        </li>
                        <li>
                            İstifadəçi sistemdə qeydiyyatdan keçməklə, şəxsi məlumatlarını tələb
                            olunan qaydada qeyd etməlidir.
                        </li>


                    </ul>
                </div>
            </main>
            <footer class="modal-footer">
                <button class="btn btn-effect" data-dismiss="modal">
                    Təsdiq                </button>
            </footer>
        </div>
    </div>
</div>
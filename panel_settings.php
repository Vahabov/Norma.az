
<!DOCTYPE html>
<html lang="az">
<head>
    <?php include("inc/head.php"); ?>
</head>
<body class="az">



<?php
include("inc/header.php")
?>
<section class="content settings-panel">
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
                        <div class="settings order-body col-md-9 col-sm-11 col-xs-11">
                            <div class="row">
                                <div class="col-xs-12 courier-log">
                                    <div class="block col-xs-12">
                                        <ul class="nav nav-tabs web-xs" role="tablist">
                                            <li role="presentation" class="active">
                                                <a href="#tab1" aria-controls="home" role="tab" data-toggle="tab">Profil məlumatları</a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#tab2" aria-controls="profile" role="tab" data-toggle="tab">Şifrə məlumatları</a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#tab3" aria-controls="messages" role="tab" data-toggle="tab">Ş/V məlumatları</a>
                                            </li>
                                            <li role="presentation">
                                                <a href="#tab4" aria-controls="settings" role="tab" data-toggle="tab">Şirkət məlumatları</a>
                                            </li>
                                        </ul>
                                        <ul class="mobile-xs nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active replace">
                                                <a href="#tab1" aria-controls="home" role="tab" data-toggle="tab">
                                                    <span class="in_visible">Profil məlumatları</span>
                                                    <img src="img/icons/user.png" alt="user">
                                                </a>
                                            </li>
                                            <li role="presentation" class="replace">
                                                <a href="#tab2" aria-controls="profile" role="tab" data-toggle="tab">
                                                    <span class="in_visible">Şifrə məlumatları</span>
                                                    <img src="img/icons/padlock.png" alt="padlock">
                                                </a>
                                            </li>
                                            <li role="presentation" class="replace">
                                                <a href="#tab3" aria-controls="messages" role="tab" data-toggle="tab">
                                                    <span class="in_visible">Ş/V məlumatları</span>
                                                    <img src="img/icons/biometric.png" alt="biometric">
                                                </a>
                                            </li>
                                            <li role="presentation" class="replace">
                                                <a href="#tab4" aria-controls="settings" role="tab" data-toggle="tab">
                                                    <span class="in_visible">Şirkət məlumatları</span>
                                                    <img src="img/icons/setting.png" alt="setting">
                                                </a>
                                            </li>
                                        </ul>
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                                                <div class="right-content ">
                                                    <div class="profil-data form-list">
                                                        <form  id="profile">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="col-xs-6 ">
                                                                        <div class="form-group error-message">
                                                                            <label for="name">Ad *</label>
                                                                            <input type="text" name="name" class="form-control" id="name" placeholder="Ad * ">
                                                                            <span>Ad düzgün yazılmayıb</span>
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
                                                                    <div class="col-md-12 birthday_label">Doğum tarixi</div>
                                                                    <div class="col-xs-4 col-md-2">
                                                                        <div class="form-group">
                                                                            <label for="email">Gün *</label>
                                                                            <select class="form-control">
                                                                                <option value="">1</option>
                                                                                <option value="">1</option>
                                                                                <option value="">1</option>
                                                                                <option value="">1</option>
                                                                                <option value="">1</option>
                                                                                <option value="">1</option>
                                                                                <option value="">1</option>
                                                                                <option value="">1</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-4 col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="email">Ay *</label>
                                                                            <select class="form-control">
                                                                                <option value="">yanvar</option>
                                                                                <option value="">1</option>
                                                                                <option value="">1</option>
                                                                                <option value="">1</option>
                                                                                <option value="">1</option>
                                                                                <option value="">1</option>
                                                                                <option value="">1</option>
                                                                                <option value="">1</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-4 col-md-3">
                                                                        <div class="form-group">
                                                                            <label for="email">İl *</label>
                                                                            <select class="form-control">
                                                                                <option value="">2005</option>
                                                                                <option value="">1</option>
                                                                                <option value="">1</option>
                                                                                <option value="">1</option>
                                                                                <option value="">1</option>
                                                                                <option value="">1</option>
                                                                                <option value="">1</option>
                                                                                <option value="">1</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">

                                                                    <div class="col-xs-12 button-part">
                                                                        <button  type="submit" class="btn-effect">Yadda saxla</button>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="tab2">
                                                <div class="right-content ">
                                                    <div class="password-part form-list ">
                                                        <form @submit="changePassword" id="password_data">
                                                            <div class="row">
                                                                <div class="col-xs-12">
                                                                    <h4>Cari şifrə</h4>
                                                                    <div class="row">
                                                                        <div class="col-md-5 col-sm-5 col-xs-12">
                                                                            <div class="input-group border-radius">
                                                                                <label>
                                                                                    <input  type="password" class="form-control" name="currentPassword" id="nowpass" placeholder=" ">
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-12">
                                                                    <div class="new-password">
                                                                        <h4>Yeni şifrə təyin et</h4>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-5 col-sm-5 col-xs-12">
                                                                            <div class="row">
                                                                                <div class="col-xs-12">
                                                                                    <div class="input-group border-radius">
                                                                                        <label>
                                                                                            <input type="password" name="password" class="form-control inputText" id="password" placeholder="Yeni şifrə">
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xs-12">
                                                                                    <div  class="input-group border-radius">
                                                                                        <label>
                                                                                            <input type="password" name="cpassword" class="form-control inputText"  id="repeat-pass" placeholder="Şifrə Təkrarı">
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="ps-right col-md-7 col-sm-7 col-xs-12">
                                                                            <div class="password-right">

                                                                                <h4>Yeni şifrə əlavə edərkən diqqət edin!</h4>
                                                                                <p>Şifrənizin daha təhlükəsiz olması üçün tövsiyyə olunur.</p>
                                                                                <ul>
                                                                                    <li>Şifrənizdə böyük hərf istifadə edin</li>
                                                                                    <li>Şifrənizdə rəqəm istifadə edin</li>
                                                                                    <li>Şifrənizdə simvollardan istifadə edin</li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-12 button-part">
                                                                    <button type="submit" class="btn-effect">Yadda saxla</button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="tab3">
                                                <div class="right-content ">
                                                    <div class="profil-data form-list">
                                                        <form  id="profile">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="col-xs-6 ">
                                                                        <div class="form-group">
                                                                            <label for="serial_number">Ş/V seriya nömrəsi * </label>
                                                                            <input type="text" name="serial_number" class="form-control" id="serial_number" placeholder="Ş/V seriya nömrəsi * ">
                                                                         </div>
                                                                    </div>
                                                                    <div class="col-xs-6">
                                                                        <div class="form-group">
                                                                            <label for="fin">Fin *</label>
                                                                            <input type="text" class="form-control" id="fin" placeholder="Fin * ">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-xs-6">
                                                                        <div class="form-group">
                                                                            <label for="addr">Ş/V-dəki ünvan *</label>
                                                                            <input type="text" name="addr" class="form-control" id="addr" placeholder="Ş/V-dəki ünvan *">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-6 ">
                                                                        <div class="form-group">
                                                                            <label for="email">Cins *</label>
                                                                            <select class="form-control">
                                                                                <option value="">Kisi</option>
                                                                                <option value="">1</option>
                                                                                <option value="">1</option>
                                                                                <option value="">1</option>
                                                                                <option value="">1</option>
                                                                                <option value="">1</option>
                                                                                <option value="">1</option>
                                                                                <option value="">1</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="row">

                                                                    <div class="col-xs-12 button-part">
                                                                        <button  type="submit" class="btn-effect">Yadda saxla</button>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>

                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="tab4">
                                                <div class="right-content ">
                                                    <div class="profil-data form-list">
                                                        <form  id="profile">
                                                            <div class="row">
                                                                <div class="row">
                                                                    <div class="col-xs-6 ">
                                                                        <div class="form-group">
                                                                            <label for="serial_number">Sürücülük vəsiqəsinin nömrəsi * </label>
                                                                            <input type="text" name="serial_number" class="form-control" id="serial_number" placeholder="Sürücülük vəsiqəsinin nömrəsi *">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-6">
                                                                        <div class="form-group">
                                                                            <label for="fin">Texniki şəhadətnamə* </label>
                                                                            <input type="text" class="form-control" id="fin" placeholder="Texniki şəhadətnamə*">
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="row">

                                                                    <div class="col-xs-12 button-part">
                                                                        <button  type="submit" class="btn-effect">Yadda saxla</button>
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

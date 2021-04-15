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
                        <h4>İSTİFADƏÇİ QEYDİYYATI</h4>
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
            <div class="register_block">
                <div class="row relative">
                    <div class="col-xs-12">
                        <h2 class="text-center title-reg">QEYDİYYAT</h2>
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
                                <form action="#">
                                    <div class="two_column_inputs">
                                        <div class="input">
                                            <label for="name">Ad*</label>
                                            <input type="text" name="name" id="name" placeholder="Ad">
                                        </div>
                                        <div class="input">
                                            <label for="surname">Soyad*</label>
                                            <input type="text" name="surname" id="surname" placeholder="Soyad">
                                        </div>
                                    </div>
                                    <div class="two_column_inputs">
                                        <div class="phone_input">
                                            <label for="number">Telefon*</label>
                                            <div class="inputs">
                                                <select>
                                                    <option value="010">010</option>
                                                    <option value="011">011</option>
                                                    <option value="012">012</option>
                                                </select>
                                                <input type="number" id="number" placeholder="50 000 00 00">
                                            </div>
                                        </div>
                                        <div class="input">
                                            <label for="email">E-mail</label>
                                            <input type="email" name="email" id="email" placeholder="E-mail">
                                        </div>
                                    </div>
                                    <div class="foot">
                                        <div class="rules">
                                            <input value="1" name="terms" type="checkbox" id="terms">
                                            <label for="terms">
                                                <a target="_blank" data-toggle="modal" data-target=".privacy-modal">İstifadəçi qaydaları</a>
                                                <span> ilə razıyam</span>
                                            </label>
                                        </div>
                                        <button type="submit" class="btn_submit">
                                            Təsdİq et
                                        </button>
                                    </div>
                                </form>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="tab2">
                                <form action="#">
                                    <div class="two_column_inputs">
                                        <div class="input">
                                            <label for="companyname">Şirkət adı*</label>
                                            <input type="text" name="companyname" id="companyname" placeholder="Şirkət adı">
                                        </div>
                                        <div class="input success_mess">
                                            <label for="voen">VÖEN*</label>
                                            <input type="text" name="voen" id="voen" placeholder="VÖEN">
                                            <span class="message">Doğrudur!</span>
                                        </div>
                                    </div>
                                    <div class="two_column_inputs">
                                        <div class="input">
                                            <label for="secondname">Əlaqələndirici şəxs adı*</label>
                                            <input type="text" name="secondname" id="secondname" placeholder="Əlaqələndirici şəxs adı">
                                        </div>
                                        <div class="input">
                                            <label for="adress">Ünvan*</label>
                                            <input type="text" name="adress" id="adress" placeholder="Ünvan">
                                        </div>
                                    </div>
                                    <div class="two_column_inputs">
                                        <div class="phone_input">
                                            <label for="number2">Telefon*</label>
                                            <div class="inputs">
                                                <select>
                                                    <option value="010">010</option>
                                                    <option value="011">011</option>
                                                    <option value="012">012</option>
                                                </select>
                                                <input type="number" id="number2" placeholder="50 000 00 00">
                                            </div>
                                        </div>
                                        <div class="input error_mess">
                                            <label for="email2">E-mail</label>
                                            <input type="email" name="email" id="email2" placeholder="E-mail">
                                            <span class="message">Yazdığınız E-mail səhfdir</span>
                                        </div>
                                    </div>
                                    <div class="two_column_inputs">
                                        <div class="input">
                                            <label for="password">Şifrə*</label>
                                            <input type="text" name="password" id="password" placeholder="Şifrə">
                                        </div>
                                        <div class="input">
                                            <label for="passowrd2">Şifrənin təkrarı*</label>
                                            <input type="text" name="passowrd2" id="passowrd2" placeholder="Şifrənin təkrarı">
                                        </div>
                                    </div>
                                    <div class="foot">
                                        <div class="rules">
                                            <input value="1" name="terms" type="checkbox" id="terms">
                                            <label for="terms">
                                                <a target="_blank" data-toggle="modal" data-target=".privacy-modal">İstifadəçi qaydaları</a>
                                                <span> ilə razıyam</span>
                                            </label>
                                        </div>
                                        <button type="submit" class="btn_submit">
                                            Təsdİq et
                                        </button>
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
    include("inc/footer.php");
    ?>

    <?php
    include("inc/foot.php");
    ?>
</body>

</html>


<div class="privacy-modal modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <header class="modal-header">
                <h5 style="display: inline-block;" class="modal-title">
                    <h3>"NORMA" MMC-nin istifadəçi qaydaları</h3>
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </header>
            <main class="modal-body">
                <div>

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
                    Təsdiq </button>
            </footer>
        </div>
    </div>
</div>
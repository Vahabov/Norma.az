<!DOCTYPE html>
<html lang="az">

<head>
    <?php include("inc/head.php"); ?>
</head>

<body class="az">



    <?php
    include("inc/header.php")
    ?>

    <!-- +++++++++++++++++++++++ -->
    <section class="slide">
        <div class="container">
            <!-- when user not registered -->
            <!-- <div class="row head_bar">
                <div class="col-md-8 col-sm-12 col-xs-12 left-side">
                    <h3 class="titleSide">PROBLEMİNİZİ BİZƏ YAZARAQ HƏLL EDİN!</h3>
                    <form action="#">
                        <div class="input_row">
                            <input type="text" name="name" placeholder="Adınız">
                            <input type="text" name="surname" placeholder="Soyadınız">
                        </div>
                        <textarea class="textarea" placeholder="Qeydiniz"></textarea>
                        <div class="foot">
                            <button type="submit" class="btn_submit">
                                <span>Göndər</span>
                                <img src="img/icons/sendIcn.svg" alt="#">
                            </button>
                            <div class="info_message">
                                <img src="img/icons/infoIcn.svg" alt="#">
                                <span>Hörmətli müştəri tezliklə sizinlə əlaqə saxlanılacaq</span>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-4 col-sm-12 col-xs-12 right-side">
                    <img src="img/newbanner.png" class="img-responsive">
                </div>
            </div> -->
            <!-- when user registered -->
            <div class="row profile_bar">
                <div class="col-md-8 col-sm-12 col-xs-12 left_bar">
                    <div class="sidebar_inside">
                        <div class="user_info">
                            <a href="#" class="name">
                                <img src="img/icons/userSidebar.svg" class="injectable" alt="#">
                                <span>MAHİR VELİYEV</span>
                            </a>
                            <a href="#" class="customer_code">
                                <img src="img/icons/codeIcn.svg" alt="#">
                                <p>Müştəri kodu: <span>0000019</span></p>
                            </a>
                        </div>
                        <ul class="menu">
                            <li class="active_li">
                                <a href="#">
                                    <img class="injectable" src="img/menu-icons/question.svg" alt="">
                                    <span>Sorğular</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="injectable" src="img/menu-icons/packages.svg" alt="">
                                    <span>Alınan xidmətlər</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="injectable" src="img/menu-icons/consultation.svg" alt="">
                                    <span>Konsultasiyalar</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="injectable" src="img/menu-icons/wallet.svg" alt="">
                                    <span>Ödənişlər</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="injectable" src="img/menu-icons/settings.svg" alt="">
                                    <span>Tənzimləmələr</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img class="injectable" src="img/menu-icons/exit.svg" alt="">
                                    <span>Hesabdan çıx</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="informations">
                        <div class="top">
                            <div class="balance_block">
                                <div class="card">
                                    <div class="head">
                                        <div class="balance_col">
                                            <span class="title">Balansım</span>
                                            <span class="balance">
                                                100.00
                                                <img src="img/manat.svg" class="injectable" alt="">
                                            </span>
                                        </div>
                                        <div class="date_col">
                                            <span class="title">Son əlavə tarixi</span>
                                            <span class="date">09.09.2020</span>
                                        </div>
                                    </div>
                                    <div class="foot">
                                        <div class="left">
                                            <span>ARTIRILAN BALANS GERİ QAYTARILMIR</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="balance_tab_bar">
                                <div class="title">
                                    <img src="img/wallet.svg" alt="#">
                                    <span>BALANSI ARTIR</span>
                                </div>
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#tab1" aria-controls="home" role="tab" data-toggle="tab">Bank kartı ilə</a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#tab2" aria-controls="profile" role="tab" data-toggle="tab">MilliÖn ilə</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="bottom">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                                    <div class="input">
                                        <input type="number" placeholder="Məbləğ (AZN)">
                                    </div>
                                    <button type="button" class="btn_incr">
                                        <span>Balansı artır</span>
                                    </button>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="tab2">
                                    <div class="input">
                                        <input type="number" placeholder="Hesab Nömrəsi" id="aNumber">
                                        <label for="aNumber">6033</label>
                                    </div>
                                    <a target="_blank" data-toggle="modal" data-target=".privacy-modal" class="info_btn">
                                        <img src="img/info.svg" alt="#">
                                        <span>Necə?</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12 col-xs-12 right_bar">
                    <div class="top">
                        <div class="card_bar">
                            <h3 class="title_card">Abunəlİk növü</h3>
                            <img src="img/bigUser.svg" alt="#">
                            <span class="status">Fərdi</span>
                        </div>
                        <div class="card_bar">
                            <h3 class="title_card">Abunəlİk müddətİ</h3>
                            <div class="loader">
                                <progress id="send" value="20" max="100"></progress>
                                <progress id="recv" value="30" max="100"></progress>
                            </div>
                            <div class="info_subscribe">
                                <span class="year circle">
                                    1 il
                                </span>
                                <span class="week circle">
                                    4 həftə
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="head">
                            <h3 class="title_head">Alınan xİdmətlər</h3>
                            <a href="#">
                                <span>Digərləri</span>
                                <img src="img/icons/arrow.svg" class="injectable" alt="#">
                            </a>
                        </div>
                        <div class="items">
                            <a href="#" class="item_service">
                                <div class="icn">
                                    <img src="img/book.svg" alt="#">
                                </div>
                                <span class="name">
                                    Əmlak qeydiyyatı
                                </span>
                            </a>
                            <a href="#" class="item_service">
                                <div class="icn">
                                    <img src="img/555.svg" alt="#">
                                </div>
                                <span class="name">
                                    İntellektual mülkiyyət
                                </span>
                            </a>
                            <a href="#" class="item_service">
                                <div class="icn">
                                    <img src="img/777.svg" alt="#">
                                </div>
                                <span class="name">
                                    Əmək münasibətləri
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- +++++++++++++++++++++++++ -->
    <section class="how_it_works">
        <div class="container">
            <!-- <div class="">
                <h1>Necə işləyir ?</h1>
                <div class="block col-xs-12">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="block-inner">
                                <img src="img/work1.png" class="img-responsive" alt="box">
                                <p class="head">Qeydiyyatdan keç</p>
                                <p class="text">Norma.az saytında qeydiyyatdan keçməklə, istənilən hüquqi suala cavab tapa bilərsiniz.</p>
                                <div class="how_it_works_ox"><img src="img/ox.png"></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="block-inner">
                                <img src="img/work2.png" class="img-responsive" alt="box">
                                <p class="head">Paket seçin</p>
                                <p class="text">Sizə uyğun paketlərdən birini seçməklə bizimlə əlaqə saxlayıb xidmətlərimizdən istifadə edə bilərsiniz.</p>
                                <div class="how_it_works_ox"><img src="img/ox.png"></div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="block-inner">
                                <img src="img/work3.png" class="img-responsive" alt="box">
                                <p class="head">Zəng edin</p>
                                <p class="text">3-5 iş günü ərzində sifarişinizi Bakı anbarımızdan əldə edə və ya kuryer xidmətimizdən istifadə edə bilərsiniz.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- ++++++++ -->
            <h1 class="title_sect">Haqqımızda</h1>
            <div class="about_sect">
                <div class="left">
                    <img src="img/newLogoAbout.svg" class="logoAbout" alt="#">
                    <div class="content_sect">
                        <p>
                            Norma Hüquq Mərkəzi fiziki və hüquqi şəxslərə hüquq, konsaltinq, audit, mühasibatlıq və HR xidmətləri təklif edir.
                        </p>
                        <p>
                            Online hüquqi dəstək xidməti göstərməklə bir ilkə imza atan Norma Hüquq Mərkəzi 7/24 istifadəçilərin xidmətindədir.
                        </p>
                        <p>
                            Şirkət istifadəçilərinə sürücü hüquqi dəstək xidməti, fiziki şəxs üçün hüquqi xidmət, korporativ xidmət paketləri təklif edir.
                        </p>
                    </div>
                    <div class="foot">
                        <a href="#" class="link_about">
                            <span>DAHA COX</span>
                            <img src="img/icons/arrow.svg" alt="">
                        </a>
                    </div>
                    <img src="img/icons/dotsTop.svg" class="top_dots" alt="#">
                    <img src="img/icons/dotsBottom.svg" class="bottom_dots" alt="#">
                </div>
                <div class="right">
                    <div class="items">
                        <a href="#" class="item_sect">
                            <img src="img/x-icons/onlinekonsultasiya.svg" alt="#">
                            <span>Online konsultasiya</span>
                        </a>
                        <a href="#" class="item_sect">
                            <img src="img/x-icons/ailehuququ.svg" alt="#">
                            <span>Ailə hüququ</span>
                        </a>
                        <a href="#" class="item_sect">
                            <img src="img/x-icons/emekmunasibetleri.svg" alt="#">
                            <span>Əmək münasibətləri</span>
                        </a>
                        <a href="#" class="item_sect">
                            <img src="img/x-icons/vergimunasibetleri.svg" alt="#">
                            <span>Vergi münasibətləri</span>
                        </a>
                        <a href="#" class="item_sect">
                            <img src="img/x-icons/cinayethuququ.svg" alt="#">
                            <span>Cinayət hüququ</span>
                        </a>
                        <a href="#" class="item_sect">
                            <img src="img/x-icons/mulkiyyethuquqlari.svg" alt="#">
                            <span>Mülkiyyət hüquqları</span>
                        </a>
                        <a href="#" class="item_sect">
                            <img src="img/x-icons/intelektualmulkiyyet.svg" alt="#">
                            <span>İntellektual mülkiyyət</span>
                        </a>
                        <a href="#" class="item_sect">
                            <img src="img/x-icons/ferdisahibkarlar.svg" alt="#">
                            <span>Fərdi sahibkarlar</span>
                        </a>
                        <a href="#" class="item_sect">
                            <img src="img/x-icons/emlakqeydiyyati.svg" alt="#">
                            <span>Əmlak qeydiyyatı</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- +++++++++++++++++++++++++ -->
    <section class="blogs">
        <div class="container">
            <h1 class="title_blog">Bloq yazıları</h1>
            <div class="items">
                <div class="item_blog">
                    <a href="#" class="img">
                        <img src="img/news1.png" alt="#">
                    </a>
                    <div class="content_blog">
                        <a class="text" href="#">Aldığımız məhsulları 14 gün müddətində geri qaytara bilərik. Amma hansını?</a>
                        <div class="date">
                            <img src="img/icons/calendar.svg" alt="#">
                            <span>07.09.2020</span>
                        </div>
                    </div>
                </div>
                <div class="item_blog">
                    <a href="#" class="img">
                        <img src="img/news2.png" alt="#">
                    </a>
                    <div class="content_blog">
                        <a href="#" class="text">Aldığımız məhsulları 14 gün müddətində geri qaytara bilərik. Amma hansını?</a>
                        <div class="date">
                            <img src="img/icons/calendar.svg" alt="#">
                            <span>07.09.2020</span>
                        </div>
                    </div>
                </div>
                <div class="item_blog">
                    <a href="#" class="img">
                        <img src="img/news3.png" alt="#">
                    </a>
                    <div class="content_blog">
                        <a href="#" class="text">Aldığımız məhsulları 14 gün müddətində geri qaytara bilərik. Amma hansını?</a>
                        <div class="date">
                            <img src="img/icons/calendar.svg" alt="#">
                            <span>07.09.2020</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="foot">
                <a href="#" class="btn_foot">BÜTÜN BLOQLAR</a>
            </div>
        </div>
    </section>

    <!-- <section class="how_it_works services-home">
        <div class="container">
            <div class="">
                <h1>Xidmətlər</h1>
                <div class="block col-xs-12">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="block-inner">
                                <img src="img/service1.png" class="img-responsive" alt="box">
                                <p class="head">Sürücü xidməti</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="block-inner">
                                <img src="img/service2.png" class="img-responsive" alt="box">
                                <p class="head">Birdəfəlik xidmətlər</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="block-inner">
                                <img src="img/service3.png" class="img-responsive" alt="box">
                                <p class="head">Korporativ xidmətlər</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section class="last-news">
        <div class="container">
            <div class="section-header">
                <h2>Xəbərlər</h2>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="overlay">


                        <a href="https://limak.az/az/blog/110">
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
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="overlay">


                        <a href="https://limak.az/az/blog/109">
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
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="overlay">


                        <a href="https://limak.az/az/blog/108">
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
                <div class="text-center">
                    <a class="btn-effect text-center" href="/az/site/user-panel#/order">Bütün xəbərlər</a>
                </div>
            </div>
        </div>
    </section> -->
    <?php
    include("inc/footer.php");
    ?>

    <?php
    include("inc/foot.php");
    ?>
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
</body>

</html>
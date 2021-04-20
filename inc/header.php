<header class="index_header">
    <nav class="navbar navbar-default nav-top ">
        <div class="container">
            <div class="row">
                <ul class="nav navbar-nav nav-top-text">
                    <li>HÜQUQ BİR GÜN HƏR KƏSƏ LAZIM OLUR</li>
                </ul>
                <!-- <ul class="nav navbar-nav navbar-right">
                    <li class="login_btn">
                        <img src="img/icons/user.svg" alt="">
                        <a href="#" data-toggle="modal" data-target=".bs-example-modal-sm">Daxil ol</a>
                    </li>
                    <li><a href="/register">Qeydiyyat</a></li>
                </ul> -->
                <div class="nav navbar-nav user_info_block">
                    <button type="button" class="info_btn">
                        <img src="img/icons/user.svg" alt="">
                        <span>Kamil Vahabov</span>
                        <img src="img/icons/chevron.svg" alt="">
                    </button>
                    <div class="box_in">
                        <ul>
                            <li class="active_li">
                                <a href="#">
                                    Sorğular
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Alınan xidmətlər
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Konsultasiyalar
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Ödənişlər
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Tənzimləmələr
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Hesabdan çıx
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navin icerisinnen modal cixarildi. -->
    <div class="login modal fade bs-example-modal-sm login_modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <form method="POST" action="/login">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <img src="img/close1.png" alt="close" class="">
                        </span>
                    </button>
                    <div class="row">
                        <div class="login-left col-sm-6 col-xs-12">
                            <h3>Hesaba daxil ol</h3>
                            <select class="select">
                                <option value="Fərdi">Fərdi</option>
                                <option value="lorem">lorem</option>
                                <option value="ipsum">ipsum</option>
                            </select>
                            <div class="phone_input">
                                <div class="inputs">
                                    <select>
                                        <option value="010">010</option>
                                        <option value="011">011</option>
                                        <option value="012">012</option>
                                    </select>
                                    <input type="number" id="number" placeholder="50 000 00 00">
                                </div>
                            </div>
                            <!-- <div class="input-group border-radius">
                                <label>
                                    <input name="email" required type="text" class="form-control inputText" placeholder=" ">
                                    <span>E-mail *</span>
                                </label>
                            </div> -->
                            <div class="input-group border-radius">
                                <label>
                                    <input name="password" required type="password" required class="form-control inputText" placeholder=" ">
                                    <span>Şifrə* </span>
                                </label>
                            </div>
                            <div class="save-password">
                                <label class="check-button">
                                    <span>Yadda saxla</span>
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                                <a href="/az/password/reset">Şifrəni unutdum</a>
                            </div>
                            <div class="btn-password">
                                <button type="submit" href="" class="btn-enter btn-effect">Daxil ol</button>
                                <a href="/register" class="btn-log btn-effect">Qeydiyyat</a>
                            </div>
                        </div>
                        <div class="login-right col-sm-6">
                            <img src="img/login_back.png" class="pop-bg img-responsive" alt="pop_back">
                            <img src="img/login.png" alt="popup" class="pop-img">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- index_header -->
    <nav class="navbar navbar-default nav-bottom">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <img src="img/menu-mob.svg" class="toggleIcn injectable" alt="menu">
                    </button>
                    <a class="navbar-brand logoHeader" href="/">
                        <!-- ++++++++ -->
                        <img src="img/svgLogo.svg" class="img-responsive injectable" alt="logo">
                    </a>
                    <ul class="mobile navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">AZE
                                <!-- +++++++++++++++++++ -->
                                <img src="img/icons/new_chevron.svg" class="img-responsive injectable icnChevron" alt="arrow-bottom">
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a rel="alternate" hreflang="az" href="az">
                                        azərbaycanca
                                    </a>
                                </li>
                                <li>
                                    <a rel="alternate" hreflang="ru" href="ru">
                                        русский
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div id="collapse-menu" class="collapse-menu">

                    <ul class="nav navbar-nav navbar-right web">
                        <li class="dropdown web">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">AZ
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a rel="alternate" hreflang="az" href="/az">
                                        AZ
                                    </a>
                                </li>
                                <li>
                                    <a rel="alternate" hreflang="ru" href="/ru">
                                        RU
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="tel">
                            <!-- ++++++++ -->
                            <img src="img/247.svg" class="injectable timeIcn" alt="">
                        </li>

                        <li class="tel">
                            <!-- ++++++++ -->
                            <img src="img/qaynar.svg" class="injectable qaynar" alt="">
                        </li>
                        <!--<li>
                        <a  class="btn-effect" href="/az/site/user-panel#/order">SİFARİŞ ET</a>
                    </li>-->


                    </ul>
                    <ul class="nav navbar-nav navbar-left">
                        <li class="top tel mobile">
                            <img src="img/qaynar.svg">
                            <!--
                        <a href="tel:*9595">*0005 <span>DƏSTƏK <br> XƏTTİ</span></a>
                        <button class="close-menu"><img src="img/close-menu.png" alt="lose"></button>-->
                        </li>

                        <!-- <li class="mobile">
                         <a href="/az/site/user-panel#/order" class="btn-effect">SİFARİŞ ET</a>
                     </li>-->

                        <li class="mobile">
                        </li>
                        <li><a href="">Haqqımızda</a></li>
                        <li><a href="">Sürücü xidməti</a></li>
                        <li><a href="">Fərdi hüquq</a></li>
                        <li><a href="">Korporatov xidmətlər</a></li>
                    </ul>
                    <ul class="mobile list-time">
                        <li> Bazar ertəsi-şənbə</li>
                        <li><b>Sifariş et xidməti:</b></li>
                        <li>24 saat</li>
                        <li><b>Müştəri xidməti:</b></li>
                        <li>24 saat</li>
                        <li><b>Anbar:</b></li>
                        <li>Saat 10:00`dan - 21:00`a dək</li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="overlay-menu"></div>
</header>
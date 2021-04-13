
<!DOCTYPE html>
<html lang="az">
<head>
    <?php include("inc/head.php"); ?>
</head>
<body class="az">



<?php
include("inc/header.php")
?>

<section class="forget-pw invoice content">
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="invoice-head col-xs-12">
                        <div class="col-md-4 col-sm-5 col-xs-6">
                            <h4>Şifrəni unutdum </h4>
                        </div>
                        <div class="col-md-8 col-sm-7 col-xs-6">
                            <ol class="breadcrumb web">
                                <li><a href="https://limak.az/az">Ana səhifə </a></li>
                                <li class="active"> Şifrəni unutdum</li>
                            </ol>
                            <ol class="breadcrumb mobile">
                                <li><a href="index.html">... </a></li>
                                <li class="active">Şifrəni unutdum</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>                <div class="col-xs-12">
                <div class="forget-body block col-xs-12">
                    <div class="row relative">
                        <div class="forget-left col-sm-6 col-xs-12">
                            <form method="POST" action="https://limak.az/az/password/email">
                                <h1>Şifrə bərpası</h1>
                                <p>Şifrənizi bərpa etmə üçün qeydiyyat email ünvanınızı qeyd edin.</p>
                                <div class="input-group border-radius">
                                    <label>
                                        <input type="text" name="email" class="form-control inputText" placeholder=" ">
                                        <span>E-mail ünvanı</span>
                                    </label>
                                </div>
                                <button type="submit" class="btn-forget btn-effect">Şifrəni göndər</button>
                            </form>
                        </div>
                        <div class="forget-right col-sm-6 col-xs-12 text-center">
                            <div class="forget-bg">
                                <img src="img/reset.png" alt="forget-lock">
                            </div>
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

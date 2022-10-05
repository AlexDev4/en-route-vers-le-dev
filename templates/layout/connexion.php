<!DOCTYPE html>
<html class="loading" lang="fr" data-textdirection="ltr">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>Login Page - Make it Créative</title>
    <link rel="apple-touch-icon" href="assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="bo/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="bo/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="bo/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="bo/css/colors.css">
    <link rel="stylesheet" type="text/css" href="bo/css/components.css">
    <link rel="stylesheet" type="text/css" href="bo/css/themes/dark-layout.css">
    <link rel="stylesheet" type="text/css" href="bo/css/themes/bordered-layout.css">
    <link rel="stylesheet" type="text/css" href="bo/css/themes/semi-dark-layout.css">
    <link rel="stylesheet" type="text/css" href="bo/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="bo/css/plugins/forms/form-validation.css">
    <link rel="stylesheet" type="text/css" href="bo/css/pages/authentication.css">
    <link rel="stylesheet" type="text/css" href="bo/css/custom.css">

</head>
<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-cover">
                    <div class="auth-inner row m-0">
                        <a class="brand-logo" href="index.html">
                            <img class="logo-bo" src="<?= $this->Url->build('/img/logo.png') ?>"></img>
                        </a>
                        <?= $this->Flash->render() ?>
                        <?= $this->fetch('content') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/vendors/js/vendors.min.js"></script>
    <script src="assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
    <script src="assets/js/core/app-menu.js"></script>
    <script src="assets/js/core/app.js"></script>
    <script src="assets/js/scripts/pages/auth-login.js"></script>

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
</body>

</html>
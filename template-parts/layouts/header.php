<?php $projectName = "PTS"; ?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="REFRESH" content="1800"/>
    <title><?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?> - <?= $projectName ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.16.10/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">

    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.10/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.16.10/dist/js/uikit-icons.min.js"></script>
    <script src="assets/before-after-image-viewer/dist/beforeafter.jquery-1.0.0.min.js"></script>
    <script src="js/app.js?v=<?php echo(time()) ?>"></script>
</head>
<body class="">
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">
<header class="header" uk-sticky>
    <nav class="header__top uk-navbar-container uk-navbar-transparent">
        <div class="uk-container uk-container-large">
            <div uk-navbar>

                <div class="uk-navbar-left">
                    <a href="." class="uk-navbar-item uk-logo"><img src="images/logo.png" alt=""></a>
                </div>

                <div class="uk-navbar-right">

                    <ul class="uk-navbar-nav uk-visible@l">
                        <li>
                            <a href="#">Services <span uk-navbar-parent-icon></span></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-active"><a href="#">Active</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li><a href="#">Item</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a href="#">Price</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>

                    <a class="uk-navbar-toggle header__top__link uk-visible@l" href="">Sign in</a>
                    <div class="uk-navbar-item uk-visible@l">
                        <a href="" class="uk-button uk-button-primary header__top__btn">Sign up</a>
                    </div>

                    <a class="uk-navbar-toggle uk-hidden@l uk-light" uk-navbar-toggle-icon href="#"></a>

                </div>

            </div>
        </div>
    </nav>
    <nav class="header__bottom uk-navbar-container uk-visible@l">
        <div class="uk-container uk-container-large">
            <div uk-navbar>

                <div class="uk-navbar-left">

                    <ul class="uk-navbar-nav">
                        <li><a href="singlephoto_detail.php">Single photos</a></li>
                        <li><a href="#">HDR photos</a></li>
                        <li><a href="#">Flash photos</a></li>
                        <li><a href="#">Day to dusk </a></li>
                        <li><a href="#">360 virtual stage</a></li>
                        <li><a href="#">Virtual staging </a></li>
                        <li><a href="#">Virtual renovations </a></li>
                        <li><a href="#">Portrait </a></li>
                        <li><a href="#">Retouching</a></li>
                        <li>
                            <a href="#">More <span uk-navbar-parent-icon></span></a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav">
                                    <li class="uk-active"><a href="#">Active</a></li>
                                    <li><a href="#">Item</a></li>
                                    <li><a href="#">Item</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                </div>

            </div>
        </div>
    </nav>
</header>
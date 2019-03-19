<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Frontend_Week_6</title>
        <meta content="" name="description">
        <meta content="" name="keywords">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="telephone=no" name="format-detection">
        <meta name="HandheldFriendly" content="true">
        <!--Font-awesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

        <!--[if (gt IE 9)|!(IE)]><!-->
        <link href="static/css/main6traj.css" rel="stylesheet" type="text/css">
        <!--<![endif]-->
        <link rel="icon" type="image/x-icon" href="favicon.ico">
        <script>
            (function(H){H.className=H.className.replace(/\bno-js\b/,'js')})(document.documentElement)
        </script>
    </head>
<body>
    <?php 
            $product = '"index.php?page=product"';
            $view = [
                'view1' => 'background-image: url(&quot;static/img/assets/lookbook/view1.png&quot;)',
                'view2' => 'background-image: url(&quot;static/img/assets/lookbook/view2.png&quot;)',
                'view3' => 'background-image: url(&quot;static/img/assets/lookbook/view3.png&quot;)',
            ];
            $hgallery = [
                'photo1' => 'background-image: url(&quot;static/img/assets/home/photo1.png&quot;)',
                'photo2' => 'background-image: url(&quot;static/img/assets/home/photo2.png&quot;)',
                'photo3' => 'background-image: url(&quot;static/img/assets/home/photo3.png&quot;)',
                'photo4' => 'background-image: url(&quot;static/img/assets/home/photo4.png&quot;)',
                'photo5' => 'background-image: url(&quot;static/img/assets/home/photo5.png&quot;)',
                'photo6' => 'background-image: url(&quot;static/img/assets/home/photo6.png&quot;)',
            ];
            $lbgallery = [
                'photo1' => 'background-image: url(&quot;static/img/assets/lookbook/photo1.png&quot;)',
                'photo2' => 'background-image: url(&quot;static/img/assets/lookbook/photo2.png&quot;)',
                'replace1' => 'background-image: url(&quot;static/img/assets/lookbook/replace1.png&quot;)',
                'photo4' => 'background-image: url(&quot;static/img/assets/lookbook/photo4.png&quot;)',
                'photo5' => 'background-image: url(&quot;static/img/assets/lookbook/photo5.png&quot;)',
                'photo6' => 'background-image: url(&quot;static/img/assets/lookbook/photo6.png&quot;)',
                'photo7' => 'background-image: url(&quot;static/img/assets/lookbook/photo7.png&quot;)',
                'replace2' => 'background-image: url(&quot;static/img/assets/lookbook/replace2.png&quot;)',
                'photo9' => 'background-image: url(&quot;static/img/assets/lookbook/photo9.png&quot;)',
            ];
            $brandimg = [
                'img1' => 'background-image: url(&quot;static/img/assets/brand/img1.png&quot;)',
                'img2' => 'background-image: url(&quot;static/img/assets/brand/img2.png&quot;)',
                'img3' => 'background-image: url(&quot;static/img/assets/brand/img3.png&quot;)',
            ];
            $brandheader = [
                'title' => '<span>the </span>brand',
                'text' => 'company slogan goes here',
            ];
            $localheader = [
                'title' => '<span>local </span>stores',
                'text' => 'find a store near you',
            ];
            $productheader = [
                'title' => '<span>product </span>view',
                'text' => 'mens - casuals - hoodies & sweatshirts - <span>ave classic sweatshirt</span>',
            ];
            $signupheader = [
                'title' => '<span>welcome </span>to ave',
                'text' => 'sign in or register',
            ];
            $lookbookheader = [
                'title' => '<span>our </span>lookbook',
                'text' => 'Latest Posts - mens & womens',
            ];
            $homeheader = [
                'height' => 'height: 810px;',
                'hide' => 'display: none;',
                'showb' => 'display: inline-block;',
                'show' => 'display: block;',
            ];

        ?>

        <header class="header">
            <div class="topbar">
                <div class="topbar__content">
                    <div class="topbar__currency">Currency :
                        <div>
                            <select class="select__currency">
                                <option>GBP</option>
                                <option>KZT</option>
                                <option>USD</option>
                                <option>EUR</option>
                            </select><i class="fas fa-angle-down"></i>
                        </div>
                    </div>
                    <div class="topbar__rslink"><a class="topbar__register" href="index.php?page=signup">Register</a><a class="topbar__signin" href="#">Sign In</a>
                    </div><a class="topbar__cart" href="#"><i class="fas fa-shopping-cart"></i>empty<i class="fas fa-angle-down"></i></a>
                </div>
            </div>
            <div class="<?php 
                $page = $_GET['page'];
                if (!isset($page)) {
                    echo 'header__homebg--img1';
                } elseif (isset($page)) {
                    echo 'header__bg';
                };
            ?>">
                <div class="header__content" style="<?php 
                    $page = $_GET['page'];
                    if (!isset($page)) {
                        echo 'background-color: transparent;';
                    } elseif (isset($page)) {
                        echo 'background-color: #fff;';
                    }
                ?>"><a class="header__logo" href="/"><span>avenue </span>fashion</a>
                    <div class="header__nav">
                        <div><a class="header__link menslink" href="#">mens<i class="fas fa-angle-down"></i>
                <div class="mensmenu">
                  <div class="hmenu__menu">
                    <div class="hmenu__column">
                      <div class="hmenu__title">Casuals</div><a class="hmenu__link" href="#">Jackets</a><a class="hmenu__link" href="#">Hoodies & Sweatshirts</a><a class="hmenu__link" href="#">Polo Shirts</a><a class="hmenu__link" href="#">Sportswear</a>
                            <a
                            class="hmenu__link" href="#">Trousers & Chinos</a><a class="hmenu__link" href="#">T-Shirts</a>
                        </div>
                        <div class="hmenu__column">
                            <div class="hmenu__title">format</div><a class="hmenu__link" href="#">Jackets</a><a class="hmenu__link" href="#">Shirts</a><a class="hmenu__link" href="#">Suits</a><a class="hmenu__link" href="#">Trousers</a>
                        </div>
                    </div>
                    <div class="hmenu__banner">
                        <div>autumn sale!</div>
                        <div>to 50% off</div>
                    </div>
                </div>
                </a>
            </div>
            <div><a class="header__link" href="#">womens<i class="fas fa-angle-down"></i></a>
            </div>
            <div><a class="header__link" href="index.php?page=brand">the brand</a>
            </div>
            <div><a class="header__link" href="index.php?page=localstores">local stores</a>
            </div>
            <div><a class="header__link booklink" href="#">look book<i class="fas fa-angle-down"></i>
                <div class="bookmenu">
                  <div class="hmenu__menu">
                    <div class="hmenu__column">
                      <div class="hmenu__title">our lookbooks</div><a class="hmenu__link" href="#">Latest Prost(mixed)</a><a class="hmenu__link" href="#">Men's Lookbook</a><a class="hmenu__link" href="#">Women's Lookbook</a>
            </div>
            <div class="hmenu__column">
                <div class="hmenu__title">your lookbook</div><a class="hmenu__link" href="index.php?page=lookbook">View and Edit</a><a class="hmenu__link" href="#">Share</a><a class="hmenu__link" href="#">Delete</a>
            </div>
            </div>
            <div class="hmenu__banner">
                <div>autumn sale!</div>
                <div>to 50% off</div>
            </div>
            </div>
            </a>
            </div>
            </div>
            <div class="search">
                <input class="search__place" type="text" name="search" placeholder="Search.."><a class="search__icon" href="#"><i class="fas fa-search"></i></a>
            </div><a class="btn" href="#"><span></span></a>
            </div>
            <?php 
                $page = $_GET['page'];
                if (!isset($page)) {
                    require('templates/introhome.php');
                } elseif (isset($page)) {
                    require('templates/intro.php');
                }
            ?>
        </div>

<div id="content">

            <?php 
                $page = $_GET['page'];

                if (!isset($page)) {
                    require('templates/home.php');
                } elseif ($page == 'brand') {
                    require('templates/brand.php');
                } elseif ($page == 'localstores') {
                    require('templates/localstores.php');
                } elseif ($page == 'lookbook') {
                    require('templates/lookbook.php');
                } elseif ($page == 'product') {
                    require('templates/product.php');
                } elseif ($page == 'signup') {
                    require('templates/signup.php');
                }
            ?>

        </div>

        <footer class="footer">
            <div class="page">
                <div class="footer__menu">
                    <div class="column">
                        <div class="column__title">information</div><a class="column__link" href="#">The brand</a><a class="column__link" href="#">Local stores</a><a class="column__link" href="#">Customer service</a><a class="column__link" href="#">Privacy & cookies</a><a class="column__link"
                        href="#">Site map</a>
                    </div>
                    <div class="column">
                        <div class="column__title">why buy from us</div><a class="column__link" href="#">Shipping & returns</a><a class="column__link" href="#">Secure shopping</a><a class="column__link" href="#">Testimonials</a><a class="column__link" href="#">Award winning</a>
                        <a
                        class="column__link" href="#">Ethical trading</a>
                    </div>
                    <div class="column">
                        <div class="column__title">your account</div><a class="column__link" href="#">Sign in</a><a class="column__link" href="#">Register</a><a class="column__link" href="#">View cart</a><a class="column__link" href="#">View your lookbook</a><a class="column__link"
                        href="#">Track an order</a><a class="column__link" href="#">Update information</a>
                    </div>
                    <div class="column">
                        <div class="column__title">lookbook</div><a class="column__link" href="#">Latest posts</a><a class="column__link" href="#">Men’s lookbook</a><a class="column__link" href="#">Women’s lookbook</a><a class="column__link" href="#">Lookbooks RSS feed</a><a class="column__link"
                        href="#">View your lookbook</a><a class="column__link" href="#">Delete your lookbook</a>
                    </div>
                    <div class="column">
                        <div class="column__title column__title--last">contact details</div>
                        <div class="address">Head Office: Avenue Fashion,
                            <br>180-182 Regent Street, London.</div>
                        <div class="phone">Telephone:
                            <br>0123-456-789</div>
                        <div class="email">Email: <a class="email__link" href="https://yourwebsite.com/">support@yourwebsite.com</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page">
                <div class="footer__banners">
                    <div class="award">
                        <div class="award__title">award winner</div>
                        <div class="award__text">fashion awards 2016</div>
                    </div>
                    <div class="social"><a class="social__link" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a><a class="social__link" href="https://twitter.com/?lang=ru"><i class="fab fa-twitter"></i></a>
                        <a class="social__link" href="https://www.instagram.com/?hl=ru"><i class="fab fa-instagram"></i>
                        </a><a class="social__link" href="https://www.pinterest.com/"><i class="fab fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="copyright__content page">
                    <div class="copyright__title">© 2016 Avenue Fashion™</div>
                    <div class="author">
                        <div class="author__design">Design by RobbyDesigns.com</div>
                        <div class="author__dev">Dev by Loremipsum.com</div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="static/js/main6traj.min.js"></script>

</body>
</html>
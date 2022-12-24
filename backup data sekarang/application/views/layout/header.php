<?php
error_reporting(0);
if (@$_GET['lang'] != '') {
    $_SESSION['lang'] = $_GET['lang'];
}



?>
<!DOCTYPE html>
<html dir="ltr" lang="en"
    class="firefox firefox88 mac journal-desktop is-guest skin-4 responsive-layout header-center header-center-sticky product-grid-second-image product-list-second-image home-page layout-1 route-common-home oc1"
    data-j2v="2.6.3">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-L08YW6F3B7"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4464645872434990"
        crossorigin="anonymous"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-L08YW6F3B7');
    </script>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <?php
    $wbs = $this->db->get('tbl_website')->row();
    ?>


    <?php foreach ($this->db->query("SELECT * FROM tbl_navigation WHERE status = 'Y'")->result() as $n) { ?>
    <?php if ($this->uri->segment(1) == $n->slug) {
            $segment1 = $n->metaTitle . ' | ' . $n->title;
            $metaKey = $n->metaKeywords;
            $metaDes = $n->metaDescription;
        } ?>
    <?php } ?>

    <?php
    if ($this->uri->segment(1) == 'news') {
        $segment1 = $wbs->metaTitle . ' | News';
        $metaKey = $wbs->metaKeywords;
        $metaDes = $wbs->metaDescription;
    } else if ($this->uri->segment(1) == 'hotnews') {
        $segment1 = $wbs->metaTitle . ' | Hot News';
        $metaKey = $wbs->metaKeywords;
        $metaDes = $wbs->metaDescription;
    }
    ?>

    <?php if ($this->uri->segment(2) != 'detail') { ?>
    <title><?= $segment1; ?> </title>
    <meta name="keywords" content="<?= $metaKey; ?>">
    <meta name="description" content="<?= $metaDes; ?>">

    <meta property="og:type" content="website" />
    <meta property="og:title" content="<?= $wbs->metaTitle; ?>" />
    <meta property="og:description" content="<?= $wbs->metaDescription; ?>" />
    <meta property="og:url" content="https://digivestasi.com/" />
    <meta property="og:image" content="<?= base_url() ?>assets/image/gap/logo_link.png" />

    <?php } ?>

    <?php
    if ($this->uri->segment(2) == 'detail') {
        $meta = $this->db->get_where('tbl_posts', array('slug' => $this->uri->segment(3)))->row();
        echo '<title>' . $wbs->metaTitle . ' | ' . $meta->Title . '</title>
        <meta name="keywords" content="' . $meta->slug . $wbs->metaKeywords . '">
        <meta name="description" content="' . $meta->en_content . $meta->metaDescription . '">


        <meta property="og:type" content="article" />
        <meta property="og:image" content="https://admin103.digivestasi.com/upload/posts/' . $meta->image . '" />
        <meta property="og:title" content="' . $meta->Title . '" />
        <meta property="og:description" content="' . $meta->metaDescription . '">
        <meta property="og:url" content="https://digivestasi.com/news/detail/' . $meta->slug . '" />
        <meta property="og:site_name" content="digivestasi.com" />
       
       

        <meta name="twitter:card" content="summary">
        <meta name="twitter:site" content="' . base_url() . 'Berita/baca/' . $meta->slug . '">
        <meta name="twitter:title" content="' . $meta->Title . '">
        <meta name="twitter:description" content="' . $meta->en_content . $wbs->metaDescription . '">
        <meta name="twitter:image" content="https://admin103.digivestasi.com/upload/posts/' . $meta->image . '">';
    }
    ?>

    <!-- <meta property="og:type" content="article" />
    <meta property="og:title" content="' . $meta->Title . '" />
    <meta property="og:description" content="' . $meta->en_content . '" />
    <meta property="og:image" content="https://admin103.digivestasi.com/upload/posts/' . $meta->image . '" />
    <meta property="og:image:width" content="400" />
    <meta property="og:image:height" content="300" /> -->

    <base href="<?= base_url() ?>" />

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"> -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        crossorigin="anonymous">
    <!-- Template Stylesheet -->
    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/stylenew.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/responsivenew.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/swiper.css" rel="stylesheet">



    <link href="<?= base_url() ?>assets/image/gap/logo_url.png" rel="icon" />
    <link rel="stylesheet"
        href="//fonts.googleapis.com/css?family=Roboto+Slab:regular%7CPlayfair+Display:regular,700&amp;subset=latin" />
    <link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/j-strap.css?j2v=2.6.3" />
    <link rel="stylesheet"
        href="<?= base_url() ?>assets/js/jquery/ui/themes/ui-lightness/jquery-ui-1.8.16.custom.css?j2v=2.6.3" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/lib/owl-carousel/owl.carousel.css?j2v=2.6.3" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/lib/owl-carousel/owl.transitions.css?j2v=2.6.3" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/lib/magnific-popup/magnific-popup.css?j2v=2.6.3" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/lib/rs-plugin/css/settings.css?j2v=2.6.3" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/hint.min.css?j2v=2.6.3" />
    <!-- <link rel="stylesheet" href="<?= base_url() ?>assets/css/journal.css?j2v=2.6.3" /> -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/features.css?j2v=2.6.3" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/header.css?j2v=2.6.3" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/module.css?j2v=2.6.3" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/pages.css?j2v=2.6.3" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/account.css?j2v=2.6.3" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/blog-manager.css?j2v=2.6.3" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/side-column.css?j2v=2.6.3" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/product.css?j2v=2.6.3" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/category.css?j2v=2.6.3" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/footer.css?j2v=2.6.3" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/icons.css?j2v=2.6.3" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.css?j2v=2.6.3" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css?j2v=2.6.3" />

    <script type="text/javascript" src="<?= base_url() ?>assets/lib/jquery/jquery-1.8.3.min.js?j2v=2.6.3"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/lib/jquery.ui/jquery-ui-1.8.24.min.js?j2v=2.6.3">
    </script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/common.js?j2v=2.6.3"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/jquery/jquery.total-storage.min.js?j2v=2.6.3">
    </script>
    <script type="text/javascript" src="<?= base_url() ?>assets/lib/jquery.tabs/tabs.js?j2v=2.6.3"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/lib/owl-carousel/owl.carousel.js?j2v=2.6.3"></script>
    <script type="text/javascript"
        src="<?= base_url() ?>assets/lib/magnific-popup/jquery.magnific-popup.min.js?j2v=2.6.3"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/lib/actual/jquery.actual.min.js?j2v=2.6.3"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/lib/countdown/jquery.countdown.js?j2v=2.6.3"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/lib/image-zoom/jquery.imagezoom.min.js?j2v=2.6.3">
    </script>
    <script type="text/javascript" src="<?= base_url() ?>assets/lib/lazy/jquery.lazy.1.6.min.js?j2v=2.6.3"></script>
    <script type="text/javascript"
        src="<?= base_url() ?>assets/lib/rs-plugin/js/jquery.themepunch.tools.min.js?j2v=2.6.3"></script>
    <script type="text/javascript"
        src="<?= base_url() ?>assets/lib/rs-plugin/js/jquery.themepunch.revolution.min.js?j2v=2.6.3"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/lib/quovolver/jquery.quovolver.js?j2v=2.6.3"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/lib/jqueryc/jqueryc.js?j2v=2.6.3"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets/js/journal.js?j2v=2.6.3"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/font-awesome-4.7.0/css/font-awesome.min.css?j2v=2.6.3">

    <!--whatsapp-->
    <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>assets/css/whatsapp_chat.css" />
    <!-- animate CSS -->
    <link href="<?= base_url() ?>assets/css/animate.css" rel="stylesheet">
    <!-- Fancy Box -->
    <!-- <script src="//code.jquery.com/jquery-3.3.1.min.js"></script> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

    <!-- Bootstrap JS Requirements -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url(); ?>assets/js/swiper.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/main.js"></script>
    <!--[if (gte IE 6)&(lte IE 8)]><script src="catalog/view/theme/journal2/lib/selectivizr/selectivizr.min.js"></script><![endif]-->

    <!-- fb -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <script>
    $(document).ready(function() {
        $.ajaxSetup({
            cache: true
        });
        $.getScript('https://connect.facebook.net/en_US/sdk.js', function() {
            FB.init({
                appId: '3220973974849367',
                version: 'v2.7' // or v2.1, v2.2, v2.3, ...
            });
            $('#loginbutton,#feedbutton').removeAttr('disabled');
            FB.getLoginStatus(updateStatusCallback);
        });
    });
    </script>
    <!-- end fb -->
    <script>
    Journal.COUNTDOWN = {
        DAYS: "Days",
        HOURS: "Hours",
        MINUTES: "Min",
        SECONDS: "Sec"
    };
    Journal.NOTIFICATION_BUTTONS =
        '<div class="notification-buttons"><a class="button notification-cart" href="<?= base_url() ?>cart">View Cart</a><a class="button notification-checkout" href="<?= base_url() ?>checkout">Checkout</a></div>';
    </script>


</head>

<body>

    <!-- Topbar Start -->
    <div class="container-fluid top-menu text-light px-0">
        <div class="row align-items-center gx-0 d-none d-lg-flex">
            <div class="col-lg-2 text-center bg-orange">
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <h4 class="text-white">HOT NEWS</h4>
                </div>
            </div>
            <div class="col-lg">
                <div class="d-flex align-items-center ms-4">
                    <small>🔥 Minat Investor Diprediksi Tinggi, Pemerintah Berencana Terbitkan Obligasi SBSN Seri
                        ST009</small>
                    <small>️🔥 Jurus Pemerintah RI Untuk Tangkal Resesi</small>
                    <small>️🔥 Reddit Menjadi Pesaing Teratas NFT Web3</small>
                </div>
            </div>

        </div>
    </div>
    <!-- Topbar End -->

    <div class="container-fluid top-login text-light px-0 py-2">
        <div class="container px-lg-5">
            <div class="row align-items-center justify-content-between gx-0 d-flex">
                <div class="col-lg-8 col-sm-5 col-5">
                    <div class="logo-header">
                        <img src="<?= base_url(); ?>assets/imagenew/logo_header.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-7 col-7 text-center">
                    <a href="" class="register px-3 py-2 rounded-10 me-3">Register</a>
                    <?php
                    $getUser = $this->db->get_where('tbl_member', ['id' => $this->session->userdata('user_id')])->row_array();
                    if ($this->session->userdata('user_id')) { ?>
                    <a href="<?= base_url('logout') ?>"
                        class="login btn bg-white text-dark rounded-10 px-3 py-2">Logout</a>
                    <?php } else { ?>
                    <a href="<?= base_url('login') ?>"
                        class="login btn bg-white text-dark rounded-10 px-3 py-2">Login</a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 py-3 py-lg-0 bg-black">
        <div class="container justify-content-end  px-lg-5">
            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav p-4 p-lg-0">
                    <a href="<?= base_url(); ?>" class="nav-item nav-link active">Beranda</a>
                    <a href="<?= base_url(); ?>news" class="nav-item nav-link">Berita</a>
                    <?php foreach ($this->db->query("SELECT * FROM tbl_subkategori where aktif='Y' order by id asc")->result() as $sub) { ?>
                    <a class="nav-item nav-link"
                        onclick="getBerita(<?= $sub->id; ?>,'<?= $sub->kategori; ?>')"><?= $sub->kategori; ?></a>
                    <?php } ?>
                    <a href="<?= base_url(); ?>about" class="nav-item nav-link">About us</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <script>
    function getBerita(id, kategori) {

        base_url = '<?php echo base_url(); ?>';

        $.ajax({

            type: "GET",

            url: base_url + "Hotnews",

            data: {
                'id': id,
                'kategori': kategori
            },

            success: function(html) {

                window.location = base_url + 'hotnews/list/?id=' + id;

            },

            error: function() {


            }

        });

    }
    </script>
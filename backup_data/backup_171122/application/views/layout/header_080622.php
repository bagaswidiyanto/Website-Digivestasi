<?php
error_reporting(0);
if (@$_GET['lang'] != '') {
    $_SESSION['lang'] = $_GET['lang'];
}



?>
<!DOCTYPE html>
<html dir="ltr" lang="en" class="firefox firefox88 mac journal-desktop is-guest skin-4 responsive-layout header-center header-center-sticky product-grid-second-image product-list-second-image home-page layout-1 route-common-home oc1" data-j2v="2.6.3">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1"/><![endif]-->
        <!--[if lt IE 9]><script src="//ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script><![endif]-->
         <?php
         $id = $this->uri->segment('3');
         $newss = $this->db->query("SELECT * FROM tbl_posts where slug = '".$id."' ")->row();
         if (!empty($id)) {
            $hasil = ' | '.$newss->Title; 
        }else{
            $hasil = '';
        }
         // if ($judu) {
         //     $hasil = '|';
         // }else{

         // }
         // $cek = $this->db->query("SELECT * FROM tbl_posts where id='".$id."' order by id asc");
         // if ($cek->num_rows()>0) {
         //    $jdlBerita = ' | '.$cek->Title;.'';
         // }else{
         //    $jdlBerita ='';
         // }
        ?>
        <title>DIGIVESTASI - Media informasi seputar aset digital | Aset Digital untuk Masa Depan <?=$hasil;?></title>
        <base href="<?= base_url() ?>" />
    <!-- <meta name="description" content="" />
<meta property="og:title" content="" />
<meta property="og:description" content="..." />
<meta property="og:url" content="<?= base_url() ?>" />
<meta property="og:image" content="" /> -->
<!-- <link href="" rel="icon" /> -->
<!-- BOOTSRAP -->

<meta name="keywords" content="Aset Digital untuk Masa Depan, Crypto, Saham, Investasi, Aset, Asset, Assets, Digital Investasi, Bitcoin, BTC, Binance, BNB, Polkadot, DOT, Doge, Solana, Sol, Ethereum, ETH, NFT, Kripto, GameFi, Defi, cryptocurrency, blockchain, kripto aset, crypto assets, digital aset, digital NFT, tekhnologi digital, mata uang digital, vitalik buterin, crypto haram, kripto haram, kripto indonesia, trading, forex, spot trading, feature, twitter, jack dorsey, kapten crypto, squid game, elon musk, shit coin, micin, polygon, decentraland, sand, cardana, ada, shiba, shib, cefi, exchange, coinvestasi, ugi, underground gems indonesia, bitcoin indonesia,Mata uang kripto,token, shiba inu, indodax, tokocrypto, pintu, ajaib, bibit ">

<meta name="description" content="Digivestasi adalah Digital Investasi, sebuah media informasi dan edukasi terkait kemajuan dan perkembangan teknologi serta asset digital yang sangat dibutuhkan saat ini oleh masyarakat, Komitmen kami adalah memberikan informasi dan edukasi berkenaan dengan kemajuan dan perkembangan teknologi digital serta bisnis aset digital yang sangat dibutuhkan saat ini oleh masyarakat.
�Aset Digital untuk Masa Depan� adalah jargon kami dengan satu tujuan agar kami dapat menumbuhkembangkan minat dan kesadaran semua kalangan untuk mulai berinvestasi aset digital untuk perencanaan kehidupan di masa depan.">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css"> -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" crossorigin="anonymous">


<link href="<?= base_url() ?>assets/image/gap/digivestasi.png" rel="icon" />
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto+Slab:regular%7CPlayfair+Display:regular,700&amp;subset=latin" />
<link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="<?= base_url() ?>assets/css/j-strap.css?j2v=2.6.3" />
<link rel="stylesheet" href="<?= base_url() ?>assets/js/jquery/ui/themes/ui-lightness/jquery-ui-1.8.16.custom.css?j2v=2.6.3" />
<link rel="stylesheet" href="<?= base_url() ?>assets/lib/owl-carousel/owl.carousel.css?j2v=2.6.3" />
<link rel="stylesheet" href="<?= base_url() ?>assets/lib/owl-carousel/owl.transitions.css?j2v=2.6.3" />
<link rel="stylesheet" href="<?= base_url() ?>assets/lib/magnific-popup/magnific-popup.css?j2v=2.6.3" />
<link rel="stylesheet" href="<?= base_url() ?>assets/lib/rs-plugin/css/settings.css?j2v=2.6.3" />
<link rel="stylesheet" href="<?= base_url() ?>assets/css/hint.min.css?j2v=2.6.3" />
<link rel="stylesheet" href="<?= base_url() ?>assets/css/journal.css?j2v=2.6.3" />
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
<script type="text/javascript" src="<?= base_url() ?>assets/lib/jquery.ui/jquery-ui-1.8.24.min.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/common.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/jquery/jquery.total-storage.min.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/lib/jquery.tabs/tabs.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/lib/owl-carousel/owl.carousel.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/lib/magnific-popup/jquery.magnific-popup.min.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/lib/actual/jquery.actual.min.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/lib/countdown/jquery.countdown.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/lib/image-zoom/jquery.imagezoom.min.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/lib/lazy/jquery.lazy.1.6.min.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/lib/rs-plugin/js/jquery.themepunch.tools.min.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/lib/rs-plugin/js/jquery.themepunch.revolution.min.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/lib/quovolver/jquery.quovolver.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/lib/jqueryc/jqueryc.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/journal.js?j2v=2.6.3"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
<!--[if (gte IE 6)&(lte IE 8)]><script src="catalog/view/theme/journal2/lib/selectivizr/selectivizr.min.js"></script><![endif]-->

<!-- fb -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <link rel="stylesheet" href="style.css" />
  <script>
    $(document).ready(function() {
       $.ajaxSetup({ cache: true });
  $.getScript('https://connect.facebook.net/en_US/sdk.js', function(){
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
        Journal.NOTIFICATION_BUTTONS = '<div class="notification-buttons"><a class="button notification-cart" href="<?= base_url() ?>cart">View Cart</a><a class="button notification-checkout" href="<?= base_url() ?>checkout">Checkout</a></div>';
    </script>

    <style>
        .super-menu {
            table-layout: auto;
            position: absolute;
            margin-top: -3%;
            width: 66%;
            margin-left: 26%;
        }

        /*.divtest > ul > li::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: 25px;
            background-color: #106eea;
            width: 8px;
            transition: all 0.3s ease-in-out 0s;
            border-radius: 50%;
        }*/

        .navbar-dark .navbar-nav .active > .nav-link, .navbar-dark .navbar-nav .nav-link.active, .navbar-dark .navbar-nav .nav-link.show, .navbar-dark .navbar-nav .show > .nav-link {
            color: #FF9F48 !important;
        }

        .nav-link{
            font-family: Noto Sans !important;
            font-style: normal;
            font-weight: 500;
            font-size: 16px;
            line-height: 24px;
        }

        .mr-auto{
            margin-left: 10%;
        }
        @media only screen and (max-width: 1024px) {
            .mr-auto {
                margin-left: 2%;
            }
        }
        @media only screen and (max-width: 768px) {
            .mr-auto{
                margin-left: 0%;
            }
        }

        .nav-item{
            margin: 5px;
            margin-left: 20px;
            margin-right: 20px;
        }

        /*@media only screen and (min-width: 576px) {*/
            .form-inline .form-control {
                display: inline-block;
                width: 256px;
                vertical-align: middle;
            }
            /*}*/

            @media only screen and (max-width: 1024px) {
                .form-inline .form-control {
                    display: inline-block;
                    width: 290px;
                    vertical-align: middle;
                }
            }

            .iconsearch {
                width: 70px;height: 34px;margin-left: -68px;
            }
            /* CSS Document */

            marquee {
                margin-top: 5px;
                width: 100%;
            }

            .runtext-container {
                background-color:black !important;
                /**background-color:#ccf;*/
    /*background-image:-moz-linear-gradient(top,#ccf,#fff);
    background-image:-webkit-gradient(linear,0 0,0 100%,from(#ccf),to(#fff));
    background-image:-webkit-linear-gradient(top,#ccf,#fff);
    background-image:-o-linear-gradient(top,#ccf,#fff);
    background-image:linear-gradient(to bottom,#ccf,#fff);*/
    background-repeat:repeat-x;
    /*border: 4px solid #000000;*/
    /*box-shadow:0 5px 20px rgba(0, 0, 0, 0.9);*/
    /*width: 850px;*/
    overflow-x: hidden;
    overflow-y: visible;
    /*margin: 0 60px 0 30px;*/
    /*padding:0 3px 0 3px;*/
    color: white;
}

.main-runtext {margin: 0 auto;
    overflow: visible;
    position: relative;
    height: 40px;
}

.runtext-container .holder {
    position: relative;
    overflow: visible;
    display:inline;
    float:left;

}

.runtext-container .holder .text-container {
    display:inline;
}

.runtext-container .holder a{
    text-decoration: none;
    font-weight: bold;
    color: white;
    text-shadow:0 -1px 0 rgba(0,0,0,0.25);
    line-height: -0.5em;
    font-size:16px;
}

.runtext-container .holder a:hover{
    text-decoration: none;
    color:#fff;
}
</style>

</head>

<body>


   <!-- ======= Header ======= -->

   <!-- </header> -->

   <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="padding: 20px;background-color: #232323 !important;">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="<?= base_url() ?>assets/image/new_image/logo_atas.png" width="200" style="height: auto !important;" /></a>
                <ul class="navbar-nav mr-auto">
                
            
                    
                    <?php
                    $getUser = $this->db->get_where('tbl_member',['id'=>$this->session->userdata('user_id')])->row_array();
                    if ($this->session->userdata('user_id')) { ?>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hi, <?=$getUser['first_name'];?> </a>
                            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                <a class="ddropdown-item waves-effect waves-light" href="<?=base_url('logout')?>" style="color: black;text-decoration: none;">Logout          
                            </div>
                        </li>
                    <?php } else { ?>
                        <li class="nav-item" id="tentanghome">
                            <a class="nav-link waves-effect waves-light" href="<?=base_url('login')?>">Sign Up</a>
                        </li>
                    <?php } ?>

                </ul>
                <form class="form-inline" style="margin-left: 20px;">
                    <div class="md-form my-0">
                        <input class="form-control mr-sm-2" id="isisearch" name="isisearch" type="text" placeholder="Cari sesuatu" aria-label="Search" style="border-radius:10px;margin-right: 0px !important;" >
                        <img src="<?= base_url() ?>assets/image/cari.png" class="iconsearch" onclick="getSearch()">
                    </div>
                </form>
        </div>
    </nav> -->

    <!-- <ul class="nav nav-fill" style="padding: 20px;background-color: #232323 !important;">
        <li class="nav-item" style="color: #FFFFFF">
        <img src="<?=base_url()?>assets/image/new_image/temp_icon.png" width="20" height="20" alt="" /> 32<sup>&deg C</sup> INDONESIA  &nbsp;&nbsp;&nbsp; <img src="<?=base_url()?>assets/image/new_image/jam.png" width="20" height="20" alt="" /> <?=date('l, d F Y')?>
        </li>
        <li class="nav-item">
        <a class="navbar-brand" href="#"><img src="<?= base_url() ?>assets/image/new_image/logo_atas.png" width="200" style="height: auto !important;" /></a>
        </li>

        <?php
            $getUser = $this->db->get_where('tbl_member',['id'=>$this->session->userdata('user_id')])->row_array();
            if ($this->session->userdata('user_id')) { ?>
                <li class="nav-item ">
                    <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hi, <?=$getUser['first_name'];?> </a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="ddropdown-item waves-effect waves-light" href="<?=base_url('logout')?>" style="color: black;text-decoration: none;">Logout </a>        
                    </div>
                </li>
            <?php } else { ?>
                <li class="nav-item" id="tentanghome">
                    <a class="nav-link waves-effect waves-light" href="<?=base_url('login')?>">Sign Up</a>
                </li>
            <?php } ?>
        <li class="nav-item ">
            <a class="newsletter-button button" onclick="Journal.newsletter($('#journal-newsletter-495805429'));" style="margin-top: -1px; right: -95px">Subscribe</a>
        </li>
    </ul> -->

    <div class="row" style="padding: 20px;background-color: #232323 !important;">
        <div class="col-4" style="color: #FFFFFF; margin: auto;">
            <img src="<?=base_url()?>assets/image/new_image/temp_icon.png" width="20" height="20" alt="" /> 32<sup>&deg C</sup> &nbsp; INDONESIA  &nbsp;&nbsp;&nbsp; <img src="<?=base_url()?>assets/image/new_image/jam.png" width="20" height="20" alt="" /> <?=date('l, d F Y')?>
        </div>
    <div class="col-4" style="justify-content: center;display: flex;">
        <!-- <a class="navbar-brand" href="#"><img src="<?= base_url() ?>assets/image/new_image/logo_atas.png" width="200" style="height: auto !important;" /></a> -->
    </div>
    <div class="col" style="margin: auto; justify-content: right; display: flex;">
        <img src="<?=base_url()?>assets/image/new_image/cari.png" width="20" height="20" alt="" />
    </div>
    <div class="col" style="margin: auto;" style="color: #FFFFFF">
            <?php
            $getUser = $this->db->get_where('tbl_member',['id'=>$this->session->userdata('user_id')])->row_array();
            if ($this->session->userdata('user_id')) { ?>
                
                    <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hi, <?=$getUser['first_name'];?> </a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="ddropdown-item waves-effect waves-light" href="<?=base_url('logout')?>" style="color: black;text-decoration: none;">Logout </a>        
                    </div>
                
            <?php } else { ?>
                
                    <a class="nav-link waves-effect waves-light" href="<?=base_url('login')?>">Sign In</a>
                
            <?php } ?>
    </div>
    <div class="col" style="margin: auto;">
        <a class="newsletter-button button" onclick="Journal.newsletter($('#journal-newsletter-495805429'));" style="margin-top: -1px; right: -95px">Subscribe</a>
    </div>
  </div>

<!-- menu bawah -->
   <nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-center" style="padding: 20px;background-color: #FFFFFF !important;">
    <div class="container">
      <!-- <a class="navbar-brand" href="#"><img src="<?= base_url() ?>assets/image/gap/digi.png" width="200" style="height: auto !important;" /></a> -->
      <a class="navbar-brand" href="#"><img src="<?= base_url() ?>assets/image/new_image/logo_040622.png" width="200" style="height: auto !important;" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between align-items-center w-100" id="navbarSupportedContent" style="margin-left:-10%;">
        <ul class="navbar-nav mx-auto text-center">
          <li class="nav-item active" id="berandahome">
            <a class="nav-link waves-effect waves-light" onclick="getColor(1)" href="<?= base_url() ?>"> Beranda
              <span class="sr-only">(current)</span>
          </a>
      </li>
      <li class="nav-item dropdown" id="beritahome" hidden>
        <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="getColor(2)">Berita
        </a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="ddropdown-item waves-effect waves-light" href="<?= (@$_GET['lang'] != 'eng') ? base_url() . 'hotnews' : base_url() . 'hotnews?lang=eng'; ?>" style="margin-left: 10px;color: black;text-decoration: none;"><?= (@$_GET['lang'] != 'eng') ?  'Berita Hangat 🔥' :  'Hot News 🔥'; ?></a>
          <hr class="dropdown-divider">
          <a class="ddropdown-item waves-effect waves-light" href="<?= (@$_GET['lang'] != 'eng') ? base_url() . 'cryptocurrency' : base_url() . 'cryptocurrency?lang=eng'; ?>" style="margin-left: 10px;color: black;text-decoration: none;">Cryptocurrency</a>
          <hr class="dropdown-divider">
          <a class="ddropdown-item waves-effect waves-light" href="<?= (@$_GET['lang'] != 'eng') ? base_url() . 'teknologi' : base_url() . 'teknologi?lang=eng'; ?>" style="margin-left: 10px;color: black;text-decoration: none;">Teknologi Digital</a>
          <hr class="dropdown-divider">
          <a class="ddropdown-item waves-effect waves-light" href="<?= (@$_GET['lang'] != 'eng') ? base_url() . 'investasi' : base_url() . 'investasi?lang=eng'; ?>" style="margin-left: 10px;color: black;text-decoration: none;">Investasi Lainnya</a>
      </div>
  </li>
  <li class="nav-item" id="tentanghome">
    <a class="nav-link waves-effect waves-light" href="<?= (@$_GET['lang'] != 'eng') ? base_url() . 'about' : base_url() . 'about?lang=eng'; ?>" onclick='getColor(3)'>Tentang Kami</a>
</li>

<!--<li class="nav-item dropdown">-->
    <!--    <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Platform-->
        <!--    </a>-->
        <!--    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">-->

            <!--            <a class="ddropdown-item waves-effect waves-light" href="#" style="color: black;text-decoration: none;"><p style="margin-left: 10px;"> Centralisasi Exchange (CEX)</p></a>-->
            <!--             <hr class="dropdown-divider">-->
            <!--            <a class="ddropdown-item waves-effect waves-light" href="#" style="color: black;text-decoration: none;"><p style="margin-left: 10px;"> Decentralisasi Exchange (DEX)</p></a>-->
            
            <!--            <hr class="dropdown-divider">-->
            
            <!--            <a class="ddropdown-item waves-effect waves-light" href="#" style="color: black;text-decoration: none;"><p style="margin-left: 10px;"> Decentralisasi Finance (DeFi) </p></a>-->
            
            <!--            <hr class="dropdown-divider">-->


            <!--</div>-->
            <!--</li>-->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kontak
                </a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                 <?php foreach ($this->db->query("SELECT * FROM tbl_sosmed ")->result() as $sos) {
                    if ($sos->name=='Instagram') {?>
                        <a class="ddropdown-item waves-effect waves-light" target="_blank" href="<?= $sos->link ?>" style="color: black;text-decoration: none;"><img src="<?= base_url() ?>assets/image/ic_ig.png" style="margin-left: 10px;"> Instagram <p style="margin-left: 25px;font-size: 10px;">@digivestasi</p> </a>
                        <hr class="dropdown-divider">
                    <?php }else if ($sos->name=="Facebook"){?>
                        <a class="ddropdown-item waves-effect waves-light" target="_blank" href="<?= $sos->link ?>" style="color: black;text-decoration: none;"><img src="<?= base_url() ?>assets/image/ic_fb.png" style="margin-left: 10px;"> Facebook <p style="margin-left: 25px;font-size: 10px;">Digivestasi</p></a>
                        <hr class="dropdown-divider">
                    <?php }else if ($sos->name=='Twitter') { ?>
                        <a class="ddropdown-item waves-effect waves-light" target="_blank" href="<?= $sos->link ?>" style="color: black;text-decoration: none;"><img src="<?= base_url() ?>assets/image/ic_tw.png" style="margin-left: 10px;"> Twitter <p style="margin-left: 25px;font-size: 10px;">@digivestasi</p></a>
                        <hr class="dropdown-divider">
                    <?php }else if ($sos->name=='Youtube') { ?>
                        <a class="ddropdown-item waves-effect waves-light" target="_blank" href="<?= $sos->link ?>" style="color: black;text-decoration: none;"><img src="<?= base_url() ?>assets/image/ic_yt.png" style="margin-left: 10px;"> Youtube <p style="margin-left: 25px;font-size: 10px;">Digivestasi - Digital Investasi</p></a>
                        <hr class="dropdown-divider">
                    <?php } else if ($sos->name=='Tiktok') { ?>
                        <a class="ddropdown-item waves-effect waves-light" target="_blank" href="<?= $sos->link ?>" style="color: black;text-decoration: none;"><img src="<?= base_url() ?>assets/image/tik_icon.png" style="margin-left: 10px;"> Tiktok <p style="margin-left: 25px;font-size: 10px;">@digivestasi</p></a>
                        <hr class="dropdown-divider">
                    <?php } else if ($sos->name=='Telegram') { ?>
                        <a class="ddropdown-item waves-effect waves-light" target="_blank" href="<?= $sos->link ?>" style="color: black;text-decoration: none;"><img src="<?= base_url() ?>assets/image/tele_icon.png" style="margin-left: 10px;"> Telegram <p style="margin-left: 25px;font-size: 10px;">Digivestasi</p></a>
                    <?php }
                }?>

            </div>
        </li>
        <!-- <?php
        $getUser = $this->db->get_where('tbl_member',['id'=>$this->session->userdata('user_id')])->row_array();
        if ($this->session->userdata('user_id')) { ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hi, <?=$getUser['first_name'];?> </a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="ddropdown-item waves-effect waves-light" href="<?=base_url('logout')?>" style="color: black;text-decoration: none;">Logout          
                </div>
            </li>
        <?php } else { ?>
            <li class="nav-item" id="tentanghome">
                <a class="nav-link waves-effect waves-light" href="<?=base_url('login')?>">Login</a>
            </li>
        <?php } ?> -->

    </ul>
    <!-- <form class="form-inline" style="margin-left: 20px;">
      <div class="md-form my-0">
        <input class="form-control mr-sm-2" id="isisearch" name="isisearch" type="text" placeholder="Cari sesuatu" aria-label="Search" style="border-radius:10px;margin-right: 0px !important;" >
        <img src="<?= base_url() ?>assets/image/cari.png" class="iconsearch" onclick="getSearch()">

    </div>
</form> -->
<ul class="navbar-nav flex-row justify-content-center flex-nowrap">
    <?php foreach ($this->db->query("SELECT * FROM tbl_sosmed ")->result() as $sosm) {
        if ($sos->name=='Instagram') {?>
            <a target="_blank" href="<?= $sos->link ?>"><img src="<?= base_url() ?>assets/image/ig_icon.png" style="width: 17px;height: auto;margin-top: -10px;margin-right: 5px;"></a>
        <?php }else if ($sosm->name=='Twitter') { ?>
            <a target="_blank" href="<?= $sosm->link ?>"><img src="<?= base_url() ?>assets/image/tw_icon.png" style="width: 17px;height: auto;margin-top: -10px;margin-right: 5px;"></a>
        <?php }else if ($sosm->name=='Youtube') { ?>
            <a target="_blank" href="<?= $sosm->link ?>"><img src="<?= base_url() ?>assets/image/yt_icon.png" style="width: 17px;height: auto;margin-top: -10px;margin-right: 5px;"></a>
        <?php }else if ($sosm->name=="Facebook"){?>
            <a target="_blank" href="<?= $sosm->link ?>"><img src="<?= base_url() ?>assets/image/fb_icon.png" style="width: 17px;height: auto;margin-top: -10px;margin-right: 5px;"></a>
        <?php }else if ($sosm->name=="Tiktok") { ?>
            <a target="_blank" href="<?= $sosm->link ?>"><img src="<?= base_url() ?>assets/image/tik_icon.png" style="width: 15px;height: auto;margin-top: -10px;margin-right: 5px;"></a>
        <?php } 
    }?>
</ul>
</div>
</div>
</nav>
<!-- end menu bawah -->
<!-- <hr style="margin-top: 2px;margin-bottom: 5px;" size="10px"> -->

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Halaman Masuk</h4>
      </div>
      
      <div class="modal-body">
      <form id="myFormLogin" method="POST">
     
        <p>Username : <input style="width:100%;height:auto;padding:10px;" type="text" id="username" name="username"/></p>
        <p>Password : <input style="width:100%;height:auto;padding:10px;" type="password" id="password" name="password"/></p>
        <button type="submit"  class="btn btn-success" id="btnlog" >Masuk</button>
    	</form> 
      </div>
      <div class="modal-footer">
      	<button class='btn btn-default' data-dismiss='modal' aria-hidden='true'>Tutup</button>
       
      </div>
   
    </div>

  </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        function getColor(id) {
            $('ul li a').click(function(){
                $('li a').removeClass("active");
                $(this).addClass("active");
            });
        }
        
    });

    $("#isisearch").on("keyup", function(e) {
        var key = e.which;

    if (key == 13) // the enter key ascii code
    {
        getSearch();
    }
    });

    function getSearch(){

        // if (cari=='') {
            var search = $("#isisearch").val();
        // }


        base_url = '<?php echo base_url();?>';

        $.ajax({

            type: "GET",

            url: base_url+"GetListBerita",

            data: {'search':search},

            success: function(html){

                window.location= base_url+'GetListBerita/search/?search='+search;

            },

            error: function(){


            }

        });

    // }

}
</script>







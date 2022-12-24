<?php
error_reporting(0);
if(@$_GET['lang']!=''){
$_SESSION['lang']=$_GET['lang'];
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
<title>GRESINDA ALKESINDO PANDORA</title>
<base href="<?=base_url()?>" />
<!-- <meta name="description" content="" />
<meta property="og:title" content="" />
<meta property="og:description" content="..." />
<meta property="og:url" content="<?=base_url()?>" />
<meta property="og:image" content="" /> -->
<!-- <link href="" rel="icon" /> -->
<link href="<?=base_url()?>assets/image/gap/gap_fav.jpeg" rel="icon" />
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto+Slab:regular%7CPlayfair+Display:regular,700&amp;subset=latin"/>
<link rel="stylesheet" href="<?=base_url()?>assets/css/j-strap.css?j2v=2.6.3"/>
<link rel="stylesheet" href="<?=base_url()?>assets/js/jquery/ui/themes/ui-lightness/jquery-ui-1.8.16.custom.css?j2v=2.6.3"/>
<link rel="stylesheet" href="<?=base_url()?>assets/lib/owl-carousel/owl.carousel.css?j2v=2.6.3"/>
<link rel="stylesheet" href="<?=base_url()?>assets/lib/owl-carousel/owl.transitions.css?j2v=2.6.3"/>
<link rel="stylesheet" href="<?=base_url()?>assets/lib/magnific-popup/magnific-popup.css?j2v=2.6.3"/>
<link rel="stylesheet" href="<?=base_url()?>assets/lib/rs-plugin/css/settings.css?j2v=2.6.3"/>
<link rel="stylesheet" href="<?=base_url()?>assets/css/hint.min.css?j2v=2.6.3"/>
<link rel="stylesheet" href="<?=base_url()?>assets/css/journal.css?j2v=2.6.3"/>
<link rel="stylesheet" href="<?=base_url()?>assets/css/features.css?j2v=2.6.3"/>
<link rel="stylesheet" href="<?=base_url()?>assets/css/header.css?j2v=2.6.3"/>
<link rel="stylesheet" href="<?=base_url()?>assets/css/module.css?j2v=2.6.3"/>
<link rel="stylesheet" href="<?=base_url()?>assets/css/pages.css?j2v=2.6.3"/>
<link rel="stylesheet" href="<?=base_url()?>assets/css/account.css?j2v=2.6.3"/>
<link rel="stylesheet" href="<?=base_url()?>assets/css/blog-manager.css?j2v=2.6.3"/>
<link rel="stylesheet" href="<?=base_url()?>assets/css/side-column.css?j2v=2.6.3"/>
<link rel="stylesheet" href="<?=base_url()?>assets/css/product.css?j2v=2.6.3"/>
<link rel="stylesheet" href="<?=base_url()?>assets/css/category.css?j2v=2.6.3"/>
<link rel="stylesheet" href="<?=base_url()?>assets/css/footer.css?j2v=2.6.3"/>
<link rel="stylesheet" href="<?=base_url()?>assets/css/icons.css?j2v=2.6.3"/>
<link rel="stylesheet" href="<?=base_url()?>assets/css/responsive.css?j2v=2.6.3"/>
<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css?j2v=2.6.3" />
<script type="text/javascript" src="<?=base_url()?>assets/lib/jquery/jquery-1.8.3.min.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/jquery.ui/jquery-ui-1.8.24.min.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/common.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery/jquery.total-storage.min.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/jquery.tabs/tabs.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/owl-carousel/owl.carousel.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/magnific-popup/jquery.magnific-popup.min.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/actual/jquery.actual.min.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/countdown/jquery.countdown.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/image-zoom/jquery.imagezoom.min.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/lazy/jquery.lazy.1.6.min.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/rs-plugin/js/jquery.themepunch.tools.min.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/rs-plugin/js/jquery.themepunch.revolution.min.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/quovolver/jquery.quovolver.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/jqueryc/jqueryc.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/journal.js?j2v=2.6.3"></script>
<!--whatsapp-->
      <link type="text/css" rel="stylesheet" href="<?=base_url();?>assets/css/whatsapp_chat.css" />    
      <!-- animate CSS -->
      <link href="<?=base_url()?>assets/css/animate.css" rel="stylesheet">
<!-- Fancy Box -->
      <!-- <script src="//code.jquery.com/jquery-3.3.1.min.js"></script> -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
      <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

<!--[if (gte IE 6)&(lte IE 8)]><script src="catalog/view/theme/journal2/lib/selectivizr/selectivizr.min.js"></script><![endif]-->
<script>
        Journal.COUNTDOWN = {
        DAYS    : "Days",
        HOURS   : "Hours",
        MINUTES : "Min",
        SECONDS : "Sec"
    };
        Journal.NOTIFICATION_BUTTONS = '<div class="notification-buttons"><a class="button notification-cart" href="<?=base_url()?>cart">View Cart</a><a class="button notification-checkout" href="<?=base_url()?>checkout">Checkout</a></div>';
</script>
</head>
<body>

<header class="journal-header-center journal-header-mega nolang-nocurr">

    <div class="journal-top-header j-min z-1"></div>
    <div class="journal-menu-bg j-min z-0"> </div>
    <div class="journal-center-bg j-100 z-0"> </div>

    <div id="header" class="journal-header row z-2">

        <div class="journal-links j-min xs-100 sm-100 md-50 lg-50 xl-50">
            <div class="links j-min">
                <!-- <a href="<?=base_url()?>"  class="icon-only" target="_blank"><i style="margin-right: 5px; font-size: 16px" data-icon="&#xe686;"></i><span class="top-menu-link">innotek_instruments</span></a>
                <a href="mailto:info@innotek.com.pk"  class="icon-only" target="_blank"><i style="margin-right: 5px; font-size: 16px" data-icon="&#xe698;"></i><span class="top-menu-link">info@innotek.com.pk</span></a>
                <span class="no-link"  class="icon-only no-link"><i style="margin-right: 5px; font-size: 16px" data-icon="&#xe084;"></i>+92 (52) 4270836</span>
                <a href="<?=base_url()?>"  class="icon-only" target="_blank"><i><img style="margin-right: 5px; " src="<?=base_url()?>assets/image/data/waa.jpg" alt="" title="" /></i><span class="top-menu-link">+92 (333) 8639454</span></a> -->

                <!-- //dg -->

                 <?php

$contactus = $this->db->query("SELECT * FROM tbl_website where id = '2'")->row();


?>
              <!--   <a href="<?=base_url()?>"  class="icon-only" target="_blank"><i style="margin-right: 5px; font-size: 16px" data-icon="&#xe686;"></i><span class="top-menu-link">innotek_instruments</span></a> -->
                <a href="mailto:admin@gap-id.com"  class="icon-only" target="_blank"><i style="margin-right: 5px; font-size: 16px" data-icon="&#xe698;"></i><span class="top-menu-link"><?= $contactus->email ?></span></a>
               <!--  <span class="no-link"  class="icon-only no-link"><i style="margin-right: 5px; font-size: 16px" data-icon="&#xe084;"></i>+92 (52) 4270836</span> -->
                <span class="no-link"  class="icon-only no-link"><i style="margin-right: 5px; font-size: 16px" data-icon="&#xe084;"></i><?= $contactus->phoneOffice ?></span>
                <span class="no-link"  class="icon-only no-link"><i style="margin-right: 5px; font-size: 16px" data-icon="&#xe084;"></i><?= $contactus->phone ?></span>
                <!-- <a href="<?=base_url()?>"  class="icon-only" target="_blank"><i><img style="margin-right: 5px; " src="<?=base_url()?>assets/image/data/waa.jpg" alt="" title="" /></i><span class="top-menu-link">+92 (333) 8639454</span></a> -->

                  <a href="<?=current_url();?>?lang=eng"  class="icon-only"><i style="margin-right: 5px; font-size: 16px"><img src="<?=base_url()?>assets/image/flag-eng.png" style="margin-top: -4px;"></i><span class="top-menu-link">ENG</span></a>
                   <a href="<?=current_url();?>"  class="icon-only"><i style="margin-right: 5px; font-size: 16px"><img src="<?=base_url()?>assets/image/flag-indo.png" style="margin-top: -4px;"></i><span class="top-menu-link">INA</span></a>
            </div>
        </div>

        <div class="journal-secondary j-min xs-100 sm-100 md-50 lg-50 xl-50">



            <div class="links j-min">
            <!--     <a href="<?=current_url();?>?lang=eng">
                                                    <img src="<?=base_url()?>assets/image/flag-eng.png" >
                                                    ENG
                                                </a>
                                                |
                                                <a href="<?=current_url();?>">
                                                    <img src="<?=base_url()?>assets/image/flag-indo.png">
                                                    INA
                                                </a> -->
                     

                  


              <!--   <span class="no-link"  class="no-link"><i style="margin-right: 5px; font-size: 16px" data-icon="&#xe078;"></i><?=(@$_GET['lang']!='eng') ?  'Produsen Instrumen Bedah dan Gigi' :  'Manufacturers of Surgical and Dental Instruments
';?></span>   -->         
                </div>
        </div>

                <div class="journal-logo j-100 xs-100 sm-100 md-30 lg-30 xl-30"> 
                        <div id="logo">
                <a href="">
                   <!--  <img src="<?=base_url()?>assets/image/cache/data/inno/final-logo3-250x75.png" width="250" height="75" alt="Innotek Instruments" title="Innotek Instruments" />                </a> -->
                    <!-- <img src="<?=base_url()?>assets/image/gap/GAP.png" width="250" height="75" alt="Innotek Instruments" title="Innotek Instruments" />  -->
                     <!-- <img src="https://admin.gap-id.co.id/upload/posts/<?=$contactus->image?>" width="250" height="75"  />  -->
                     <img src="https://admin.gap-id.co.id/upload/posts/<?=$contactus->image?>" width="250" height="75"  />  
                                   </a>
            </div>
                    </div>
        <div class="journal-search j-min xs-100 sm-50 md-45 lg-45 xl-45">
                        <div id="search" class="j-min">
                <div class="button-search j-min"><i></i></div>
                                <input type="text" name="search" placeholder="Search Products" value="" autocomplete="off" />
                            </div>
                    </div>

        
        
        <!-- <div class="journal-cart row j-min xs-100 sm-50 md-25 lg-25 xl-25">
            <div id="cart">
  <div class="heading" >
    <a><span id="cart-total">0 item(s) -  0.00</span><i></i></a>
  </div>
  <div class="content">
    <div class="cart-wrapper">
        <div class="empty">Your shopping cart is empty!</div>
      </div>
</div>
</div>        </div> -->

<div class="journal-menu j-min xs-100 sm-100 md-100 lg-100 xl-100">
            <div class="mobile-trigger">MENU</div>
<ul class="super-menu mobile-menu menu-table" style="table-layout: auto">
        <li class="drop-down hide-on-mobile icon-only">
                <a href="<?=base_url()?>" ><i style="margin-right: 5px; font-size: 20px; top: -1px" data-icon="&#xe14f;"></i></a>
                                                                
       
        <span class="mobile-plus">+</span>
    </li>

    <!-- //tambah multi bahasa -->
    <li class="<?php if($this->uri->segment(1)=="about"){echo "active";} ?>" >
                                                <a href="<?=(@$_GET['lang']!='eng') ? base_url().'about' : base_url().'about?lang=eng';?>">
                                                    <div class="logo-navbar"></div>
                                                    <div class="text-navbar"><?=(@$_GET['lang']!='eng') ?  'PROFIL' :  'PROFILE';?></div>
                                                </a>
                                            </li>
    <li class="<?php if($this->uri->segment(1)=="product"){echo "active";} ?>" >
                                                <a href="<?=(@$_GET['lang']!='eng') ? base_url().'product' : base_url().'product?lang=eng';?>">
                                                    <div class="logo-navbar"></div>
                                                    <div class="text-navbar"><?=(@$_GET['lang']!='eng') ?  'PRODUK' :  'PRODUCT';?></div>
                                                </a>
                                            </li>
    <li class="<?php if($this->uri->segment(1)=="gallery"){echo "active";} ?>" >
                                                <a href="<?=(@$_GET['lang']!='eng') ? base_url().'gallery' : base_url().'gallery?lang=eng';?>">
                                                    <div class="logo-navbar"></div>
                                                    <div class="text-navbar"><?=(@$_GET['lang']!='eng') ?  'GALERI' :  'GALLERY';?></div>
                                                </a>
                                            </li>
    <li class="<?php if($this->uri->segment(1)=="download"){echo "active";} ?>" >
                                                <a href="<?=(@$_GET['lang']!='eng') ? base_url().'download' : base_url().'download?lang=eng';?>">
                                                    <div class="logo-navbar"></div>
                                                    <div class="text-navbar"><?=(@$_GET['lang']!='eng') ?  'KATALOG' :  'CATALOGUE';?></div>
                                                </a>
                                            </li>
    <li class="<?php if($this->uri->segment(1)=="certificate"){echo "active";} ?>" >
                                                <a href="<?=(@$_GET['lang']!='eng') ? base_url().'certificate' : base_url().'certificate?lang=eng';?>">
                                                    <div class="logo-navbar"></div>
                                                    <div class="text-navbar"><?=(@$_GET['lang']!='eng') ?  'SERTIFIKASI' :  'CERTIFICATIONS';?></div>
                                                </a>
                                            </li>
                                            <li class="<?php if($this->uri->segment(1)=="news"){echo "active";} ?>" >
                <a href="<?=(@$_GET['lang']!='eng') ? base_url().'news' : base_url().'news?lang=eng';?>">
                    <div class="logo-navbar"></div>
                    <div class="text-navbar"><?=(@$_GET['lang']!='eng') ?  'BERITA' :  'NEWS';?></div>
                </a>
            </li>
            <li class="<?php if($this->uri->segment(1)=="contact"){echo "active";} ?>" >
                <a href="<?=(@$_GET['lang']!='eng') ? base_url().'contact' : base_url().'contact?lang=eng';?>">
                    <div class="logo-navbar"></div>
                    <div class="text-navbar"><?=(@$_GET['lang']!='eng') ?  'KONTAK' :  'CONTACT';?></div>
                </a>
            </li>









        <!-- <li class="drop-down ">
                <a href="<?=base_url()?>about" ><span class="main-menu-text">About us</span></a>
                                                                
        
        <span class="mobile-plus">+</span>
    </li>
        <li class="mega-menu-categories ">
               
                <a href="<?=base_url()?>product" ><span class="main-menu-text">Product</span></a>
                        <div class="mega-menu"> -->

          <!--   <div>
                        
                        <div class="mega-menu-item xs-50 sm-33 md-25 lg-25 xl-25 menu-image-right menu-no-image">
                <div>
                    <h3><a href="<?=base_url()?>Goitre">Goitre</a></h3>
                                                            <ul>
                                                                    </ul>
                                        <span class="clearfix"> </span>
                </div>
            </div>
                       
                        <div class="mega-menu-item xs-50 sm-33 md-25 lg-25 xl-25 menu-image-right menu-no-image">
                <div>
                    <h3><a href="<?=base_url()?>Goitre">Sterilization </a></h3>
                                                            <ul>
                                                                    </ul>
                                        <span class="clearfix"> </span>
                </div>
            </div>
                        <div class="mega-menu-item xs-50 sm-33 md-25 lg-25 xl-25 menu-image-right menu-no-image">
                <div>
                    <h3><a href="<?=base_url()?>Goitre">Hollowware</a></h3>
                                                            <ul>
                                                                    </ul>
                                        <span class="clearfix"> </span>
                </div>
            </div>
                        </div> -->
         <!--    <span class="clearfix"> </span>
        </div>
        <span class="clearfix"> </span>

                                        
        
        <span class="mobile-plus">+</span>
    </li>
        <li class="drop-down ">
                <a href="<?=base_url()?>gallery" ><span class="main-menu-text">Gallery</span></a>
                                                                
        
        <span class="mobile-plus">+</span>
    </li> -->
   <!--  <li class="drop-down ">
                <a href="#" ><span class="main-menu-text">Dental Instruments</span></a>
                                                                
        
        <span class="mobile-plus">+</span>
    </li> -->
       <!--  <li class="drop-down ">
                <a><span class="main-menu-text">Medical Scrubs</span></a>
                                                <ul><li><a>MEN</a></li><li><a>WOMEN</a></li><li><a>SIZE GUIDE</a></li></ul>                
        
        <span class="mobile-plus">+</span>
    </li> -->
     <!--    <li class="drop-down ">
                <a href="<?=base_url()?>download" ><span class="main-menu-text">Catalogue</span></a>
                                                <ul><li><a href="<?=base_url()?>download" >DOWNLOAD</a></li></ul>                
        
        <span class="mobile-plus">+</span>
    </li>
        <li class="drop-down ">
                <a href="<?=base_url()?>certificate" ><span class="main-menu-text">Certifications</span></a>
                                                                
        
        <span class="mobile-plus">+</span>
    </li>
        <li class="drop-down ">
                <a href="<?=base_url()?>contact" ><span class="main-menu-text">Contact us</span></a>
                                                                
        
        <span class="mobile-plus">+</span>
    </li>
    </ul>  -->
           </div>




        <!-- <div class="journal-menu j-min xs-100 sm-100 md-100 lg-100 xl-100">
            <div class="mobile-trigger">MENU</div>
<ul class="super-menu mobile-menu menu-table" style="table-layout: auto">
        <li class="drop-down hide-on-mobile icon-only">
                <a href="<?=base_url()?>" ><i style="margin-right: 5px; font-size: 20px; top: -1px" data-icon="&#xe14f;"></i></a>
                                                                
        
        <span class="mobile-plus">+</span>
    </li>
        <li class="drop-down ">
                <a href="<?=base_url()?>about" ><span class="main-menu-text">About us</span></a>
                                                                
        
        <span class="mobile-plus">+</span>
    </li>
        <li class="mega-menu-categories ">
                <a href="<?=base_url()?>product" ><span class="main-menu-text">Surgical Instruments</span></a>
                        <div class="mega-menu">
            <div>
                        
                        <div class="mega-menu-item xs-50 sm-33 md-25 lg-25 xl-25 menu-image-right menu-no-image">
                <div>
                    <h3><a href="<?=base_url()?>Goitre">Goitre</a></h3>
                                                            <ul>
                                                                    </ul>
                                        <span class="clearfix"> </span>
                </div>
            </div>
                       
                        <div class="mega-menu-item xs-50 sm-33 md-25 lg-25 xl-25 menu-image-right menu-no-image">
                <div>
                    <h3><a href="<?=base_url()?>Goitre">Sterilization </a></h3>
                                                            <ul>
                                                                    </ul>
                                        <span class="clearfix"> </span>
                </div>
            </div>
                        <div class="mega-menu-item xs-50 sm-33 md-25 lg-25 xl-25 menu-image-right menu-no-image">
                <div>
                    <h3><a href="<?=base_url()?>Goitre">Hollowware</a></h3>
                                                            <ul>
                                                                    </ul>
                                        <span class="clearfix"> </span>
                </div>
            </div>
                        </div>
            <span class="clearfix"> </span>
        </div>
        <span class="clearfix"> </span>

                                        
        
        <span class="mobile-plus">+</span>
    </li>
        <li class="drop-down ">
                <a href="#" ><span class="main-menu-text">Dental Instruments</span></a>
                                                                
        
        <span class="mobile-plus">+</span>
    </li>
        <li class="drop-down ">
                <a><span class="main-menu-text">Medical Scrubs</span></a>
                                                <ul><li><a>MEN</a></li><li><a>WOMEN</a></li><li><a>SIZE GUIDE</a></li></ul>                
        
        <span class="mobile-plus">+</span>
    </li>
        <li class="drop-down ">
                <a><span class="main-menu-text">Catalogue</span></a>
                                                <ul><li><a href="<?=base_url()?>download" >DOWNLOAD</a></li></ul>                
        
        <span class="mobile-plus">+</span>
    </li>
        <li class="drop-down ">
                <a href="<?=base_url()?>certificate" ><span class="main-menu-text">Certifications</span></a>
                                                                
        
        <span class="mobile-plus">+</span>
    </li>
        <li class="drop-down ">
                <a href="<?=base_url()?>contact" ><span class="main-menu-text">Contact us</span></a>
                                                                
        
        <span class="mobile-plus">+</span>
    </li>
    </ul>        </div> -->
                <script>
            if($(window).width() < 760){
                $('.journal-header-center .journal-links').before($('.journal-header-center .journal-language'));
                $('.journal-header-center .journal-logo').after($('.journal-header-center .journal-search'));
            }
        </script>
            </div>
</header>
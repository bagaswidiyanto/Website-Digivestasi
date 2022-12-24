<!--[if lt IE 9]>
<div class="old-browser">You are using an old browser. Please <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">upgrade to a newer version</a> or <a href="http://browsehappy.com/">try a different browser</a>.</div>
<![endif]-->
<div id="journal-popup-1322708941" class="journal-popup journal-popup-text " style="width: 500px; height: 400px; background-attachment: scroll">
        <div class="journal-popup-header">
        <div class="journal-popup-header-content heading-title" style="background-color: rgb(36,110,182); height: 40px; font-weight: normal; font-family: Helvetica, Arial, sans-serif; font-size: 13px; font-style: normal; text-transform: none; color: rgb(255, 255, 255); text-align: center">UPCOMING EXHIBITIONTES</div>
    </div>
            <div class="journal-popup-content  overflow-on" style="height: 300px">
        <p style="text-align: center;">&nbsp;</p>

<p style="text-align: center;">&nbsp;</p>

<p style="text-align: center;">&nbsp;</p>
 
<p style="text-align: center;">&nbsp;</p>

<!-- <p style="text-align: center;"><img alt="" height="147" src="<?=base_url()?>assets/image/data/new.jpg" width="450" /></p> -->
<!-- <p style="text-align: center;"><img alt="" height="90" src="<?=base_url()?>assets/image/gap/GAP.jpg" width="250" /></p> -->

<p style="text-align: center;"><img alt="" height="90" src="https://admin.gap-id.co.id/upload/promo/<?=$promo->image?>" width="250" /></p>
<p style="text-align: center;">  <?= $promo->content ?></p>
<!-- <p style="text-align: center;">Please visit us at <strong>Expomed Eurasia</strong> from <strong>05 Nov 2020 - 07 Nov 2020</strong>&nbsp;at<br />
<strong>Tuyap Fair and Congress Centre, Istanbul, Turkey, Hall No 2, Stand 229B1<span style="text-align: center;">.</span></strong></p>   -->


</div>
    
    
    
    
    </div>
<script>
    (function () {
        
        
        var open_after = parseInt('0', 10);
        var close_after = parseInt('0', 10);

        setTimeout(function () {
            $.magnificPopup.open({
                items: {
                    src: '#journal-popup-1322708941',
                    type: 'inline'
                },
                showCloseBtn: true,
                closeOnContentClick: false,
                closeOnBgClick: false,
                removalDelay: 200,
                callbacks: {
                    close: function () {
                        $('html').removeClass('has-popup');
                    },
                    open: function () {
                        $('html').addClass('has-popup');
                    }
                }
            });

            if (close_after > 0) {
                setTimeout(function () {
                    $.magnificPopup.close();
                }, close_after);
            }
        }, open_after);

        $('#journal-popup-1322708941 .dont-show-me').change(function () {
            if ($(this).is(':checked')) {
                $.cookie('popup-51ojtm', true, {
                    expires: 365
                });
            } else {
                $.removeCookie('popup-51ojtm')
            }
        });
    }());
</script>

<div id="top-modules">
   <div class="journal2_slider" style="background-repeat: repeat; background-position: center top; background-attachment: scroll; padding-top: 0px; padding-bottom: 0px"><div style="max-width: 100%; height: 500px;" class="tp-banner-container box nav-on-hover journal-fullwidth-slider   ">
    <div class="tp-banner" id="journal-slider-26311871" style="max-height: 500px; display: none;">
        <ul>
        	<?php
                       
             foreach($slider->result() as $slide){
                
        
                  ?>
        	
                        <li data-fstransition="fade" data-fsslotamount="0" data-fsmasterspeed="0" data-transition="random" data-easing="easeInOutQuart" data-masterspeed="800" data-thumb="https://admin.gap-id.co.id/upload/slider/<?=$slide->imageSlider?>" >
                        <img src="https://admin.gap-id.co.id/upload/slider/<?=$slide->imageSlider?>" data-lazyload="https://admin.gap-id.co.id/upload/slider/<?=$slide->imageSlider?>" alt="" />
                        
                                    </li>
                     <!--    <li data-transition="random" data-easing="easeInOutQuart" data-masterspeed="800" data-thumb="<?=base_url()?>assets/image/cache/data/inno/slide12-110x55h.jpg" >
                        <img src="<?=base_url()?>assets/image/cache/data/journal2/transparent-980x400.png" data-lazyload="<?=base_url()?>assets/image/cache/data/inno/slide12-1600x500.jpg" alt="" />
                                    </li>
                        <li data-transition="random" data-easing="easeInOutQuart" data-masterspeed="800" data-thumb="<?=base_url()?>assets/image/cache/data/inno/slide13-110x55h.jpg" >
                        <img src="<?=base_url()?>assets/image/cache/data/journal2/transparent-980x400.png" data-lazyload="<?=base_url()?>assets/image/cache/data/inno/slide13-1600x500.jpg" alt="" />
                                    </li> -->

                                     <?php }

            
            ?>
                     </ul>
                <div class="tp-bannertimer tp-bottom"></div>
            </div>
</div>

<script>
    (function () {
        $('<style></style>').appendTo($('head'));

        $(function() {
            var opts = $.parseJSON('{"delay":"4000","onHoverStop":"on","thumbWidth":"110","thumbHeight":"55","thumbAmount":3,"hideThumbs":"1","navigationType":"bullet","navigationArrows":"solo","navigationStyle":"round","navigationHAlign":"center","navigationVAlign":"bottom","navigationHOffset":"","navigationVOffset":"20","startwidth":"1220","startheight":"500"}');
            opts.hideThumbs = 0;
            $('#journal-slider-26311871').show().revolution(opts);
                    });
    })();
</script>
</div>
<div class="journal2_headline_rotator" style="background-color: rgb(204, 204, 204); background-repeat: repeat; background-position: center top; background-attachment: scroll; padding-top: 10px; padding-bottom: 15px"><div class="journal-rotator headline-mode box hide-on-mobile bullets- align-center bullets-off" id="journal-headline-rotator-221833906" style="display: none; background-color: rgba(25, 0, 102, 0); background-repeat: repeat; background-position: center top; background-attachment: scroll; max-width: 1220px">
        <div class="quote  " style="text-align: center; font-weight: normal; font-family: Helvetica, Arial, sans-serif; font-size: 20px; font-style: normal; text-transform: none; color: rgb(0, 0, 0)">
                <div class="rotator-text"><?=(@$_GET['lang']!='eng') ?  'Produsen Instrumen Bedah dan Gigi' :  'Manufacturers of Surgical and Dental Instruments';?></div>
                <div class="clearfix"> </div>
    </div>
        <div class="quote  " style="text-align: center; font-weight: normal; font-family: Helvetica, Arial, sans-serif; font-size: 20px; font-style: normal; text-transform: none; color: rgb(0, 0, 0)">
                <div class="rotator-text"><?=(@$_GET['lang']!='eng') ?  'Sertifikasi ISO 9001: 2015, sertifikasi ISO 13485: 2016 dan CE Mark' :  'ISO 9001:2015 certified, ISO 13485:2016 certified and CE Mark';?></div>
                <div class="clearfix"> </div>
    </div>
    </div>
<script>
    (function () {
        var single_quote = parseInt('2', 10) <= 1;

        $('#journal-headline-rotator-221833906').show().quovolver({
            children        : '.quote',
            equalHeight     : false,
            navPosition     : single_quote ? '' : 'below',
            navNum          : '' ? true : false,
            pauseOnHover    : parseInt('1', 10) ? true : false,
            autoPlay        : !single_quote,
            autoPlaySpeed   : '5000',
            transitionSpeed : 300
        });
    })();
</script></div>
<div class="journal2_carousel" style="background-attachment: scroll; padding-top: 0px; padding-bottom: 0px"><div class="box journal-carousel carousel-product   " id="carousel-1167006846" style="max-width: 1220px; background-attachment: scroll">
    <div>
        <div class="htabs box-heading single-tab">
                                <a href="#carousel-1167006846-0" class="atab">Featured Products</a>
                    </div>
                <div id="carousel-1167006846-0" class="owl-carousel tab-content box-content">
                <!-- <div class="product-grid-item   display-icon block-button ">
            <div class="product-wrapper" style="">
                                <div class="image">
                    <a href="https://www.innotek.com.pk/index.php?route=product/product&amp;product_id=2" >
                        <img class="lazyOwl first-image" width="250" height="250" src="<?=base_url()?>../upload/slider/<?=$slide->imageSlider?>" data-src="<?=base_url()?>../upload/slider/<?=$slide->imageSlider?>" title="01.0010.20" alt="01.0010.20" />
                    </a>
                        <div class="wishlist"><a onclick="addToWishList('2');" class="hint--top" data-hint="Add to Wish List"><i class="wishlist-icon"></i><span class="button-wishlist-text">Add to Wish List</span></a></div>
                        <div class="compare"><a onclick="addToCompare('2');" class="hint--top" data-hint="Add to Compare"><i class="compare-icon"></i><span class="button-compare-text">Add to Compare</span></a></div>
                                    </div>
                                <div class="product-details">
                    <div class="name"><a href="https://www.innotek.com.pk/index.php?route=product/product&amp;product_id=2">01.0010.20</a></div>
                    <div class="description">Taylor
..</div>
                                        <div class="price">
                                                 0.00                                                                        <hr>
                        <span class="price-tax">text_tax  0.00</span>
                                            </div>
                                                            <hr>
                                        <div class="cart ">
                        <a onclick="addToCart('2');" class="button hint--top" data-hint="Add to Cart"><i class="button-left-icon"></i><span class="button-cart-text">Add to Cart</span><i class="button-right-icon"></i></a>
                    </div>
                                        <div class="wishlist"><a onclick="addToWishList('2');" class="hint--top" data-hint="Add to Wish List"><i class="wishlist-icon"></i><span class="button-wishlist-text">Add to Wish List</span></a></div>
                    <div class="compare"><a onclick="addToCompare('2');" class="hint--top" data-hint="Add to Compare"><i class="compare-icon"></i><span class="button-compare-text">Add to Compare</span></a></div>
                </div>
            </div>
        </div> -->

        <?php
                       
             foreach($produk->result() as $produks){

             	?>

                <div class="product-grid-item   display-icon block-button ">
            <div class="product-wrapper" style="">
                                <div class="image">
                    <!-- <a href="https://www.innotek.com.pk/index.php?route=product/product&amp;product_id=373" > -->
                        <a href="" >
                        <img class="lazyOwl first-image" width="250" height="250" src="https://admin.gap-id.co.id/upload/product/<?=$produks->mainImage?>" data-src="https://admin.gap-id.co.id/upload/product/<?=$produks->mainImage?>" data-fancybox="gallery" title="05.0011.20" alt="05.0011.20" />
                    </a>
                                                                <div class="wishlist"><a onclick="addToWishList('373');" class="hint--top" data-hint="Add to Wish List"><i class="wishlist-icon"></i><span class="button-wishlist-text">Add to Wish List</span></a></div>
                        <div class="compare"><a onclick="addToCompare('373');" class="hint--top" data-hint="Add to Compare"><i class="compare-icon"></i><span class="button-compare-text">Add to Compare</span></a></div>
                                    </div>
                                <div class="product-details">
                    <div class="name"><a href=""><?= $produks->productName ?></a></div>
                    <div class="description">Standard BB CVD..</div>
                                        <div class="price">
                                                 0.00                                                                        <hr>
                        <span class="price-tax">text_tax  0.00</span>
                                            </div>
                                                            <hr>
                                        <div class="cart ">
                                            <!-- komen add to chart -->
                        <!-- <a onclick="addToCart('373');" class="button hint--top" data-hint="Add to Cart"><i class="button-left-icon"></i><span class="button-cart-text">Add to Cart</span><i class="button-right-icon"></i></a> -->
                    </div>
                                        <div class="wishlist"><a onclick="addToWishList('373');" class="hint--top" data-hint="Add to Wish List"><i class="wishlist-icon"></i><span class="button-wishlist-text">Add to Wish List</span></a></div>
                    <div class="compare"><a onclick="addToCompare('373');" class="hint--top" data-hint="Add to Compare"><i class="compare-icon"></i><span class="button-compare-text">Add to Compare</span></a></div>
                </div>
            </div>
        </div>
    <?php } ?>
                <!-- <div class="product-grid-item   display-icon block-button ">
            <div class="product-wrapper" style="">
                                <div class="image">
                    <a href="https://www.innotek.com.pk/index.php?route=product/product&amp;product_id=1259" >
                        <img class="lazyOwl first-image" width="250" height="250" src="<?=base_url()?>assets/image/cache/data/journal2/transparent-250x250.png" data-src="<?=base_url()?>assets/image/cache/07.0370.26-250x250.jpg" title="07.0370.26" alt="07.0370.26" />
                    </a>
                                                                <div class="wishlist"><a onclick="addToWishList('1259');" class="hint--top" data-hint="Add to Wish List"><i class="wishlist-icon"></i><span class="button-wishlist-text">Add to Wish List</span></a></div>
                        <div class="compare"><a onclick="addToCompare('1259');" class="hint--top" data-hint="Add to Compare"><i class="compare-icon"></i><span class="button-compare-text">Add to Compare</span></a></div>
                                    </div>
                                <div class="product-details">
                    <div class="name"><a href="https://www.innotek.com.pk/index.php?route=product/product&amp;product_id=1259">07.0370.26</a></div>
                    <div class="description">TOENNIS STR 1:2..</div>
                                        <div class="price">
                                                 0.00                                                                        <hr>
                        <span class="price-tax">text_tax  0.00</span>
                                            </div>
                                                            <hr>
                                        <div class="cart ">
                        <a onclick="addToCart('1259');" class="button hint--top" data-hint="Add to Cart"><i class="button-left-icon"></i><span class="button-cart-text">Add to Cart</span><i class="button-right-icon"></i></a>
                    </div>
                                        <div class="wishlist"><a onclick="addToWishList('1259');" class="hint--top" data-hint="Add to Wish List"><i class="wishlist-icon"></i><span class="button-wishlist-text">Add to Wish List</span></a></div>
                    <div class="compare"><a onclick="addToCompare('1259');" class="hint--top" data-hint="Add to Compare"><i class="compare-icon"></i><span class="button-compare-text">Add to Compare</span></a></div>
                </div>
            </div>
        </div> -->
               <!--  <div class="product-grid-item   display-icon block-button ">
            <div class="product-wrapper" style="">
                                <div class="image">
                    <a href="https://www.innotek.com.pk/index.php?route=product/product&amp;product_id=1713" >
                        <img class="lazyOwl first-image" width="250" height="250" src="<?=base_url()?>assets/image/cache/data/journal2/transparent-250x250.png" data-src="<?=base_url()?>assets/image/cache/09.0152.04-250x250.jpg" title="09.0152.04" alt="09.0152.04" />
                    </a>
                                                                <div class="wishlist"><a onclick="addToWishList('1713');" class="hint--top" data-hint="Add to Wish List"><i class="wishlist-icon"></i><span class="button-wishlist-text">Add to Wish List</span></a></div>
                        <div class="compare"><a onclick="addToCompare('1713');" class="hint--top" data-hint="Add to Compare"><i class="compare-icon"></i><span class="button-compare-text">Add to Compare</span></a></div>
                                    </div>
                                <div class="product-details">
                    <div class="name"><a href="https://www.innotek.com.pk/index.php?route=product/product&amp;product_id=1713">09.0152.04</a></div>
                    <div class="description">ISRAEL..</div>
                                        <div class="price">
                                                 0.00                                                                        <hr>
                        <span class="price-tax">text_tax  0.00</span>
                                            </div>
                                                            <hr>
                                        <div class="cart ">
                        <a onclick="addToCart('1713');" class="button hint--top" data-hint="Add to Cart"><i class="button-left-icon"></i><span class="button-cart-text">Add to Cart</span><i class="button-right-icon"></i></a>
                    </div>
                                        <div class="wishlist"><a onclick="addToWishList('1713');" class="hint--top" data-hint="Add to Wish List"><i class="wishlist-icon"></i><span class="button-wishlist-text">Add to Wish List</span></a></div>
                    <div class="compare"><a onclick="addToCompare('1713');" class="hint--top" data-hint="Add to Compare"><i class="compare-icon"></i><span class="button-compare-text">Add to Compare</span></a></div>
                </div>
            </div>
        </div>
                <div class="product-grid-item   display-icon block-button ">
            <div class="product-wrapper" style="">
                                <div class="image">
                    <a href="https://www.innotek.com.pk/index.php?route=product/product&amp;product_id=4280" >
                        <img class="lazyOwl first-image" width="250" height="250" src="<?=base_url()?>assets/image/cache/data/journal2/transparent-250x250.png" data-src="<?=base_url()?>assets/image/cache/21.0494.16-250x250.jpg" title="21.0494.16" alt="21.0494.16" />
                    </a>
                                                                <div class="wishlist"><a onclick="addToWishList('4280');" class="hint--top" data-hint="Add to Wish List"><i class="wishlist-icon"></i><span class="button-wishlist-text">Add to Wish List</span></a></div>
                        <div class="compare"><a onclick="addToCompare('4280');" class="hint--top" data-hint="Add to Compare"><i class="compare-icon"></i><span class="button-compare-text">Add to Compare</span></a></div>
                                    </div>
                                <div class="product-details">
                    <div class="name"><a href="https://www.innotek.com.pk/index.php?route=product/product&amp;product_id=4280">21.0494.16</a></div>
                    <div class="description">..</div>
                                        <div class="price">
                                                 0.00                                                                        <hr>
                        <span class="price-tax">text_tax  0.00</span>
                                            </div>
                                                            <hr>
                                        <div class="cart ">
                        <a onclick="addToCart('4280');" class="button hint--top" data-hint="Add to Cart"><i class="button-left-icon"></i><span class="button-cart-text">Add to Cart</span><i class="button-right-icon"></i></a>
                    </div>
                                        <div class="wishlist"><a onclick="addToWishList('4280');" class="hint--top" data-hint="Add to Wish List"><i class="wishlist-icon"></i><span class="button-wishlist-text">Add to Wish List</span></a></div>
                    <div class="compare"><a onclick="addToCompare('4280');" class="hint--top" data-hint="Add to Compare"><i class="compare-icon"></i><span class="button-compare-text">Add to Compare</span></a></div>
                </div>
            </div>
        </div>
                <div class="product-grid-item   display-icon block-button ">
            <div class="product-wrapper" style="">
                                <div class="image">
                    <a href="https://www.innotek.com.pk/index.php?route=product/product&amp;product_id=5897" >
                        <img class="lazyOwl first-image" width="250" height="250" src="<?=base_url()?>assets/image/cache/data/journal2/transparent-250x250.png" data-src="<?=base_url()?>assets/image/cache/25.0059.21-250x250.jpg" title="25.0059.21" alt="25.0059.21" />
                    </a>
                                                                <div class="wishlist"><a onclick="addToWishList('5897');" class="hint--top" data-hint="Add to Wish List"><i class="wishlist-icon"></i><span class="button-wishlist-text">Add to Wish List</span></a></div>
                        <div class="compare"><a onclick="addToCompare('5897');" class="hint--top" data-hint="Add to Compare"><i class="compare-icon"></i><span class="button-compare-text">Add to Compare</span></a></div>
                                    </div>
                                <div class="product-details">
                    <div class="name"><a href="https://www.innotek.com.pk/index.php?route=product/product&amp;product_id=5897">25.0059.21</a></div>
                    <div class="description">LURZ..</div>
                                        <div class="price">
                                                 0.00                                                                        <hr>
                        <span class="price-tax">text_tax  0.00</span>
                                            </div>
                                                            <hr>
                                        <div class="cart ">
                        <a onclick="addToCart('5897');" class="button hint--top" data-hint="Add to Cart"><i class="button-left-icon"></i><span class="button-cart-text">Add to Cart</span><i class="button-right-icon"></i></a>
                    </div>
                                        <div class="wishlist"><a onclick="addToWishList('5897');" class="hint--top" data-hint="Add to Wish List"><i class="wishlist-icon"></i><span class="button-wishlist-text">Add to Wish List</span></a></div>
                    <div class="compare"><a onclick="addToCompare('5897');" class="hint--top" data-hint="Add to Compare"><i class="compare-icon"></i><span class="button-compare-text">Add to Compare</span></a></div>
                </div>
            </div>
        </div>
                <div class="product-grid-item   display-icon block-button ">
            <div class="product-wrapper" style="">
                                <div class="image">
                    <a href="https://www.innotek.com.pk/index.php?route=product/product&amp;product_id=5975" >
                        <img class="lazyOwl first-image" width="250" height="250" src="<?=base_url()?>assets/image/cache/data/journal2/transparent-250x250.png" data-src="<?=base_url()?>assets/image/cache/26.0106.08-250x250.jpg" title="26.0106.08" alt="26.0106.08" />
                    </a>
                                                                <div class="wishlist"><a onclick="addToWishList('5975');" class="hint--top" data-hint="Add to Wish List"><i class="wishlist-icon"></i><span class="button-wishlist-text">Add to Wish List</span></a></div>
                        <div class="compare"><a onclick="addToCompare('5975');" class="hint--top" data-hint="Add to Compare"><i class="compare-icon"></i><span class="button-compare-text">Add to Compare</span></a></div>
                                    </div>
                                <div class="product-details">
                    <div class="name"><a href="https://www.innotek.com.pk/index.php?route=product/product&amp;product_id=5975">26.0106.08</a></div>
                    <div class="description">STOCKMANN..</div>
                                        <div class="price">
                                                 0.00                                                                        <hr>
                        <span class="price-tax">text_tax  0.00</span>
                                            </div>
                                                            <hr>
                                        <div class="cart ">
                        <a onclick="addToCart('5975');" class="button hint--top" data-hint="Add to Cart"><i class="button-left-icon"></i><span class="button-cart-text">Add to Cart</span><i class="button-right-icon"></i></a>
                    </div>
                                        <div class="wishlist"><a onclick="addToWishList('5975');" class="hint--top" data-hint="Add to Wish List"><i class="wishlist-icon"></i><span class="button-wishlist-text">Add to Wish List</span></a></div>
                    <div class="compare"><a onclick="addToCompare('5975');" class="hint--top" data-hint="Add to Compare"><i class="compare-icon"></i><span class="button-compare-text">Add to Compare</span></a></div>
                </div>
            </div>
        </div>
                <div class="product-grid-item   display-icon block-button ">
            <div class="product-wrapper" style="">
                                <div class="image">
                    <a href="https://www.innotek.com.pk/index.php?route=product/product&amp;product_id=6084" >
                        <img class="lazyOwl first-image" width="250" height="250" src="<?=base_url()?>assets/image/cache/data/journal2/transparent-250x250.png" data-src="<?=base_url()?>assets/image/cache/26.0210.08-250x250.jpg" title="26.0210.08" alt="26.0210.08" />
                    </a>
                                                                <div class="wishlist"><a onclick="addToWishList('6084');" class="hint--top" data-hint="Add to Wish List"><i class="wishlist-icon"></i><span class="button-wishlist-text">Add to Wish List</span></a></div>
                        <div class="compare"><a onclick="addToCompare('6084');" class="hint--top" data-hint="Add to Compare"><i class="compare-icon"></i><span class="button-compare-text">Add to Compare</span></a></div>
                                    </div>
                                <div class="product-details">
                    <div class="name"><a href="https://www.innotek.com.pk/index.php?route=product/product&amp;product_id=6084">26.0210.08</a></div>
                    <div class="description">VAN BUREN..</div>
                                        <div class="price">
                                                 0.00                                                                        <hr>
                        <span class="price-tax">text_tax  0.00</span>
                                            </div>
                                                            <hr>
                                        <div class="cart ">
                        <a onclick="addToCart('6084');" class="button hint--top" data-hint="Add to Cart"><i class="button-left-icon"></i><span class="button-cart-text">Add to Cart</span><i class="button-right-icon"></i></a>
                    </div>
                                        <div class="wishlist"><a onclick="addToWishList('6084');" class="hint--top" data-hint="Add to Wish List"><i class="wishlist-icon"></i><span class="button-wishlist-text">Add to Wish List</span></a></div>
                    <div class="compare"><a onclick="addToCompare('6084');" class="hint--top" data-hint="Add to Compare"><i class="compare-icon"></i><span class="button-compare-text">Add to Compare</span></a></div>
                </div>
            </div>
        </div>
                <div class="product-grid-item   display-icon block-button ">
            <div class="product-wrapper" style="">
                                <div class="image">
                    <a href="https://www.innotek.com.pk/index.php?route=product/product&amp;product_id=6091" >
                        <img class="lazyOwl first-image" width="250" height="250" src="<?=base_url()?>assets/image/cache/data/journal2/transparent-250x250.png" data-src="<?=base_url()?>assets/image/cache/26.0210.22-250x250.jpg" title="26.0210.22" alt="26.0210.22" />
                    </a>
                                                                <div class="wishlist"><a onclick="addToWishList('6091');" class="hint--top" data-hint="Add to Wish List"><i class="wishlist-icon"></i><span class="button-wishlist-text">Add to Wish List</span></a></div>
                        <div class="compare"><a onclick="addToCompare('6091');" class="hint--top" data-hint="Add to Compare"><i class="compare-icon"></i><span class="button-compare-text">Add to Compare</span></a></div>
                                    </div>
                                <div class="product-details">
                    <div class="name"><a href="https://www.innotek.com.pk/index.php?route=product/product&amp;product_id=6091">26.0210.22</a></div>
                    <div class="description">VAN BUREN..</div>
                                        <div class="price">
                                                 0.00                                                                        <hr>
                        <span class="price-tax">text_tax  0.00</span>
                                            </div>
                                                            <hr>
                                        <div class="cart ">
                        <a onclick="addToCart('6091');" class="button hint--top" data-hint="Add to Cart"><i class="button-left-icon"></i><span class="button-cart-text">Add to Cart</span><i class="button-right-icon"></i></a>
                    </div>
                                        <div class="wishlist"><a onclick="addToWishList('6091');" class="hint--top" data-hint="Add to Wish List"><i class="wishlist-icon"></i><span class="button-wishlist-text">Add to Wish List</span></a></div>
                    <div class="compare"><a onclick="addToCompare('6091');" class="hint--top" data-hint="Add to Compare"><i class="compare-icon"></i><span class="button-compare-text">Add to Compare</span></a></div>
                </div>
            </div>
        </div>
                <div class="product-grid-item   display-icon block-button ">
            <div class="product-wrapper" style="">
                                <div class="image">
                    <a href="https://www.innotek.com.pk/index.php?route=product/product&amp;product_id=6307" >
                        <img class="lazyOwl first-image" width="250" height="250" src="<?=base_url()?>assets/image/cache/data/journal2/transparent-250x250.png" data-src="<?=base_url()?>assets/image/cache/28.0014.06-250x250.jpg" title="28.0014.06" alt="28.0014.06" />
                    </a>
                                                                <div class="wishlist"><a onclick="addToWishList('6307');" class="hint--top" data-hint="Add to Wish List"><i class="wishlist-icon"></i><span class="button-wishlist-text">Add to Wish List</span></a></div>
                        <div class="compare"><a onclick="addToCompare('6307');" class="hint--top" data-hint="Add to Compare"><i class="compare-icon"></i><span class="button-compare-text">Add to Compare</span></a></div>
                                    </div>
                                <div class="product-details">
                    <div class="name"><a href="https://www.innotek.com.pk/index.php?route=product/product&amp;product_id=6307">28.0014.06</a></div>
                    <div class="description">CUSCO..</div>
                                        <div class="price">
                                                 0.00                                                                        <hr>
                        <span class="price-tax">text_tax  0.00</span>
                                            </div>
                                                            <hr>
                                        <div class="cart ">
                        <a onclick="addToCart('6307');" class="button hint--top" data-hint="Add to Cart"><i class="button-left-icon"></i><span class="button-cart-text">Add to Cart</span><i class="button-right-icon"></i></a>
                    </div>
                                        <div class="wishlist"><a onclick="addToWishList('6307');" class="hint--top" data-hint="Add to Wish List"><i class="wishlist-icon"></i><span class="button-wishlist-text">Add to Wish List</span></a></div>
                    <div class="compare"><a onclick="addToCompare('6307');" class="hint--top" data-hint="Add to Compare"><i class="compare-icon"></i><span class="button-compare-text">Add to Compare</span></a></div>
                </div>
            </div>
        </div>
                <div class="product-grid-item   display-icon block-button ">
            <div class="product-wrapper" style="">
                                <div class="image">
                    <a href="https://www.innotek.com.pk/index.php?route=product/product&amp;product_id=6118" >
                        <img class="lazyOwl first-image" width="250" height="250" src="<?=base_url()?>assets/image/cache/data/journal2/transparent-250x250.png" data-src="<?=base_url()?>assets/image/cache/26.0214.25-250x250.jpg" title="26.0214.25" alt="26.0214.25" />
                    </a>
                                                                <div class="wishlist"><a onclick="addToWishList('6118');" class="hint--top" data-hint="Add to Wish List"><i class="wishlist-icon"></i><span class="button-wishlist-text">Add to Wish List</span></a></div>
                        <div class="compare"><a onclick="addToCompare('6118');" class="hint--top" data-hint="Add to Compare"><i class="compare-icon"></i><span class="button-compare-text">Add to Compare</span></a></div>
                                    </div>
                                <div class="product-details">
                    <div class="name"><a href="https://www.innotek.com.pk/index.php?route=product/product&amp;product_id=6118">26.0214.25</a></div>
                    <div class="description">GUYON..</div>
                                        <div class="price">
                                                 0.00                                                                        <hr>
                        <span class="price-tax">text_tax  0.00</span>
                                            </div>
                                                            <hr>
                                        <div class="cart ">
                        <a onclick="addToCart('6118');" class="button hint--top" data-hint="Add to Cart"><i class="button-left-icon"></i><span class="button-cart-text">Add to Cart</span><i class="button-right-icon"></i></a>
                    </div>
                                        <div class="wishlist"><a onclick="addToWishList('6118');" class="hint--top" data-hint="Add to Wish List"><i class="wishlist-icon"></i><span class="button-wishlist-text">Add to Wish List</span></a></div>
                    <div class="compare"><a onclick="addToCompare('6118');" class="hint--top" data-hint="Add to Compare"><i class="compare-icon"></i><span class="button-compare-text">Add to Compare</span></a></div>
                </div>
            </div>
        </div> -->
                <!-- <div class="product-grid-item   display-icon block-button ">
            <div class="product-wrapper" style="">
                                <div class="image">
                    <a href="https://www.innotek.com.pk/index.php?route=product/product&amp;product_id=7222" >
                        <img class="lazyOwl first-image" width="250" height="250" src="<?=base_url()?>assets/image/cache/data/journal2/transparent-250x250.png" data-src="<?=base_url()?>assets/image/cache/30.0182.23-250x250.jpg" title="30.0182.23" alt="30.0182.23" />
                    </a>
                                                                <div class="wishlist"><a onclick="addToWishList('7222');" class="hint--top" data-hint="Add to Wish List"><i class="wishlist-icon"></i><span class="button-wishlist-text">Add to Wish List</span></a></div>
                        <div class="compare"><a onclick="addToCompare('7222');" class="hint--top" data-hint="Add to Compare"><i class="compare-icon"></i><span class="button-compare-text">Add to Compare</span></a></div>
                                    </div>
                                <div class="product-details">
                    <div class="name"><a href="https://www.innotek.com.pk/index.php?route=product/product&amp;product_id=7222">30.0182.23</a></div>
                    <div class="description">DUMBACH..</div>
                                        <div class="price">
                                                 0.00                                                                        <hr>
                        <span class="price-tax">text_tax  0.00</span>
                                            </div>
                                                            <hr>
                                        <div class="cart ">
                        <a onclick="addToCart('7222');" class="button hint--top" data-hint="Add to Cart"><i class="button-left-icon"></i><span class="button-cart-text">Add to Cart</span><i class="button-right-icon"></i></a>
                    </div>
                                        <div class="wishlist"><a onclick="addToWishList('7222');" class="hint--top" data-hint="Add to Wish List"><i class="wishlist-icon"></i><span class="button-wishlist-text">Add to Wish List</span></a></div>
                    <div class="compare"><a onclick="addToCompare('7222');" class="hint--top" data-hint="Add to Compare"><i class="compare-icon"></i><span class="button-compare-text">Add to Compare</span></a></div>
                </div>
            </div>
        </div> -->
            </div>
    
    <script>
        (function(){
            var opts = $.parseJSON('[[0,1],[470,2],[760,6],[980,6],[1100,6]]');

            jQuery("#carousel-1167006846 .owl-carousel").owlCarousel({
                lazyLoad: true,
                itemsCustom: opts,
                autoPlay: 3000,
                touchDrag: false,
                stopOnHover: true,
                items: 15,
                navigation: true,
                scrollPerPage: true,
                navigationText: false,
                paginationSpeed: 400,
                margin: 20
            });

            
            
            
            $('#carousel-1167006846 .htabs a.atab').tabs();

                        $('#carousel-1167006846 .htabs a.atab').click(function () {
                var current = $(this).attr('href');
                $('#carousel-1167006846 .htabs a.atab').each(function () {
                    var href = $(this).attr('href');
                    if (current === href) {
                        jQuery(href).data('owlCarousel').play();
                    } else {
                        jQuery(href).data('owlCarousel').stop();
                    }
                });
            });
            
                        Journal.equalHeight($('#carousel-1167006846 .product-grid-item'), '.name');
            
            var default_section = '';
            if (default_section) {
                $('#carousel-1167006846 .htabs a.atab[href="#carousel-1167006846-' + default_section + '"]').click();
            } else {
                $('#carousel-1167006846 .htabs a.atab').first().click();
            }

                                })();
    </script>
    </div>
</div>
</div></div>

<div class="extended-container">
<div id="container" class="j-container">

<div id="notification"></div> 
<div id="content"><h1 style="display: none;"></h1><div class="box  static-banners  " style="" id="static-banners-856955270" >
    <div>
                <!-- <div class="box-content ">
                        <div class="static-banner xs-50 sm-33 md-33 lg-33 xl-33">
                                <a href="https://www.innotek.com.pk/index.php?route=information/information&amp;information_id=10" > <span class="banner-overlay" style=";  background-color: rgba(0, 0, 0, 0.24) "></span><img style="" src="<?=base_url()?>assets/image/cache/data/innotek/btn3-287x151.jpg" width="287" height="151" alt="" /></a>
                            </div>
                        <div class="static-banner xs-50 sm-33 md-33 lg-33 xl-33">
                                <a href="https://www.innotek.com.pk/index.php?route=information/information&amp;information_id=14" > <span class="banner-overlay" style=";  background-color: rgba(0, 0, 0, 0.24) "></span><img style="" src="<?=base_url()?>assets/image/cache/data/innotek/btn4 copy-287x151.jpg" width="287" height="151" alt="" /></a>
                            </div>
                        <div class="static-banner xs-50 sm-33 md-33 lg-33 xl-33">
                                <a href="https://www.innotek.com.pk/index.php?route=information/information&amp;information_id=9" > <span class="banner-overlay" style=";  background-color: rgba(0, 0, 0, 0.24) "></span><img style="" src="<?=base_url()?>assets/image/cache/data/innotek/btn1-287x151.jpg" width="287" height="151" alt="" /></a>
                            </div>
                    </div> -->
<style type="text/css">
  .content {
  position: absolute; /* Position the background text */
  bottom: 0; /* At the bottom. Use top:0 to append it to the top */
  background: rgb(0, 0, 0); /* Fallback color */
  background: rgba(0, 0, 0, 0.5); /* Black background with 0.5 opacity */
  color: #f1f1f1; /* Grey text */
  width: 95%; /* Full width */
  padding: 10px; /* Some padding */
}
</style>
                    <div class="box-content ">
                    <?php
                    // $galeri =  $this->db->query("SELECT * FROM tbl_gallery_new order by id asc limit 1 ")->row();
                    // $serti =  $this->db->query("SELECT * FROM tbl_certificate order by id asc limit 1 ")->row();
                    // $katalog =  $this->db->query("SELECT * FROM tbl_download order by id asc limit 1 ")->row();
                    foreach($this->db->query("SELECT * FROM tbl_banners ")->result() as $banner) { 
                    ?>
                        <div class="static-banner xs-50 sm-33 md-33 lg-33 xl-33">
                                <a href="<?=$banner->url?>" > <span class="banner-overlay" style=";  background-color: rgba(0, 0, 0, 0.24) "></span><img style="" src="https://admin.gap-id.co.id/upload/banner/<?=$banner->image?>" width="50" height="50" alt="" /></a>
                                <div class="content">
                                    <h1><?=$banner->nama?></h1>
                                    
                                  </div>
                            </div>
                        <!-- <div class="static-banner xs-50 sm-33 md-33 lg-33 xl-33">
                                <a href="<?=base_url()?>gallery" > <span class="banner-overlay" style=";  background-color: rgba(0, 0, 0, 0.24) "></span><img style="" src="https://admin.gap-id.co.id/upload/gallery/<?=$galeri->image?>" width="50" height="50" alt="" /></a>
                                <div class="content">
                                    <h1>Gallery</h1>
                                    
                                  </div>
                            </div> -->
                        <!-- <div class="static-banner xs-50 sm-33 md-33 lg-33 xl-33">
                                <a href="<?=base_url()?>certificate" > <span class="banner-overlay" style=";  background-color: rgba(0, 0, 0, 0.24) "></span><img style="" src="https://admin.gap-id.co.id/upload/certificate/<?=$serti->image?>" width="287" height="151" alt="" /></a>
                                <div class="content">
                                    <h1>Certificate</h1>
                                    
                                  </div>
                            </div>
                        <div class="static-banner xs-50 sm-33 md-33 lg-33 xl-33">
                                <a href="<?=base_url()?>download" > <span class="banner-overlay" style=";  background-color: rgba(0, 0, 0, 0.24) "></span><img style="" src="<?=base_url()?>assets/image/cache/data/innotek/btn1-287x151.jpg" width="287" height="151" alt="" /></a>
                                <div class="content">
                                    <h1>Catalogue</h1>
                                    
                                  </div>
                            </div> -->
                <?php 
            } 
            ?>
                    </div>
            </div>
</div>    </div>
</div>
</div>
<div id="bottom-modules">
   <div class="journal2_cms_blocks" style="background-attachment: scroll; padding-top: 0px; padding-bottom: 0px"><div id="journal-cms-block-1491219349" class="box cms-blocks  " style="max-width: 1220px; background-attachment: scroll">
        <div class="box-heading">News / Upcoming Exhibitions</div>


        <div class="blocks">

            <?php
             // foreach ($news->result() as $news ) { 


foreach($this->db->query("SELECT * FROM tbl_posts order by id desc limit 4  ")->result() as $berita) { 

                ?>
    <div class="cms-block xs-100 sm-50 md-50 lg-25 xl-25">
                <span class="block-content" style="">
                        <!-- <div class="block-icon block-icon-left" style="background-color: transparent"><i><img style="margin-right: 5px; top: 3px" src="<?=base_url()?>assets/image/data/inno/cmef.jpg" alt="" title="" /></i></div> -->
                        <div class="block-icon block-icon-left" style="background-color: transparent"><i><img style="margin-right: 5px; top: -1px" src="https://admin.gap-id.co.id/upload/posts/<?=$berita->image?>" width="100" height="100" alt="" title="" /></i></div>
                        <div class="editor-content" style="text-align: left"> 
                            <!-- <p><?= $news->content ?></p> -->
                            <p><?= substr($berita->Title, 0,50) ?></p>
                           <a href="<?= base_url().'news/detail/'.$berita->slug?>" class="linkk" >Readmore </a>
                        </div>
                            <!-- <p>Please visit us at CMEF INDONESIA from 6 March 2019 - 8 March 2019, Hall A, Stand D14</p></div> -->
        </span>
    </div>
    <!-- <div class="cms-block xs-100 sm-50 md-50 lg-25 xl-25">
                <span class="block-content" style="">
                	
                        <div class="block-icon block-icon-left" style="background-color: transparent"><i><img style="margin-right: 5px; " src="<?=base_url()?>assets/image/data/innotek/exhibtionnew.jpg" alt="" title="" /></i></div>
                        <div class="editor-content" style="text-align: left"> <p><span style="color: rgb(51, 55, 69); font-family: Helvetica, Arial, sans-serif; text-align: center;">Please visit us at Malaysia Medical Device Expo 2019 from 15 Oct 2019 - 17 Oct 2019 at Malaysia International Trade &amp; Exhibition Centre, Level 3, Hall no 9, Stand PK 07 and PK 08.</span></p></div>
        </span>
    </div> -->
<?php } ?>
  <!--   <div class="cms-block xs-100 sm-50 md-50 lg-25 xl-25">
                <span class="block-content" style="">
                        <div class="block-icon block-icon-left" style="background-color: transparent"><i><img style="margin-right: 5px; " src="<?=base_url()?>assets/image/data/innotek/medica.jpg" alt="" title="" /></i></div>
                        <div class="editor-content" style="text-align: left"> <p><span style="caret-color: rgb(51, 55, 69); color: rgb(51, 55, 69); font-family: Helvetica, Arial, sans-serif; text-align: center;">Please visit us at Medica 2019 from 18 Nov 2019 - 21 Nov 2019 at Messe Dusseldorf, Germany, Hall no 10, Stand D46.</span></p></div>
        </span>
    </div>
    <div class="cms-block xs-100 sm-50 md-50 lg-25 xl-25">
                <span class="block-content" style="">
                        <div class="block-icon block-icon-left" style="background-color: transparent; width: 100px; height: 100px; line-height: 100px"><i><img style="margin-right: 5px; " src="<?=base_url()?>assets/image/data/expomed-450-2020.jpg" alt="" title="" /></i></div>
                        <div class="editor-content" style="text-align: left"> <p><span style="caret-color: rgb(51, 55, 69); color: rgb(51, 55, 69); font-family: Helvetica, Arial, sans-serif; text-align: center; background-color: rgb(244, 244, 244);">Please visit us at Expomed Eurasia 2020 from 05 Nov 2020 - 07 Nov 2020 at Tuyap Fair and Congress Center, Istanbul, Turkey, Hall no 2, Stand 229B1.</span></p></div>
        </span>
    </div>
    <div class="cms-block xs-100 sm-50 md-50 lg-25 xl-25">
                <span class="block-content" style="">
                        <div class="block-icon block-icon-left" style="background-color: transparent; width: 100px; height: 100px; line-height: 100px"><i><img style="margin-right: 5px; " src="<?=base_url()?>assets/image/data/ids.jpg" alt="" title="" /></i></div>
                        <div class="editor-content" style="text-align: left"> <p>We are participating in IDS 2021. Watch this space later for further information.</p></div>
        </span>
    </div> -->
</div>
</div>
<script>Journal.equalHeight($('#journal-cms-block-1491219349 .cms-block'), '.block-content');</script></div></div>

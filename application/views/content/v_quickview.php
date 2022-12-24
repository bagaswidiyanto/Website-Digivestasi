<html class="product-page quickview firefox firefox88 mac journal-desktop is-guest skin-4 responsive-layout header-center header-center-sticky backface product-grid-second-image product-list-second-image quickview-page quickview-page-373 layout-4 route-journal2-quickview oc1" style="overflow-y: auto">
<head>
<title>05.0011.20</title>
<meta name="robots" content="noindex">
<base href="<?=base_url()?>" />
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto+Slab:regular%7CPlayfair+Display:regular,700&amp;subset=latin"/>
<link rel="stylesheet" href="<?=base_url()?>assets/css/j-strap.css?j2v=2.6.3"/>
<link rel="stylesheet" href="<?=base_url()?>assets/js/jquery/ui/themes/ui-lightness/jquery-ui-1.8.16.custom.css?j2v=2.6.3"/>
<link rel="stylesheet" href="<?=base_url()?>assets/lib/owl-carousel/owl.carousel.css?j2v=2.6.3"/>
<link rel="stylesheet" href="<?=base_url()?>assets/lib/owl-carousel/owl.transitions.css?j2v=2.6.3"/>
<link rel="stylesheet" href="<?=base_url()?>assets/lib/magnific-popup/magnific-popup.css?j2v=2.6.3"/>
<link rel="stylesheet" href="<?=base_url()?>assets/css/icons.css?j2v=2.6.3"/>
<link rel="stylesheet" href="<?=base_url()?>assets/css/hint.min.css?j2v=2.6.3"/>
<link rel="stylesheet" href="<?=base_url()?>assets/css/journal.css?j2v=2.6.3"/>
<link rel="stylesheet" href="<?=base_url()?>assets/css/module.css?j2v=2.6.3"/>
<link rel="stylesheet" href="<?=base_url()?>assets/css/features.css?j2v=2.6.3"/>
<link rel="stylesheet" href="<?=base_url()?>assets/css/product.css?j2v=2.6.3"/>
<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css?j2v=2.6.3" />
<script type="text/javascript" src="<?=base_url()?>assets/lib/jquery/jquery-1.8.3.min.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/jquery.ui/jquery-ui-1.8.24.min.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?=base_url()?>catalog/view/javascript/common.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?=base_url()?>catalog/view/javascript/jquery/jquery.total-storage.min.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/jquery.tabs/tabs.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/owl-carousel/owl.carousel.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/magnific-popup/jquery.magnific-popup.min.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/actual/jquery.actual.min.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/countdown/jquery.countdown.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/image-zoom/jquery.imagezoom.min.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/journal.js?j2v=2.6.3"></script>
</head>
<body>
            <?php
$id = $this->input->post('id');
$test = $this->db->query("SELECT * FROM tbl_products where id = '".$id."'")->row();
$data['productName'] = $test;
// echo $test['productName'];
// echo $test['id'];
// $qv = $this->db->query("SELECT * FROM tbl_products where id='".$id."' ")->result();
// foreach($this->db->query("SELECT * FROM tbl_products where id='".$id."' ")->result() as $kt) { 
?>
<div id="container">
    <div id="content">
    <h1 class="heading-title"><?= $test->productName ?></h1>
    <div class="product-info">
        <div class="left">
    <h1 class="heading-title"><?= $test->id ?></h1>      

                <div class="image">
                                                <!-- <a href="https://www.innotek.com.pk/index.php?route=product/product&product_id=373" target="_top" title="05.0011.20"><img src="https://www.innotek.com.pk/image/cache/05.0011.20-500x500.jpg" title="05.0011.20" alt="05.0011.20" id="image" data-largeimg="https://www.innotek.com.pk/image/cache/05.0011.20-800x800.jpg" /></a> -->

                                                <!--   <a href="https://www.innotek.com.pk/index.php?route=product/product&product_id=373" target="_top" title="05.0011.20"> -->
                                               <!--      <img src="<?=base_url()?>../../../upload/product/<?=$test->mainImage?>" title="05.0011.20" alt="05.0011.20" id="image" data-largeimg="<?=base_url()?>../../../upload/product/<?=$test->mainImage?>" /></a> -->


        </div>
        

                       <!--  <div class="image-gallery" style="display: none !important;">
                        <a href="<?=base_url()?>assets/image/cache/05.0011.20-800x800.jpg" title="05.0011.20" class="swipebox"><img src="<?=base_url()?>assets/image/cache/05.0011.20-500x500.jpg" title="05.0011.20" alt="05.0011.20" /></a>
                                </div> -->
            </div>
        <div class="right">
    <div class="product-options">
    <!-- <div class="description">
                <span class="product-views-count">Views: 819</span>
                                        <span  class="p-model">Product Code:</span> <span class="p-model" itemprop="model">05.0011.20</span><br />
                <span class="p-stock">Availability:</span> <span class="journal-stock instock">In Stock</span>
    </div> -->
            <!-- <div class="price">
                <span class="product-price"> 0.00</span>
                        <span class="price-tax">Ex Tax:  0.00</span>
                            </div> -->
                <script>Journal.enableSelectOptionAsButtonsList();</script>
   <!--  <div class="cart ">
        <div>
                        <span class="qty"><span class="text-qty">Qty:</span>
            <input type="text" name="quantity" size="2" value="1" data-min-value="1" autocomplete="off" /></span>
            <input type="hidden" name="product_id" size="2" value="373" />
            <a id="button-cart" class="button"><i class="button-left-icon"></i><span class="button-cart-text">Add to Cart</span></i></a>
            <a id="more-details" class="button hint--top" data-hint="More Details" target="_top" href="https://www.innotek.com.pk/index.php?route=product/product&product_id=373"><i></i></a>
                    </div>
                <script>
            if ($('.product-info .image .label-outofstock').length) { $("#button-cart").addClass('button-disable').attr('disabled', 'disabled'); }
            /* quantity buttons */
            var $input = $('.cart input[name="quantity"]');
            function up() {
                var val = parseInt($input.val(), 10) + 1 || parseInt($input.attr('data-min-value'), 10);
                $input.val(val);
            }
            function down() {
                var val = parseInt($input.val(), 10) - 1 || 0;
                var min = parseInt($input.attr('data-min-value'), 10) || 1;
                $input.val(Math.max(val, min));
            }
            $('<a href="javascript:;" class="journal-stepper">-</a>').insertBefore($input).click(down);
            $('<a href="javascript:;" class="journal-stepper">+</a>').insertAfter($input).click(up);
            $input.keydown(function (e) {
                if (e.which === 38) {
                    up();
                    return false;
                }
                if (e.which === 40) {
                    down();
                    return false;
                }
            });
        </script>
                    </div> -->
    <!-- <div class="wishlist-compare">
          <span class="links">
              <a onclick="parent.addToWishList('373');">Add to Wish List</a>
              <a onclick="parent.addToCompare('373');">Add to Compare</a>
          </span>
    </div> -->
            <div id="tab-description" class="tab-content">Standard BB CVD</div>
    
    </div>
    </div>
    </div>
        </div>
</div>
<script type="text/javascript"><!--

// $('select[name="profile_id"], input[name="quantity"]').change(function(){
//     $.ajax({
//         url: 'index.php?route=product/product/getRecurringDescription',
//         type: 'post',
//         data: $('input[name="product_id"], input[name="quantity"], select[name="profile_id"]'),
//         dataType: 'json',
//         beforeSend: function() {
//             $('#profile-description').html('');
//         },
//         success: function(json) {
//             $('.success, .warning, .attention, information, .error').remove();

//             if (json['success']) {
//                 $('#profile-description').html(json['success']);
//             }
//         }
//     });
// });

// $('#button-cart').bind('click', function() {
//     if ($('.hide-cart .right .cart.outofstock').length) {
//         return false;
//     }
//     $.ajax({
//         url: 'index.php?route=checkout/cart/add',
//         type: 'post',
//         data: $('.product-info input[type=\'text\'], .product-info input[type=\'hidden\'], .product-info input[type=\'radio\']:checked, .product-info input[type=\'checkbox\']:checked, .product-info select, .product-info textarea'),
//         dataType: 'json',
//         success: function(json) {
//             $('.success, .warning, .attention, information, .error').remove();

//             if (json['error']) {
//                                 if (json['error']['option']) {
//                     for (i in json['error']['option']) {
//                         $('#option-' + i).after('<span class="error">' + json['error']['option'][i] + '</span>');
//                     }
//                 }

//                 if (json['error']['profile']) {
//                     $('select[name="profile_id"]').after('<span class="error">' + json['error']['profile'] + '</span>');
//                 }
//             }

//             if (json['success']) {
//                 if (!parent.Journal.showNotification(json['success'], json['image'], true)) {
//                     parent.$('#notification').html('<div class="success" style="display: none;">' + json['success'] + '<img src="catalog/view/theme/default/image/close.png" alt="" class="close" /></div>');
//                 }

//                 $('.success').fadeIn('slow');

//                 parent.$('#cart-total').html(json['total']);

//                 $('html, body').animate({ scrollTop: 0 }, 'slow');

//                 if (json['redirect']) {
//                     top.location.href = json['redirect'];
//                 }
//             }
//         }
//     });
// });
</script>
<!-- <script>
    Journal.productPage();
        Journal.enableProductOptions();
    Journal.updatePrice = true;
            Journal.enableCloudZoom('inner');
        $('.image > a').live('click', function () {
        top.location.href = "https://www.innotek.com.pk/index.php?route=product/product&product_id=373";
        return false;
    });
</script>
<script type="text/javascript" src="catalog/view/javascript/jquery/ui/jquery-ui-timepicker-addon.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    if ($.browser.msie && $.browser.version == 6) {
        $('.date, .datetime, .time').bgIframe();
    }

    $('.date').datepicker({dateFormat: 'yy-mm-dd'});
    $('.datetime').datetimepicker({
        dateFormat: 'yy-mm-dd',
        timeFormat: 'h:m'
    });
    $('.time').timepicker({timeFormat: 'h:m'});
});
</script> -->
<script></script>
</body>
</html>

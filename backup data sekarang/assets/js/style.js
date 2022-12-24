Journal.notificationTimer = parseInt('1500', 10);

Journal.quickviewText = 'QuickView';

Journal.scrollToTop = parseInt('1', 10);


Journal.stickyTopSpacing = 120;

Journal.BASE_HREF = 'url(' + $('base').attr('href') + ')';

$(document).ready(function () {

Journal.productPage();

Journal.enableProductOptions();
Journal.updatePrice = true;

Journal.enableSideBlocks();

Journal.searchAutoComplete();

Journal.enableStickyHeader();

Journal.enableQuickView();
Journal.quickViewStatus = true;

if ($('html').hasClass('product-page') || $('html').hasClass('quickview')) {
    Journal.enableCloudZoom('inner');
}

Journal.productPageGallery();

$('.product-list-item .image .wishlist:hidden, .product-list-item .image .compare:hidden, .product-grid-item .product-details .wishlist:hidden, .product-grid-item .product-details .compare:hidden').remove();


$('#top-modules > .hide-on-mobile').parent().addClass('hide-on-mobile');
$('#bottom-modules > .hide-on-mobile').parent().addClass('hide-on-mobile');

$('#top-modules .gutter-on').parent().addClass('gutter');
$('#bottom-modules .gutter-on').parent().addClass('gutter');

$(window).resize();

Journal.init();
});

/* Custom JS */
<br />
<b>Fatal error</b>:  Call to a member function get() on null in <b>/home/innotek/public_html/index.php</b> on line <b>105</b><br />

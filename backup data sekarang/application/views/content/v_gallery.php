
<div class="extended-container">
<div id="container" class="j-container">

<div id="notification"></div><div class="breadcrumb">
        <a href="<?=base_url()?>">Home</a>
         &raquo; <a href="<?=base_url()?>gallery">Gallery</a>
         <!-- <a href="<?=base_url()?>product">Surgical Instruments</a> -->
    </div>
<div id="column-left" class="side-column ">
    <div class="box side-category side-category-left side-category-accordion" id="journal-side-category-992337079">
    <div class="box-heading">All Gallery</div>
    <div class="box-category">
        <ul>
                            <li>
                                <!-- <a href="<?=base_url()?>product" class="active"><span class="category-name">Surgical Instruments                                                
                                    <span class="product-count">(8107)</span>
                                            </span>
                                                            <i><span>-</span></i>
                                                        </a> -->
                                                        <a href="<?=base_url()?>gallery" class="active"><span class="category-name">All Gallery                                                
                                    <!-- <span class="product-count">(8107)</span> -->
                                            </span>
                                                            <i><span>-</span></i>
                                                        </a>
                <ul><li>
                    <?php 
                    // foreach ($kategori->result() as $kt) {
                    foreach($this->db->query("SELECT * from tbl_gallery_group_new order by id asc")->result() as $p) { ?>
                     
                   <!--  <a class="" href="<?=base_url()?>goitre"><span class="category-name">Goitre <span class="product-count">(10)</span></span></a> -->
                    <!-- <a class="" href="<?=base_url()?>goitre"><span class="category-name"><?= $kt->catName ?>  -->
                        <a class="side" id="side_<?= $p->id ?>" onclick="getProfile(<?= $p->id ?>)"><span class="category-name"><?= $p->grp ?> 
                    <!-- <span class="product-count">(10)</span> -->
                </span></a>
                <?php } ?>
                </li>
                        </ul>
    </div>
        <script>
        $('#journal-side-category-992337079 .box-category a i').click(function(e, first){
            e.preventDefault();
            $('+ ul', $(this).parent()).slideToggle(first ? 0 : 400);
            $(this).parent().toggleClass('active');
            $(this).html($(this).parent().hasClass('active') ? "<span>-</span>" : "<span>+</span>");
            return false;
        });
        $('#journal-side-category-992337079 .is-active i').trigger('click', true);
    </script>
    </div>
  </div>

 
    <div id="content"><h1 class="heading-title">Gallery</h1>        


        <div id="refine-images" class="owl-carousel">
             
                    <!-- <?php 
                    // foreach ($kategori->result() as $kt) {
                       ?> -->
                       <div class="refine-image">
            <!-- <a href="<?=base_url()?>goitre"><img style="display: block" width="175" height="175" src="<?=base_url()?>assets/image/cache/no_image-175x175.jpg" alt="Goitre (10)"/><span class="refine-category-name">Goitre (10)</span></a> -->
        </div>
        <!-- //isi -->
        
        <!-- // -->
                <!-- <div class="refine-image">
            <a href="<?=base_url()?>goitre"><img style="display: block" width="175" height="175" src="<?=base_url()?>assets/image/cache/no_image-175x175.jpg" alt="Goitre (10)"/><span class="refine-category-name">Goitre (10)</span></a>
        </div> -->
    <!-- <?php 
// }
 ?> -->
                
            </div>
        <script>
        (function () {
            var opts = $.parseJSON('[[0,3],[470,4],[760,4],[980,6],[1100,7]]');
            jQuery("#refine-images").owlCarousel({
                itemsCustom:opts,
                autoPlay: false,
                touchDrag: false,
                stopOnHover: false,
                navigation:true,
                scrollPerPage:true,
                navigationText : false,
                paginationSpeed:400,
                margin:13
            });
            Journal.equalHeight($("#refine-images .refine-image"), '.refine-category-name');
        })();
    </script>


            </div>

<?
// $url = base_url().'getproduct';
$url = base_url().'getgallery';
?>
            
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.6/dist/loadingoverlay.min.js"></script>
<script type="text/javascript"><!--


//
function getProfile(id){
    $(".side").removeClass("active");
    $("#side_"+id).addClass("active");
    $("#"+id).addClass("active");
    base_url = '<?=$url;?>';
    $('#content').html('');
    $("#content").LoadingOverlay("show");
    $.ajax({
        type: 'POST',
        data: {'id':id},
        url: base_url,
        success: function (html) {
            $("#content").LoadingOverlay("hide", true);
            $('#content').html(html);
        }
    });
}





function display(view) {
    if (view == 'list') {
        $('.main-products.product-grid').attr('class', 'main-products product-list');
        $('.display a.grid-view').removeClass('active');
        $('.display a.list-view').addClass('active');

        $('.main-products.product-list > div').each(function(index, element) {
            if ($(this).hasClass('sf-loader')) return;
            $(this).attr('class','product-list-item xs-100 sm-100 md-100 lg-100 xl-100' + ($(this).hasClass('outofstock') ? ' outofstock' : '')).attr('data-respond','start: 150px; end: 300px; interval: 10px;');

            var html = '';

            html += '<div class="left">';

            var image = $(element).find('.image').html();

            if (image != null) {
                html += '<div class="image">' + image + '</div>';
            }
            html += '  <div class="name">' + $(element).find('.name').html() + '</div>';

            var price = $(element).find('.price').html();

            if (price != null) {
                html += '<div class="price">' + price  + '</div>';
            }

            html += '  <div class="description">' + $(element).find('.description').html() + '</div>';

            var rating = $(element).find('.rating').html();

            if (rating != null) {
                html += '<div class="rating">' + rating + '</div>';
            }

            html += '</div>';

            html += '<div class="right">';
            html += '  <div class="' + $(element).find('.cart').attr('class') + '">' + $(element).find('.cart').html() + '</div>';
            html += '  <div class="wishlist">' + $(element).find('.wishlist').html() + '</div>';
            html += '  <div class="compare">' + $(element).find('.compare').html() + '</div>';
            html += '</div>';

            $(element).html(html);
        });

        $.totalStorage('display', 'list');
    } else {
        $('.main-products.product-list').attr('class', 'main-products product-grid');
        $('.display a.grid-view').addClass('active');
        $('.display a.list-view').removeClass('active');

        $('.main-products.product-grid > div').each(function(index, element) {
            if ($(this).hasClass('sf-loader')) return;
            $(this).attr('class',"product-grid-item xs-100 sm-50 md-50 lg-33 xl-25 display-icon block-button"  + ($(this).hasClass('outofstock') ? ' outofstock' : ''));

            var html = '';

            var image = $(element).find('.image').html();

            if (image != null) {
                html += '<div class="image">' + image + '</div>';
            }

            html += '<div class="product-details">';
            html += '<div class="name">' + $(element).find('.name').html() + '</div>';
            html += '<div class="description">' + $(element).find('.description').html() + '</div>';

            var price = $(element).find('.price').html();

            if (price != null) {
                html += '<div class="price">' + price  + '</div>';
            }

            var rating = $(element).find('.rating').html();

            if (rating != null) {
                html += '<div class="rating">' + rating + '</div>';
            }
            html += '<hr>';
            html += '<div class="' + $(element).find('.cart').attr('class') + '">' + $(element).find('.cart').html() + '</div>';
            html += '<div class="wishlist">' + $(element).find('.cart + .wishlist').html() + '</div>';
            html += '<div class="compare">' + $(element).find('.cart + .wishlist + .compare').html() + '</div>';

            html += '</div>';

            $(element).html('<div class="product-wrapper">'+html+'</div>');
        });

        $.totalStorage('display', 'grid');
    }

    $(window).trigger('list_grid_change');
    Journal.itemsEqualHeight();
    Journal.equalHeight($(".main-products .product-wrapper"), '.description');

    $(".main-products img.lazy").lazy({
        bind: 'event',
        visibleOnly: false,
        effect: "fadeIn",
        effectTime: 250
    });

                Journal.enableQuickView();
        Journal.quickViewStatus = true;
    
        }

view = $.totalStorage('display');

if (view) {
    display(view);
} else {
    display('grid');
}
//--></script>
</div>
</div>

<!-- <?
// $id = $this->input->post('id');
// foreach($this->db->query("SELECT * FROM tbl_products where category='".$id."' ")->result() as $product) { 
?> -->

    <!-- <?
// $id = $this->input->post('id');
// foreach($this->db->query("SELECT * FROM tbl_products where category='".$id."' ")->result() as $product) { 
?> -->


  <div id="content"> 
<?
$id = $this->input->post('id');
foreach($this->db->query("SELECT * FROM tbl_categories where id='".$id."' ")->result() as $kt) { 
?>
    <h1 class="heading-title"><?= $kt->catName ?></h1>      
  <?php } ?>

          <div id="refine-images" class="owl-carousel">
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
          <!-- <div class="product-filter">
    <div class="display"><a onclick="display('grid');" class="grid-view"><i style="margin-right: 5px; color: rgb(68, 67, 73); font-size: 32px; top: 1px" data-icon="&#xe689;"></i></a><a onclick="display('list');" class="list-view"><i style="margin-right: 5px; color: rgb(68, 67, 73); font-size: 32px; top: 1px" data-icon="&#xe68c;"></i></a></div>
    <div class="product-compare"><a href="https://www.innotek.com.pk/index.php?route=product/compare" id="compare-total">Product Compare (0)</a></div>
    <div class="limit"><b>Show:</b>
      <select onchange="location = this.value;">
                        <option value="https://www.innotek.com.pk/index.php?route=product/category&amp;path=258_276&amp;limit=16" selected="selected">16</option>
                                <option value="https://www.innotek.com.pk/index.php?route=product/category&amp;path=258_276&amp;limit=25">25</option>
                                <option value="https://www.innotek.com.pk/index.php?route=product/category&amp;path=258_276&amp;limit=50">50</option>
                                <option value="https://www.innotek.com.pk/index.php?route=product/category&amp;path=258_276&amp;limit=75">75</option>
                                <option value="https://www.innotek.com.pk/index.php?route=product/category&amp;path=258_276&amp;limit=100">100</option>
                      </select>
    </div>
    <div class="sort"><b>Sort By:</b>
      <select onchange="location = this.value;">
                        <option value="https://www.innotek.com.pk/index.php?route=product/category&amp;path=258_276&amp;sort=p.sort_order&amp;order=ASC" selected="selected">Default</option>
                                <option value="https://www.innotek.com.pk/index.php?route=product/category&amp;path=258_276&amp;sort=pd.name&amp;order=ASC">Name (A - Z)</option>
                                <option value="https://www.innotek.com.pk/index.php?route=product/category&amp;path=258_276&amp;sort=pd.name&amp;order=DESC">Name (Z - A)</option>
                                <option value="https://www.innotek.com.pk/index.php?route=product/category&amp;path=258_276&amp;sort=p.price&amp;order=ASC">Price (Low &gt; High)</option>
                                <option value="https://www.innotek.com.pk/index.php?route=product/category&amp;path=258_276&amp;sort=p.price&amp;order=DESC">Price (High &gt; Low)</option>
                                <option value="https://www.innotek.com.pk/index.php?route=product/category&amp;path=258_276&amp;sort=rating&amp;order=DESC">Rating (Highest)</option>
                                <option value="https://www.innotek.com.pk/index.php?route=product/category&amp;path=258_276&amp;sort=rating&amp;order=ASC">Rating (Lowest)</option>
                                <option value="https://www.innotek.com.pk/index.php?route=product/category&amp;path=258_276&amp;sort=p.model&amp;order=ASC">Model (A - Z)</option>
                                <option value="https://www.innotek.com.pk/index.php?route=product/category&amp;path=258_276&amp;sort=p.model&amp;order=DESC">Model (Z - A)</option>
                      </select>
    </div>
  </div> -->
  <div class="main-products product-list">
  <?
$id = $this->input->post('id');
foreach($this->db->query("SELECT * FROM tbl_products where category='".$id."' ")->result() as $product) { 
?> 
        <div class=" ">
              <div class="image">
           <!--  <a href="<?=base_url()?>product/quickview" > -->
           <!--   <a onclick="getqv('<?= $product->id ?>')">
                <img class="lazy first-image" width="250" height="250" src="<?=base_url()?>../../../upload/product/<?=$product->mainImage?>" data-src="<?=base_url()?>../../../upload/product/<?=$product->mainImage?>" title="20.0010.15" alt="20.0010.15" />
 -->
                <a href="https://admin.gap-id.co.id/upload/product/<?=$product->mainImage?>" data-fancybox="gallery">
                                            <img src="https://admin.gap-id.co.id/upload/product/<?=$product->mainImage?>">
            </a>
                                                               
               
                    </div>
            <div class="name"><a href=""><?=$product->productName?></a></div>
      <div class="description">S..</div>
            
            
        <!-- <a onclick="'<?= $product->id ?>',getqv('<?= $product->id ?>')" class="button hint--top" data-hint="Add to Cart"><i class="button-left-icon"></i><span class="button-cart-text"></span><i class="button-right-icon"></i></a> -->
          <!-- //quickview mata -->
            <div class="cart ">
            <!-- <a onclick="'<?= $product->id ?>'" class="button hint--top" data-hint="Add to Cart"><i class="button-left-icon" onclick="getqv('<?= $product->id ?>')"></i><span class="button-cart-text"></span><i class="button-right-icon"></i></a> -->
      </div>
            <!-- <input type="hidden" name="idx" value="<?= $product->id ?>"> -->
      <!-- <input type="text" name="idx" value="<?= $product->id ?>">  -->
        
    </div>
        
       <!--  <div class=" ">
              <div class="image">
            <a href="https://www.innotek.com.pk/index.php?route=product/product&amp;path=258_276&amp;product_id=4009" >
                <img class="lazy first-image" width="250" height="250" src="<?=base_url()?>assets/image/cache/data/journal2/transparent-250x250h.png" data-src="<?=base_url()?>assets/image/cache/20.0034.17-250x250.jpg" title="20.0034.17" alt="20.0034.17" />
            </a>
                                                                <div class="wishlist"><a onclick="addToWishList('4009');" class="hint--top" data-hint="Add to Wish List"><i class="wishlist-icon"></i><span class="button-wishlist-text">Add to Wish List</span></a></div>
                <div class="compare"><a onclick="addToCompare('4009');" class="hint--top" data-hint="Add to Compare"><i class="compare-icon"></i><span class="button-compare-text">Add to Compare</span></a></div>
                    </div>
            <div class="name"><a href="https://www.innotek.com.pk/index.php?route=product/product&amp;path=258_276&amp;product_id=4009">20.0034.17</a></div>
      <div class="description">MASTIN..</div>
            <div class="price">
                 0.00                        <span class="price-tax">Ex Tax:  0.00</span>
              </div>
            
            <div class="cart ">
        <a onclick="addToCart('4009');" class="button hint--top" data-hint="Add to Cart"><i class="button-left-icon"></i><span class="button-cart-text">Add to Cart</span><i class="button-right-icon"></i></a>
      </div>
            <div class="wishlist"><a onclick="addToWishList('4009');" class="hint--top" data-hint="Add to Wish List"><i class="wishlist-icon"></i><span class="button-wishlist-text">Add to Wish List</span></a></div>
      <div class="compare"><a onclick="addToCompare('4009');" class="hint--top" data-hint="Add to Compare"><i class="compare-icon"></i><span class="button-compare-text">Add to Compare</span></a></div>
    </div> -->



  <?php } ?>
      </div>
      <!-- <div class="pagination"><div class="results">Showing 1 to 10 of 10 (1 Pages)</div></div> -->
      </div>

      <?
$url = base_url().'quickview';
?>
      
<script type="text/javascript"><!--

// function getqv(id){
//     // $(".side").removeClass("active");
//     // $("#side_"+id).addClass("active");
//     // $("#"+id).addClass("active");
//     base_url = '<?=$url;?>';
   
//     $.ajax({
//         type: 'POST',
//         data: {'id':id},
//         url: base_url,
//         success: function (html) {
//             // $("#content").LoadingOverlay("hide", true);
//             // $('#content').html(html);
//         }
//     });
// }

function getqv(id){
    // $(".side").removeClass("active");
    // $("#side_"+id).addClass("active");
    // $("#"+id).addClass("active");
    base_url = '<?=$url;?>';
   
    $.ajax({
        type: 'POST',
        data: {'id':id},
        url: base_url,
        success: function (html) {
            // $("#content").LoadingOverlay("hide", true);
            // $('#content').html(html);





        }
    });
}

function display(view) {
    if (view == 'list') {
        // $('.main-products.product-grid').attr('class', 'main-products product-list');
        // $('.display a.grid-view').removeClass('active');
        // $('.display a.list-view').addClass('active');

        // $('.main-products.product-list > div').each(function(index, element) {
        //     if ($(this).hasClass('sf-loader')) return;
        //     $(this).attr('class','product-list-item xs-100 sm-100 md-100 lg-100 xl-100' + ($(this).hasClass('outofstock') ? ' outofstock' : '')).attr('data-respond','start: 150px; end: 300px; interval: 10px;');

        //     var html = '';

        //     html += '<div class="left">';

        //     var image = $(element).find('.image').html();

        //     if (image != null) {
        //         html += '<div class="image">' + image + '</div>';
        //     }
        //     html += '  <div class="name">' + $(element).find('.name').html() + '</div>';

        //     var price = $(element).find('.price').html();

        //     if (price != null) {
        //         html += '<div class="price">' + price  + '</div>';
        //     }

        //     html += '  <div class="description">' + $(element).find('.description').html() + '</div>';

        //     var rating = $(element).find('.rating').html();

        //     if (rating != null) {
        //         html += '<div class="rating">' + rating + '</div>';
        //     }

        //     html += '</div>';

        //     html += '<div class="right">';
        //     html += '  <div class="' + $(element).find('.cart').attr('class') + '">' + $(element).find('.cart').html() + '</div>';
        //     html += '  <div class="wishlist">' + $(element).find('.wishlist').html() + '</div>';
        //     html += '  <div class="compare">' + $(element).find('.compare').html() + '</div>';
        //     html += '</div>';

        //     $(element).html(html);
        // });

        // $.totalStorage('display', 'list');
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
            // html += '<div class="description">' + $(element).find('.description').html() + '</div>';

            // var price = $(element).find('.price').html();

            // if (price != null) {
            //     html += '<div class="price">' + price  + '</div>';
            // }

            // var rating = $(element).find('.rating').html();

            // if (rating != null) {
            //     html += '<div class="rating">' + rating + '</div>';
            // }
            html += '<hr>';
            html += '<div class="' + $(element).find('.cart').attr('class') + '">' + $(element).find('.cart').html() + '</div>';
            html += '<div class="wishlist">' + $(element).find('.cart + .wishlist').html() + '</div>';
            html += '<div class="compare">' + $(element).find('.cart + .wishlist + .compare').html() + '</div>';

            html += '</div>';
 
            $(element).html('<div class="product-wrapper">'+html+'</div>');
        });

        // $.totalStorage('display', 'grid');
    }

    // $(window).trigger('list_grid_change');
    // Journal.itemsEqualHeight();
    // Journal.equalHeight($(".main-products .product-wrapper"), '.description');

    // $(".main-products img.lazy").lazy({
    //     bind: 'event',
    //     visibleOnly: false,
    //     effect: "fadeIn",
    //     effectTime: 250
    // });

        //         Journal.enableQuickView();
        // Journal.quickViewStatus = true;
    
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
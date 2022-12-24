<style type="text/css">
    .card {
  border: 1px solid #d3d3d3;
  border-radius: .25rem;
}

.bg-img {
  background-size: cover;
  min-height: 180px;
  background-position: center;
  background-color: #ccc;
}

.content {
  padding: 15px;
}



.linkk {
  background-color: transparent;
  border: 1px solid #2196F3;
  padding: .5rem 1rem;
  cursor: pointer;
  border-radius: .25rem;
}

.grid-containers {
  display: grid;
  min-height: 180px;
  grid-template-columns: 280px 280px  280px  280px;
  /*grid-template-columns: repeat(3, 1fr);*/
  grid-gap: 20px;
}
</style>
<div class="extended-container">
<div id="container" class="j-container">

<div id="notification"></div><div class="breadcrumb">
        <a href="<?=base_url()?>">Home</a>
         &raquo; <a href="<?=base_url()?>news">News</a>
         <!-- <a href="<?=base_url()?>product">Surgical Instruments</a> -->
    </div>
<div id="content"><h1 class="heading-title"><?=(@$_GET['lang']!='eng') ?  'Berita' :  'News';?></h1>  
<!-- <?=(@$_GET['lang']!='eng') ?  $contactus->description_ina :  $contactus->description_eng?> -->
<p>&nbsp;</p>
<!-- //isi -->
<div class="grid-containers">
<?php foreach ($news->result() as $news ) { ?>

  <div class="card">
    <div class="bg-img"><i><img style="min-height: 180px; min-width: 278.5px;" src="https://admin.gap-id.co.id/upload/posts/<?=$news->image?>" width="50" height="50" alt="" title="" /></i></div>
    <div class="content">
      <h4><?= $news->Title ?></h4>
      <!-- <p> Some quick example text to build on the card title and make up the bulk of the card's content. </p>  -->
      <!-- <p><?= $news->Title ?></p> -->
      <p>&nbsp;</p>

      <!-- <button onclick="getnews(<?= $news->id ?>)" type="button">Readmore</button>
       </div> -->
      <a href="<?= base_url().'news/detail/'.$news->slug?>" class="linkk" >Readmore </a>
       </div>
  </div>
   <!-- <div class="card">
    <div class="bg-img"></div>
    <div class="content">
      <h4>Card title</h4>
      <p> Some quick example text to build on the card title and make up the bulk of the card's content. </p> <button>Readmore</button> </div>
  </div> -->
<?php } ?>
</div>
<!-- // -->





<p>&nbsp;</p>
  <div class="buttons">
    <!-- <div class="right"><a href="<?=base_url()?>" class="button">Continue</a></div> -->
  </div>

  </div>

<?
// $url = base_url().'getproduct';
// $url = base_url().'getgallery';


$url = base_url().'news/detail';

?>
            
<script src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.6/dist/loadingoverlay.min.js"></script>
<script type="text/javascript"><!--

function getnews(id){
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

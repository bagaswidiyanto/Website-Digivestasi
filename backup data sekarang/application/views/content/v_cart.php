
<div class="extended-container">
<div id="container" class="j-container">

<div id="notification"></div><div class="breadcrumb">
        <a href="<?=base_url()?>">Home</a>
         &raquo; <a href="<?=base_url()?>cart">Shopping Cart</a>
    </div>
 <div id="content">
    <h1 class="heading-title">Shopping Cart</h1>
      <div class="content"><p class="not_found">Your shopping cart is empty!</p></div>
  <div class="buttons">
    <div class="right"><a href="<?=base_url()?>" class="button">Continue</a></div>
  </div>
  </div>
<div id="content" class="sc-page">
  <h1 class="heading-title">Shopping Cart        &nbsp;(0.00kg)
      </h1>
    <form action="<?=base_url()?>cart" method="post" enctype="multipart/form-data">
    <div class="cart-info">
      <table>
        <thead>
          <tr>
            <td class="image">Image</td>
            <td class="name">Product Name</td>
            <td class="model">Model</td>
            <td class="quantity">Quantity</td>
            <td class="price">Unit Price</td>
            <td class="total">Total</td>
          </tr>
        </thead>
        <tbody>
                                                        <tr>
            <td class="image">              <a href="https://www.innotek.com.pk/index.php?route=product/product&amp;product_id=4001"><img src="<?=base_url()?>assets/image/cache/20.0014.15-47x47.jpg" alt="20.0014.15" title="20.0014.15" /></a>
              </td>
            <td class="name"><a href="https://www.innotek.com.pk/index.php?route=product/product&amp;product_id=4001">20.0014.15</a>
                            <div>
                                                                              </div>
              </td>
            <td class="model">20.0014.15</td>
            <td class="quantity"><input type="text" name="quantity[4001::]" value="1" size="1" />
              &nbsp;
              <input type="image" src="<?=base_url()?>assets/image/data/update.png" alt="Update" title="Update" />
              &nbsp;<a href="https://www.innotek.com.pk/index.php?route=checkout/cart&amp;remove=4001::"><img src="<?=base_url()?>assets/image/data/remove.png" alt="Remove" title="Remove" /></a></td>
            <td class="price"> 0.00</td>
            <td class="total"> 0.00</td>
          </tr>
                            </tbody>
      </table>
    </div>
  </form>
    <div class="cart-total">
    <table id="total">
            <tr> 
        <td class="right"><b>Sub-Total:</b></td>
        <td class="right"> 0.00</td>
      </tr>
            <tr>
        <td class="right"><b>Total:</b></td>
        <td class="right"> 0.00</td>
      </tr>
          </table>
  </div>
  <div class="buttons">
      <div class="right"><a href="<?=base_url()?>checkout" class="button button-checkout">Checkout</a></div>
      <div class="center"><a href="<?=base_url()?>" class="button button-shopping">Continue Shopping</a></div>
  </div>
  </div>
<script type="text/javascript"><!--
$('input[name=\'next\']').bind('change', function() {
    $('.cart-module > div').hide();

    $('#' + this.value).show();
});
//--></script>
</div>
</div>
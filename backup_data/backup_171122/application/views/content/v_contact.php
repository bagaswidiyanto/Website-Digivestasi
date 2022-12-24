
<div class="extended-container">
<div id="container" class="j-container">

<div id="notification"></div><div class="breadcrumb">
        <a href="<?=base_url()?>">Home</a>
         &raquo; <a href="<?=base_url()?>contact">Contact Us</a>
    </div>
 
<div id="content" class="contact-page"><h1 class="heading-title">Contact Us</h1><div id="journal-cms-block-1832560519" class="box cms-blocks hide-on-mobile " style="">
        <div class="blocks">
    <div class="cms-block xs-100 sm-100 md-100 lg-100 xl-100">
                <span class="block-content" style="">
                        <div class="editor-content" style="text-align: left"> <p><iframe allowfullscreen="" frameborder="0" height="250" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.1707944844875!2d107.02375830049128!3d-6.218606414134724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTMnMDcuMCJTIDEwN8KwMDEnMjcuOSJF!5e0!3m2!1sid!2sid!4v1619667830373!5m2!1sid!2sid" width="100%" style="border:0" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe> </p></div>
<!-- style="border:0" width="100%"></iframe> -->

        </span>
    </div>
</div>
</div>
<script>Journal.equalHeight($('#journal-cms-block-1832560519 .cms-block'), '.block-content');</script>
  <form action="<?=base_url()?>contact" method="post" enctype="multipart/form-data">
            <h2 class="secondary-title">Our Location</h2>
    <div class="contact-info">
      <div class="content"><div class="left"><b>Address:</b><br />
        <?= $contactus->address?><br />
        
<!-- <br /> -->
       <!--  Innotek Instruments<br />
        Barlas Street, Pacca Garha<br />
Sialkot - 51310, Pakistan<br />
<br /> -->
<!-- Email: info@innotek.com.pk<br />
Website: www.innotek.com.pk<br /> -->
Email: <?= $contactus->email ?><br />
Website: <?= $contactus->website ?><br />
</div>
      <!-- <div class="right">
                <b>Telephone:</b><br />
        +92 (52) 4270836<br />
        <br />
                      </div> -->

                      <div class="right">
                <b>Office:</b><br />
        <?= $contactus->phoneOffice ?><br />
        <br />
        <b>Phone:</b><br />
        <?= $contactus->phone ?><br />
                      </div>
    </div>
    </div>
    <h2 class="secondary-title">Contact Form</h2>
        <div class="content">
    <b>First Name:</b><br />
    <input type="text" name="name" value="" />
    <br />
        <br />
    <b>E-Mail Address:</b><br />
    <input type="text" name="email" value="" />
    <br />
        <br />
    <b>Enquiry:</b><br />
    <textarea name="enquiry" cols="40" rows="10"></textarea>
    <br />
        <br />
    <b>Enter the code in the box below:</b><br />
    <input type="text" name="captcha" value="" />
    <br />
    <img src="index.php?route=information/contact/captcha" alt="" />
        </div>
        <div class="buttons">
        <div class="right"><input type="submit" value="Continue" class="button" /></div>
    </div>
      </form>
  </div>
</div>
</div>
<?
date_default_timezone_set('ASIA/JAKARTA');
$curr_time     = date('H:i:s');
?>

<footer class="boxed-footer">
  <div id="footer" >
    <div class="row" hidden>
      <div class="col-lg-6">
        <div class="column  newsletter xs-100 sm-50 md-33 lg-25 xl-254 ">
          <!-- <h3>SUBSCRIBE</h3> -->
          <h4> <?= (@$_GET['lang'] != 'eng') ?  'Dapatkan informasi terbaru seputar Investasi dan Cryptopcurency' :  'Subscribe'; ?></h4>
          <div class="box journal-newsletter text-top " id="journal-newsletter-495805429" style="">
            <div class="box-content" style="background-repeat: repeat; background-position: center top; background-attachment: scroll">
              <span class="newsletter-text" style="font-weight: normal; font-family: Noto Sans; font-size: 15px; font-style: normal; text-transform: none; color: rgb(255, 255, 255)"><?= (@$_GET['lang'] != 'eng') ?  'Langganan bersama Digivestasi dan dapatkan informasi terupdate, masukkan email kamu di bawah!' :  ' a'; ?></span>
              <span class="newsletter-input-wrap" style="height: 39px">

                <input type="text" class="newsletter-email" placeholder="Email Address..." style="border-width: 1px; border-style: solid; border-radius: 10px; color: white; border-color: #585858" />
                <a class="newsletter-button button" onclick="Journal.newsletter($('#journal-newsletter-495805429'));" style="margin-top: -1px; right: -95px">Subscribe</a>
              </span>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="column gambars xs-100 sm-50 md-33 lg-25 xl-254 ">
          <h5 class="mt-3" style="color: #FFF; font-weight: 500; font-size: 18px; line-height: 27px;">Download Digivestasi Sekarang</h5>
          <!-- <img src="<?= base_url() ?>assets/image/gap/frame.png" width="280" height="auto" /> -->
        </div>
        <div class="xs-100 sm-50 md-33 lg-25 xl-254" style="padding-right: 0px;margin-left: 60px;margin-bottom: 25px;width: 300px;">
          <a href="https://play.google.com/store/apps/details?id=id.co.digitalindo.digivestasi">
            <img src="https://admin103.progitoken.com/upload/publikasi/play-footer.png" style="width: 183px;height: 58px;" class="img-responsive icon-download">
          </a>
        </div>
      </div>
      
    </div>

  </div>



  <div class="row columns " style="background-attachment: scroll;margin-top:12%; margin-bottom: 2%">
    <!-- margin-top:30px; margin-bottom: 2px -->
    <!-- <div class="row"> -->
      <!-- <div class="col-sm-1"></div> -->
      <div class="col-sm-2" >
        <img src="<?= base_url() ?>assets/image/gap/digi.png" style="margin-bottom: 10px;width: 100%;"/>
        <!-- margin-top:30px; margin-bottom: 2px -->
        <div class="box journal-newsletter text-top " id="journal-newsletter-495805429" style="">
          <div class="box-content" style="background-repeat: repeat; background-position: center top; background-attachment: scroll">
            <span class="newsletter-text" style="font-color: white; font-weight: normal; font-family: Noto Sans; font-size: 14px; font-style: normal; text-transform: none; color: rgb(255, 255, 255)"><?= (@$_GET['lang'] != 'eng') ?  'Digivestasi adalah sebuah media informasi seputar aset digital terkait mata uang kripto dan tekhnologi blockchain. ' :  'Digivestasi is a medium of information about digital assets '; ?></span>
          </div>
        </div>
      </div>

      <div class="col-sm-1"></div>
      
          <div class="col-sm-2" >
     <h3 style="color:white;"> <?= (@$_GET['lang'] != 'eng') ?  'Halaman' :  'Page'; ?></h3>
     <!-- <br> -->
     <div class="column-menu-wrap" style="margin-top: -4px;">
      <ul>

        <li class="<?php if ($this->uri->segment(1) == "home") {
          echo "active";
        } ?>">
        <a href="<?= base_url() ?>">
          <div class="logo-navbar"></div>
          <div class="text-navbar"><i style="margin-right: 5px; font-size: 14px; top: -1px" data-icon="&#xe62c;"></i><?= (@$_GET['lang'] != 'eng') ?  'Beranda' :  'Home'; ?></div>
        </a>
      </li>

      <li class="<?php if ($this->uri->segment(1) == "news") {
        echo "active";
      } ?>" hidden>
      <a href="<?= (@$_GET['lang'] != 'eng') ? base_url() . 'hotnews' : base_url() . 'hotnews?lang=eng'; ?>">
        <div class="logo-navbar"></div>
        <div class="text-navbar"><i style="margin-right: 5px; font-size: 14px; top: -1px" data-icon="&#xe62c;"></i><?= (@$_GET['lang'] != 'eng') ?  'Berita' :  'News'; ?></div>
      </a>
    </li> 

    <li class="<?php if ($this->uri->segment(1) == "about") {
      echo "active";
    } ?>">
    <a href="<?= (@$_GET['lang'] != 'eng') ? base_url() . 'about' : base_url() . 'about?lang=eng'; ?>">
      <div class="logo-navbar"></div>
      <div class="text-navbar"><i style="margin-right: 5px; font-size: 14px; top: -1px" data-icon="&#xe62c;"></i><?= (@$_GET['lang'] != 'eng') ?  'Tentang Kami' :  'About Us'; ?></div>
    </a>
  </li>

  <li class="<?php if ($this->uri->segment(1) == "contact") {
    echo "active";
  } ?>">
  <!-- <a href="<?= (@$_GET['lang'] != 'eng') ? base_url() . 'contact' : base_url() . 'contact?lang=eng'; ?>"> -->
    <a href="#">
      <div class="logo-navbar"></div>
      <div class="text-navbar"><i style="margin-right: 5px; font-size: 14px; top: -1px" data-icon="&#xe62c;"></i><?= (@$_GET['lang'] != 'eng') ?  'Kontak' :  'Contact'; ?></div>
    </a>
  </li>

  <li class="<?php if ($this->uri->segment(1) == "certificate") {
    echo "active";
  } ?>" hidden>
  <!-- <a href="<?= (@$_GET['lang'] != 'eng') ? base_url() . 'certificate' : base_url() . 'certificate?lang=eng'; ?>"> -->
    <a href="#">
      <div class="logo-navbar"></div>
      <div class="text-navbar"><i style="margin-right: 5px; font-size: 14px; top: -1px" data-icon="&#xe62c;"></i><?= (@$_GET['lang'] != 'eng') ?  'Login' :  'Login'; ?></div>
    </a>
  </li>

</ul>
</div>
</div>
      <div class="col-sm-2" >
        <div class="column-menu-wrap" style="margin-top: -4px;">
          <ul>
            <?php foreach ($this->db->query("SELECT * FROM tbl_subkategori where aktif='Y' order by id asc")->result() as $sub) { 
              if ($sub->id=='9') {

                $link = $sub->kategori;

              }else if ($sub->id=='10') {

                $link = 'teknologi';

              }else if ($sub->id=='11') {

                $link = 'investasi';

              }else{

                $link = 'hotnews/list/?id='.$sub->id;

              }
              ?>
              <li class="<?php if ($this->uri->segment(1) == "home") {
                echo "active";
              } ?>">
              <a href="<?= base_url()?><?=$link;?>">
                <div class="logo-navbar"></div>
                <div class="text-navbar"><i style="margin-right: 5px; font-size: 14px; top: -1px" data-icon="&#xe62c;"></i><?=$sub->kategori;?></div>
              </a>
            </li>
            <?php 
          }?>
        </ul>
      </div>
    </div>

    <!-- subscribe -->
    <div class="col-sm-3">
       <h4 style="color:#FFFFFF"> <?= (@$_GET['lang'] != 'eng') ?  'Dapatkan informasi terbaru seputar Investasi dan Cryptopcurency' :  'Subscribe'; ?></h4>
          <div class="box journal-newsletter text-top " id="journal-newsletter-495805429" style="">
            <div class="box-content" style="background-repeat: repeat; background-position: center top; background-attachment: scroll">
              <span class="newsletter-text" style="font-weight: normal; font-family: Noto Sans; font-size: 15px; font-style: normal; text-transform: none; color: rgb(255, 255, 255)"><?= (@$_GET['lang'] != 'eng') ?  'Langganan bersama Digivestasi dan dapatkan informasi terupdate' :  ' a'; ?></span>
              <span class="newsletter-input-wrap" style="height: 39px">

                <!-- <a class="newsletter-button button" onclick="Journal.newsletter($('#journal-newsletter-495805429'));" style="margin-top: -1px; right: -95px">Subscribe</a> -->
                <div class="row" style="background-color: #FFFFFF;border-radius: 14px;padding-bottom: 2%;padding-top: 2%; width: 113.6%; margin-left: -2%;">
                  <div class="col">
                    <a href="https://play.google.com/store/apps/details?id=id.co.digitalindo.digivestasi" target="_blank"><img src="<?=base_url()?>assets/image/new_image/googlePlay.png" alt="" style="display: inline;width: 100%;"/></a> 
                    <!--  width="122" height="35" -->
                    
                  </div>
                  <div class="col">
                    <a href=""><img src="<?=base_url()?>assets/image/new_image/apleStore.png"  alt="" style="display: inline;width: 100%;"/></a>
                    <!-- width="122" height="35" -->
                  </div>
                </div>

              </span>
            </div>
          </div>

          <?php foreach ($sosmed->result() as $sos) {
        if ($sos->name=='Instagram') {?>
          <a href="<?= $sos->link ?>"><img src="<?= base_url() ?>assets/image/ig_icon2.png" style="width: 17px;height: auto;margin-top: -10px;margin-right: 5px;"></a>
        <?php }else if ($sos->name=='Twitter') { ?>
         <a href="<?= $sos->link ?>"><img src="<?= base_url() ?>assets/image/tw_icon2.png" style="width: 17px;height: auto;margin-top: -10px;margin-right: 5px;"></a>
       <?php }else if ($sos->name=='Youtube') { ?>
         <a href="<?= $sos->link ?>"><img src="<?= base_url() ?>assets/image/yt_icon2.png" style="width: 17px;height: auto;margin-top: -10px;margin-right: 5px;"></a>
       <?php }else if ($sos->name=="Facebook"){?>
        <a href="<?= $sos->link ?>"><img src="<?= base_url() ?>assets/image/fb_icon2.png" style="width: 17px;height: auto;margin-top: -10px;margin-right: 5px;"></a>
      <?php }else if ($sos->name=="Tiktok") { ?>
       <a href="<?= $sos->link ?>"><img src="<?= base_url() ?>assets/image/tik_icon2.png" style="width: 15px;height: auto;margin-top: -10px;margin-right: 5px;"></a>
     <?php } 
   }?>
    </div>
    <div class="col-sm-2">
      <a class="newsletter-button button" onclick="Journal.newsletter($('#journal-newsletter-495805429'));" style="margin-top: -1px; right: -95px">Subscribe</a>
    </div>
    <!-- end subscribe -->



<div class="col-sm-4" hidden>
  <h3 style="color:white;"> <?= (@$_GET['lang'] != 'eng') ?  'Kontak Kami' :  'Contact Us'; ?></h3>
  <br>
  <div>
    <!-- <ul> -->
      <?php foreach ($sosmed->result() as $sos) {
        if ($sos->name=='Instagram') {?>
          <a href="<?= $sos->link ?>"><img src="<?= base_url() ?>assets/image/ig_icon2.png" style="width: 17px;height: auto;margin-top: -10px;margin-right: 5px;"></a>
        <?php }else if ($sos->name=='Twitter') { ?>
         <a href="<?= $sos->link ?>"><img src="<?= base_url() ?>assets/image/tw_icon2.png" style="width: 17px;height: auto;margin-top: -10px;margin-right: 5px;"></a>
       <?php }else if ($sos->name=='Youtube') { ?>
         <a href="<?= $sos->link ?>"><img src="<?= base_url() ?>assets/image/yt_icon2.png" style="width: 17px;height: auto;margin-top: -10px;margin-right: 5px;"></a>
       <?php }else if ($sos->name=="Facebook"){?>
        <a href="<?= $sos->link ?>"><img src="<?= base_url() ?>assets/image/fb_icon2.png" style="width: 17px;height: auto;margin-top: -10px;margin-right: 5px;"></a>
      <?php }else if ($sos->name=="Tiktok") { ?>
       <a href="<?= $sos->link ?>"><img src="<?= base_url() ?>assets/image/tik_icon2.png" style="width: 15px;height: auto;margin-top: -10px;margin-right: 5px;"></a>
     <?php } 
   }?>
   <p style="font-weight: normal;font-size: 14px;color: white;"> <?= 'Email : ' ?><?= strip_tags($contactus->email); ?></p>
 </div>
</div>


<!-- </div> --> <!-- tutup row -->

</div>



<div class="bottom-footer fullwidth-bar">
  <div class="no-payments">

  </div>
</div>
</footer>
<div class="row" style="background-color: #052448;padding-top:1%;padding-bottom: 1%;">
  <div class="col">
    <center><a href="" style="color: #FFFFFF;text-decoration: none;"> &copy; <?=date('Y')?> Digivestasi. All rights reserved.</a></center>
  </div>
</div>
<div class="scroll-top"></div>
<script type="text/javascript" src="<?= base_url() ?>assets/lib/swipebox/source/jquery.swipebox.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/lib/hover-intent/jquery.hoverIntent.min.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/lib/pnotify/jquery.pnotify.min.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/lib/autocomplete2/jquery.autocomplete2.min.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/lib/respond/respond.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/lib/sticky/jquery.sticky.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/init.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/style.js?j2v=2.6.3"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript">
  // $('html, body').delay(1000).animate({
  //    scrollTop: $("#myDiv").offset().top
  // }, 1000);


  //==========================================================CHAT WHATSAPP=============================================================================//

  // $(document).ready(function() {
  //         setTimeout(function() {
  //           $("#whatsapp_chat").trigger('click');
  //         }, 3000);
  //     });

  function chatWhatsApp() {
    var cek_class = document.getElementById('whatsapp-chat-popup');

    if (cek_class.classList.contains('bounceOutDown')) {
      cek_class.classList.remove("bounceOutDown");
      cek_class.classList.add("bounceInUp");
      cek_class.style.display = "block";
    } else {
      cek_class.classList.remove("bounceInUp");
      cek_class.classList.add("bounceOutDown");

    }

  }

  function chatCustomer(id) {

    var list_chat = document.getElementById("list-chat-section");
    var chat = document.getElementById('customer_chat_' + id);

    if (id != 0 && id != '') {
      list_chat.style.display = "none";
      chat.style.display = "block";
    }
  }

  function closechatWhatsApp() {
    var cek_class = document.getElementById('whatsapp-chat-popup');

    if (cek_class.classList.contains('bounceInUp')) {
      cek_class.classList.remove("bounceInUp");
      cek_class.classList.add("bounceOutDown");
    }
  }


  function backListChat(id) {
    var list_chat = document.getElementById("list-chat-section");
    var chat = document.getElementById('customer_chat_' + id);
    if (id != 0 && id != '') {
      chat.style.display = "none";
      list_chat.style.display = "block";
      $("#chat_wa_" + id).val('');
    }
  }

  function textChatWhatsapp(id) {
    var link_wa = 'https://web.whatsapp.com/send?';
    if (id != 0 && id != '') {
      var telp = $("#telp_wa_" + id).val();
      var chat = $("#chat_wa_" + id).val();
      var link = 'https://web.whatsapp.com/send?phone=62' + telp + '&text=' + chat;

      var btn = document.getElementById("btn_wa_" + id);
      btn.setAttribute("href", link);
    }
  }
</script>



</body>

</html>
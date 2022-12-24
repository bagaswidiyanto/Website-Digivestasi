<footer class="boxed-footer">
    <div id="footer">
        <div class="row columns " style="background-attachment: scroll; margin-bottom: 15px">
        <div class="column  menu xs-100 sm-50 md-33 lg-25 xl-25 ">


                                              
                                             
       <h3> <?=(@$_GET['lang']!='eng') ?  'PROFIL' :  'PROFILE';?></h3>
               
                        <div class="column-menu-wrap">
        <ul>
                                    <!-- <li><a href="<?=base_url()?>about"><i style="margin-right: 5px; font-size: 14px; top: -1px" data-icon="&#xe62c;"></i>About Us</a></li> -->
                                     <!-- <li><a href="<?=base_url()?>download"><i style="margin-right: 5px; font-size: 14px; top: -1px" data-icon="&#xe62c;"></i>Downloads</a></li>
                                                <li><a href="<?=base_url()?>contact"><i style="margin-right: 5px; font-size: 14px; top: -1px" data-icon="&#xe62c;"></i>Contact Us</a></li>
                                                <li><a href="<?=base_url()?>"><i style="margin-right: 5px; font-size: 14px; top: -1px" data-icon="&#xe62c;"></i>Site Map</a></li> -->
                                     <li class="<?php if($this->uri->segment(1)=="about"){echo "active";} ?>" >
                                                <a href="<?=(@$_GET['lang']!='eng') ? base_url().'about' : base_url().'about?lang=eng';?>">
                                                    <div class="logo-navbar"></div>
                                                    <div class="text-navbar"><i style="margin-right: 5px; font-size: 14px; top: -1px" data-icon="&#xe62c;"></i><?=(@$_GET['lang']!='eng') ?  'Profil' :  'Profile';?></div>
                                                </a>
                                            </li>
                                             <li class="<?php if($this->uri->segment(1)=="download"){echo "active";} ?>" >
                                                <a href="<?=(@$_GET['lang']!='eng') ? base_url().'download' : base_url().'download?lang=eng';?>">
                                                    <div class="logo-navbar"></div>
                                                    <div class="text-navbar"><i style="margin-right: 5px; font-size: 14px; top: -1px" data-icon="&#xe62c;"></i><?=(@$_GET['lang']!='eng') ?  'Katalog' :  'Catalogue';?></div>
                                                </a>
                                            </li>
                                             <li class="<?php if($this->uri->segment(1)=="contact"){echo "active";} ?>" >
                                                <a href="<?=(@$_GET['lang']!='eng') ? base_url().'contact' : base_url().'contact?lang=eng';?>">
                                                    <div class="logo-navbar"></div>
                                                    <div class="text-navbar"><i style="margin-right: 5px; font-size: 14px; top: -1px" data-icon="&#xe62c;"></i><?=(@$_GET['lang']!='eng') ?  'Kontak' :  'Contact';?></div>
                                                </a>
                                            </li>
                                             <li class="<?php if($this->uri->segment(1)=="certificate"){echo "active";} ?>" >
                                                <a href="<?=(@$_GET['lang']!='eng') ? base_url().'certificate' : base_url().'certificate?lang=eng';?>">
                                                    <div class="logo-navbar"></div>
                                                    <div class="text-navbar"><i style="margin-right: 5px; font-size: 14px; top: -1px" data-icon="&#xe62c;"></i><?=(@$_GET['lang']!='eng') ?  'Sertifikat' :  'Certificate';?></div>
                                                </a>
                                            </li>
                                           
                                </ul>
        </div>
            </div>
        <div class="column  menu xs-100 sm-50 md-33 lg-25 xl-25 ">
                <!-- <h3>Information</h3> -->
                <h3> <?=(@$_GET['lang']!='eng') ?  'Informasi' :  'Information';?></h3>
                        <div class="column-menu-wrap">
        <ul>
                                    <li><a href="<?=base_url()?>"><i style="margin-right: 5px; font-size: 5px; top: -1px" data-icon="&#xe643;"></i>Instruments Care</a></li>
                                                <li><a href="<?=base_url()?>"><i style="margin-right: 5px; font-size: 5px; top: -1px" data-icon="&#xe643;"></i>Exhibition Gallery</a></li>
                                                <li><a href="<?=base_url()?>"><i style="margin-right: 5px; font-size: 5px; top: -1px" data-icon="&#xe643;"></i>Distribution Request</a></li>
                                                <li><a href="<?=base_url()?>download"><i style="margin-right: 5px; font-size: 5px" data-icon="&#xe643;"></i>Downloads</a></li>

                                             
                                </ul>
        </div>
            </div>
        <!-- <div class="column  menu xs-100 sm-50 md-33 lg-25 xl-25 ">
                <h3>Quick Contact</h3>
                        <div class="column-menu-wrap">
        <ul>
                                    <li><i style="margin-right: 5px; color: rgb(68, 67, 73); font-size: 16px" data-icon="&#xe61a;"></i>Barlas Street, Pacca Garha</li>
                                                <li><i style="margin-right: 5px; color: rgb(68, 67, 73); font-size: 16px" data-icon="&#xe61a;"></i>Sialkot - 51310, Pakistan</li>
                                                <li><a href="<?=base_url()?>"><i style="margin-right: 5px; color: rgb(68, 67, 73); font-size: 16px" data-icon="&#xe698;"></i>info@innotek.com.pk</a></li>
                                                <li><i style="margin-right: 5px; color: rgb(68, 67, 73); font-size: 16px" data-icon="&#xe637;"></i>www.innotek.com.pk</li>
                                </ul>
        </div>
            </div> -->

            <div class="column  menu xs-100 sm-50 md-33 lg-25 xl-25 ">
                <!-- <h3>Quick Contact</h3> -->
                <h3> <?=(@$_GET['lang']!='eng') ?  'Kontak' :  'Contact';?></h3>
                        <div class="column-menu-wrap">
                        <ul>
                                    <li><i style="margin-right: 5px; color: rgb(68, 67, 73); font-size: 16px" data-icon="&#xe61a;"></i>Jl. Perjuangan, No. Ruko K-9 Taman Wisma Asri. Teluk Pucung - Bekasi Utara - Kota Bekasi</li>
                                                <!-- <li><i style="margin-right: 5px; color: rgb(68, 67, 73); font-size: 16px" data-icon="&#xe61a;"></i>Sialkot - 51310, Pakistan</li> -->
                                                <li><a href="<?=base_url()?>"><i style="margin-right: 5px; color: rgb(68, 67, 73); font-size: 16px" data-icon="&#xe698;"></i>admin@gap-id.com</a></li>
                                                <li><i style="margin-right: 5px; color: rgb(68, 67, 73); font-size: 16px" data-icon="&#xe637;"></i>www.gap-id.co.id</li>
                        </ul>
                        </div>
            </div>

 <!-- Whatsapp Chat -->

    <div class="whatsapp-chat-section">

      <div class="icon-section">
        <img src="https://admin.gap-id.co.id/upload/slider/ic_whatsapp.png" id="whatsapp_chat" onclick="chatWhatsApp();">
      </div>

      <div id="whatsapp-chat-popup" class="animated bounceOutDown" style="z-index: 999999; display: none;">

        <div id="list-chat-section" class="list-chat-section animated fadeIn" style="display: block;">

          <div class="header-section" style="background:#2f3562;">
            <img class="close-chat-section" src="https://admin.gap-id.co.id/upload/slider/ic_close_btn.png" onclick="closechatWhatsApp();">

            <div class="header-avatar-section">
                        <?php foreach($this->db->query("SELECT * FROM tbl_chat_wa order by id asc")->result() as $sec1) { ?>
              <div class="avatar">
                <img  src="https://admin.gap-id.co.id/upload/wa_image/<?=$sec1->image;?>">   
              </div> 
              
                        <?}?>
            </div>

            <div class="header-desc-section" style="margin-top: 15px;">
              <p><?=(@$_GET['lang']!='eng') ? 'Kami siap membantu Anda, Silahkan chat dengan customer service kami.' : "We're ready to help you, Please chat our customer service. ";?> </p>
            </div>

          </div>  

          <div class="chat-section">
                    <?php foreach($this->db->query("SELECT a.*,a.user as nama,c.nama as cabang FROM tbl_chat_wa a  left join log_branch c ON a.branch=c.kode order by a.id asc")->result() as $sec2) { ?>
            <div class="cs-section" onclick="chatCustomer(<?=$sec2->id;?>);">
              <div class="avatar">
                <img class="avatar" src="https://admin.gap-id.co.id/upload/wa_image/<?=$sec2->image;?>">
              </div>
              <div class="profile">
                <p class="position">CS <?=strtoupper($sec2->cabang);?></p>
                <h3 class="name"><?=strtoupper($sec2->nama);?></h3>
                            <?if(($curr_time >= $sec2->startOnline) && ($curr_time < $sec2->endOnline)){ ?>
                      <small class="status">Online <span class="online"><i class="fa fa-circle "></i></span> </small> 
                            <?}else{?>    
                                  <small class="status">Offline <span class="offline"><i class="fa fa-circle "></i></span> </small> 
                            <?}?>
              </div>
            </div> 
                     <?}?>
          </div>  
        </div>

            <?php foreach($this->db->query("SELECT a.*,a.user as nama,c.nama as cabang FROM tbl_chat_wa a  left join log_branch c ON a.branch=c.kode order by a.id asc")->result() as $sec3) { ?>
        <div class="chat-section animated fadeIn" id="customer_chat_<?=$sec3->id;?>" style="display: none;">

          <div class="header-section" style="background:#2f3562;">

            <img class="back-chat-section" src="https://admin.gap-id.co.id/upload/slider/ic_back_btn.png" onclick="backListChat(<?=$sec3->id;?>);">

            <div class="header-avatar-section">

              <div class="avatar">
                <img  src="https://admin.gap-id.co.id/upload/wa_image/<?=$sec3->image;?>">  
              </div> 

            </div>

            <div class="header-desc-section">

              <h3><?=$sec3->nama;?></h3>
              <?php 
              $phone_split = implode(" ", str_split('+62'.$sec3->phone, 4))." "; 
              ?>
              <p><i class="fa fa-phone"></i> <?php echo $phone_split;?></p>

            </div>

          </div>

          <div class="inside-chat-section">

            <div class="chat">
              <div class="inside-chat">
                <span><?=(@$_GET['lang']!='eng') ? 'Halo, Saya '.ucwords(strtolower($sec3->nama)).', Customer Service dari Cabang '.strtoupper($sec3->cabang)  : "Hello, I'm ".ucwords(strtolower($sec3->nama)).', Customer Service from Branch '.strtoupper($sec3->cabang) ;?>
                  </span>
              </div>
              <div class="time">
                <span><?php echo date('H:i');?><img src="https://admin.gap-id.co.id/upload/slider/ic_check_wa.png"></span>
              </div>
            </div>

            <div class="chat">
              <div class="inside-chat">
                <span><?=(@$_GET['lang']!='eng') ?'Ada yang bisa saya bantu ?' : 'May I help you?';?></span>
              </div>
              <div class="time">
                <span><?php echo date('H:i');?><img src="https://admin.gap-id.co.id/upload/slider/ic_check_wa.png"></span>
              </div>
            </div>
          </div> 

          <div class="box-chat-section">
            <div class="text">
              <input type="hidden" id="telp_wa_<?=$sec3->id;?>" name="telp_wa_<?=$sec3->id;?>"  value="<?=$sec3->phone;?>" >
              <input type="text" class="input-message-whatsapp" id="chat_wa_<?=$sec3->id;?>" name="chat_wa_<?=$sec3->id;?>" onchange="textChatWhatsapp(<?=$sec3->id;?>);" onclick="textChatWhatsapp(<?=$sec3->id;?>);" onmouseover="textChatWhatsapp(<?=$sec3->id;?>);" onmouseout="textChatWhatsapp(<?=$sec3->id;?>);" onkeydown="textChatWhatsapp(<?=$sec3->id;?>);" value="" placeholder="<?=(@$_GET['lang']!='eng') ? 'Tulis Pesan' :'Type a message';?>" >
            </div>
            <div class="button-send">
              <a href="" id="btn_wa_<?=$sec3->id;?>" target="_blank"><img src="https://admin.gap-id.co.id/upload/slider/ic_send_message.png"></a>
            </div>
          </div> 
        </div> 
              <?}?>
        

        

      </div>
    </div>
    <!-- //tutup wa -->



        <div class="column  newsletter xs-100 sm-50 md-33 lg-25 xl-25 ">
                <!-- <h3>Newsletter</h3> -->
                <h3> <?=(@$_GET['lang']!='eng') ?  'Berita' :  'Newsletter';?></h3>
                        <div class="box journal-newsletter text-top " id="journal-newsletter-495805429" style="">
        <div class="box-content" style="background-repeat: repeat; background-position: center top; background-attachment: scroll">
                <span class="newsletter-text" style="font-weight: normal; font-family: Helvetica, Arial, sans-serif; font-size: 15px; font-style: normal; text-transform: none; color: rgb(56, 56, 56)"><?=(@$_GET['lang']!='eng') ?  'Tetap up to date dengan berita dan promosi dengan mendaftar ke buletin kami.' :  'Stay up to date with news and promotions by signing up for our newsletter.';?></span>
                <span class="newsletter-input-wrap" style="height: 39px">
            <input type="text" class="newsletter-email" placeholder="Email Address..." style="border-width: 1px; border-style: solid; border-color: rgb(204, 204, 204)" />
            <a class="newsletter-button button" onclick="Journal.newsletter($('#journal-newsletter-495805429'));" style="margin-top: -1px; right: 4px">Subscribe</a>
        </span>
    </div>
</div>            </div>
    </div>    </div>
    <div class="bottom-footer fullwidth-bar">
        <div class="no-payments">
                        <!-- <div class="copyright">Copyright © 2019 - 20, Innotek Instruments, All Rights Reserved.</div> -->
                                <div class="copyright">
            <span>Copyright © <?=date('Y');?> - <a href="https://digitalindo.co.id" target="_blank" style="color:black;"> DIGITALINDO</a> , All Rights Reserved.
            </span>
        </div>

                        <!-- <div class="copyright">Copyright © 2021, Digitalindo, All Rights Reserved.</div> -->
                                </div>
    </div>
</footer>
<div class="scroll-top"></div>
<script type="text/javascript" src="<?=base_url()?>assets/lib/swipebox/source/jquery.swipebox.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/hover-intent/jquery.hoverIntent.min.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/pnotify/jquery.pnotify.min.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/autocomplete2/jquery.autocomplete2.min.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/respond/respond.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?=base_url()?>assets/lib/sticky/jquery.sticky.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/init.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/style.js?j2v=2.6.3"></script>

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

function chatWhatsApp(){
  var cek_class = document.getElementById('whatsapp-chat-popup');

  if(cek_class.classList.contains('bounceOutDown')){
    cek_class.classList.remove("bounceOutDown");
    cek_class.classList.add("bounceInUp");
    cek_class.style.display = "block"; 
  }else{
    cek_class.classList.remove("bounceInUp");
    cek_class.classList.add("bounceOutDown");
    
  }

}

function chatCustomer(id){
  
  var list_chat =  document.getElementById("list-chat-section");
  var chat =  document.getElementById('customer_chat_'+id);

  if(id!=0 && id!=''){
    list_chat.style.display = "none"; 
    chat.style.display = "block"; 
  }
}

function closechatWhatsApp(){
  var cek_class = document.getElementById('whatsapp-chat-popup');

  if(cek_class.classList.contains('bounceInUp')){
    cek_class.classList.remove("bounceInUp");
    cek_class.classList.add("bounceOutDown");
  }
}


function backListChat(id){
  var list_chat =  document.getElementById("list-chat-section");
  var chat =  document.getElementById('customer_chat_'+id);
  if(id!=0 && id!=''){
    chat.style.display = "none"; 
    list_chat.style.display = "block"; 
    $("#chat_wa_"+id).val('');
  }
}

function textChatWhatsapp(id){
  var link_wa = 'https://web.whatsapp.com/send?';
  if(id!=0 && id!=''){
    var telp = $("#telp_wa_"+id).val();
    var chat = $("#chat_wa_"+id).val();
    var link = 'https://web.whatsapp.com/send?phone=62'+telp+'&text='+chat;
    
    var btn = document.getElementById("btn_wa_"+id);
      btn.setAttribute("href", link);
  }
}


</script>



</body>
</html>

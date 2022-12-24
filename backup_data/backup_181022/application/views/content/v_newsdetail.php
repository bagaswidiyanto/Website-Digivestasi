<style type="text/css">
	.imgcenter {
    display: block;
    margin-left: auto;
    margin-right: auto;
    /*width: 50%;*/
  }

  .img-berita{
    border-radius: 10px;
  }

  .tabs-sub-kategori {
    background-color: white;
    /*color: white;*/
    border-radius: 10px;
    /*padding: 10px;*/
    /*padding-top: 8px;*/
    /*padding-bottom: 8px;*/
    /* padding-right: 12px; */
    /* padding-left: 12px; */
    font-size: 16px;
    font-weight: 600;
    /* margin-left: 10px; */
    /* margin-right: 10px; */
}

  @media only screen and (max-width: 760px) {
      .tabs-sub-kategori {
          font-size: 13px !important;
          font-weight: 600;
      }
  }

  .text-content-berita {
    overflow: hidden;
    text-overflow: ellipsis;
    display: -webkit-box;
    -webkit-line-clamp: 4; /* number of lines to show */
    line-clamp: 4; 
    -webkit-box-orient: vertical;
  }
  #garis {
    border-right-width: 1px;
    border-right-style: solid;
    border-right-color: black;
  }

  .jeg_share_button {
    margin-bottom: 30px;
  }
  .jeg_share_stats > div {
  float: left;
  text-align: center;
  line-height: 1;
  margin-right: 15px;
  position: relative;
}
.jeg_share_stats .sharetext {
  font-size: 11px;
  color: #a0a0a0;
}
.jeg_share_stats > div:last-child {
  padding-right: 15px;
}
.jeg_share_stats > div {
  float: left;
  text-align: center;
  line-height: 1;
  margin-right: 15px;
  position: relative;
}
.jeg_share_stats .counts {
  font-size: 26px;
  font-weight: 700;
}
.jeg_share_stats .sharetext {
  font-size: 11px;
  color: #a0a0a0;
}

.jeg_share_stats > div:last-child::after {
  width: 1px;
  height: 100%;
  background: #e0e0e0;
  display: block;
  content: "";
  position: absolute;
  right: 0;
  top: -2px;
  -webkit-transform: rotate(15deg);
  transform: rotate(15deg);
}
.jeg_sharelist {
  float: none;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -ms-flex-align: start;
  align-items: flex-start;
}

.jeg_share_button a.expanded {
  width: auto;
  max-width: none;
  padding: 0 12px;
  text-decoration: none;
}

.jeg_share_button .jeg_btn-facebook {
  background: #45629f;
}

.jeg_share_button a {
  float: left;
  width: 44px;
  max-width: 44px;
  height: 38px;
  line-height: 38px;
  white-space: nowrap;
  padding: 0 10px;
  color: #fff;
  background: #212121;
  margin: 0 5px 5px 0;
  border-radius: 3px;
  text-align: center;
  display: -ms-flexbox;
  display: flex;
  -ms-flex: 1;
  flex: 1;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  transition: .2s;
}

.jeg_share_button .fa {
  font-size: 18px;
  color: #fff;
  line-height: inherit;
}

.jeg_share_button a.expanded > span {
  display: inline;
  position: relative;
}

.jeg_share_button a > span {
  display: none;
  font-size: 13px;
  font-weight: 700;
  margin-left: 10px;
}

.jeg_share_button .jeg_btn-twitter {
  background: #5eb2ef;
}

.jeg_share_button .jeg_btn-whatsapp {
  background: #075e54;
}

.jeg_share_button .jeg_btn-telegram {
  background: #08c;
}

.jeg_share_button a:hover {
  opacity: .75;
}

.jeg_share_button span.count {
  font-weight: 400;
  margin-left: 3px;
  padding: 2px 5px;
  background: rgba(0,0,0,.15);
  border-radius: 2px;
}

.tab-content {
    padding: 50px 15px;
    border: 1px solid #ddd;
    border-top: 0;
    border-bottom-right-radius: 4px;
    border-bottom-left-radius: 4px;
}
.custom-input-file {
    overflow: hidden;
    position: relative;
    width: 120px;
    height: 120px;
    background: #eee url('https://s3.amazonaws.com/uifaces/faces/twitter/walterstephanie/128.jpg');    
    background-size: 120px;
    border-radius: 120px;
}
</style>

<div class="col-lg-12" hidden>
  <div class="container" style="padding-top: 2%;">
    <div class="row" id="tab">

      <?php foreach ($this->db->query("SELECT * FROM tbl_subkategori where aktif='Y' order by id asc")->result() as $sub) {?>

        <?php if ($sub->id!='1') { ?>
          <div id="garis"></div>
        <?php } ?>

        <button class="tabs-sub-kategori tablinks" style="font-family: Noto Sans !important;font-style: normal;margin-left: auto;margin-right: auto;" onclick="getBerita(<?=$sub->id;?>,'<?=$sub->kategori;?>')"><?=$sub->kategori;?></button>

      <?php }?>
    </div>
  </div>
</div>

<div class="col-lg-12" hidden>
  <div class="container" style="padding-top: 2%;">
    <div class="runtext-container">
      <div class="main-runtext">
        <marquee direction="" onmouseover="this.stop();" onmouseout="this.start();">

          <div class="holder">
            <?php foreach ($this->db->query("SELECT * FROM tbl_text_runnning order by id asc ")->result() as $garis) {?> 
             <div class="text-container">
               &nbsp; &nbsp; <a data-fancybox-group="gallery" class="fancybox"><?=$garis->text_running;?></a>
             </div>
           <?php } ?>

         </div>

       </marquee>
     </div>
   </div>
 </div>
</div>

<div class="extended-container">
  <div id="container" class="j-container" style="border-radius: 0%;max-width: 1200px;">

    <div id="content">


      <!-- <i><img style="min-height: 180px; min-width: 250px;" class="imgcenter" src="https://admin103.digivestasi.com/upload/posts/<?=$news->image?>" width="10" height="50" alt="" title="" /></i> -->
      <div class="row">
        <div class="col-sm-7">
         <?
         $id = $this->uri->segment('3');
         $news = $this->db->query("SELECT * FROM tbl_posts where slug = '".$id."' ")->row();
         $loc = '/index.php/news/detail/'.$id;
         $viewers = $this->db->query("SELECT count(id) as lihat FROM tbl_posts_counter where `location` = '".$loc."' ")->row();
         $tgl = date('d F Y' , strtotime($news->created_date));
         ?>
         <h2 class="" style="margin-top:5%;"> <?= $news->Title;?></h2>
         <p style="color: rgb(190, 190, 190);margin-bottom: 10px;">Diposting pada <?=$tgl;?></p>

         <div class="col-lg-12" style="margin-bottom:10px;">
            <?php foreach ($sosmed->result() as $sos) {
              if ($sos->name=='Instagram') {?>
                <a href="<?= $sos->link ?>"><img src="<?= base_url() ?>assets/image/ig_icon.png" style="width: 17px;height: auto;margin-top: -10px;margin-right: 5px;"></a>
              <?php }else if ($sos->name=='Twitter') { ?>
                <a href="<?= $sos->link ?>"><img src="<?= base_url() ?>assets/image/tw_icon.png" style="width: 17px;height: auto;margin-top: -10px;margin-right: 5px;"></a>
              <?php }else if ($sos->name=='Youtube') { ?>
                <a href="<?= $sos->link ?>"><img src="<?= base_url() ?>assets/image/yt_icon.png" style="width: 17px;height: auto;margin-top: -10px;margin-right: 5px;"></a>
              <?php }else if ($sos->name=="Facebook"){?>
                <a href="<?= $sos->link ?>"><img src="<?= base_url() ?>assets/image/fb_icon.png" style="width: 17px;height: auto;margin-top: -10px;margin-right: 5px;"></a>
              <?php }else if ($sos->name=="Tiktok") { ?>
                <a href="<?= $sos->link ?>"><img src="<?= base_url() ?>assets/image/tik_icon.png" style="width: 15px;height: auto;margin-top: -10px;margin-right: 5px;"></a>
              <?php } 
            }?>
          </div>

        <p><a><img class="img-responsive" src="https://admin103.digivestasi.com/upload/posts/<?=$news->image?>" style="width: 300px;height: auto !important;border-radius: 10px; float: left;margin-right: 20px;" alt=""></a>

          <?= $news->content;?>
        </p>

        <p>&nbsp;</p>
        <div class="jeg_share_bottom_container" hidden>
            <div class="jeg_share_button share-bottom clearfix">
              <div class="jeg_sharelist">
                <a onclick="is_share(<?=$news->id;?>,'facebook')" href="https://www.facebook.com/sharer.php?u=<?=base_url() . 'news/detail/' . $news->slug ?>" rel="nofollow" class="jeg_btn-facebook expanded">
                <img src="<?= base_url() ?>assets/image/facebook_ic.png" style="padding: 8px">
                <span>Share<span class="count" id="count_facebook"><?=$news->fb_share;?></span></span></a>
                <a onclick="is_share(<?=$news->id;?>,'twitter')" href="https://twitter.com/intent/tweet?text=<?= $news->Title .' '. base_url() . 'news/detail/' . $news->slug ?>" rel="nofollow" class="jeg_btn-twitter expanded">
                <img src="<?= base_url() ?>assets/image/twitter_ic.png" style="padding: 8px">
                <span>Tweet<span class="count" id="count_twitter"><?=$news->twitter_share;?></span></span></a>
                <a onclick="is_share(<?=$news->id;?>,'whatsapp')" href="//api.whatsapp.com/send?text=<?= $news->Title .' '. base_url() . 'news/detail/' . $news->slug ?>" rel="nofollow" class="jeg_btn-whatsapp expanded">
                <img src="<?= base_url() ?>assets/image/whatsapp_ic.png" style="padding: 8px">
                <span>Send<span class="count" id="count_whatsapp"><?=$news->wa_share;?></span></span></a>
                <a onclick="is_share(<?=$news->id;?>,'telegram')" href="https://telegram.me/share/url?url=<?= $news->Title .' '. base_url() . 'news/detail/' . $news->slug ?>" rel="nofollow" class="jeg_btn-telegram expanded">
                <img src="<?= base_url() ?>assets/image/telegram_ic.png" style="padding: 8px">
                <span>Share<span class="count" id="count_telegram"><?=$news->telegram_share;?></span></span></a>
              </div>
            </div>
          </div>


                   <div class="row">
          
          <?php
            $jumlahShare = $news->fb_share + $news->twitter_share + $news->wa_share + $news->telegram_share; 
          ?>
          <div class="col-lg-12">
            <div class="jeg_share_top_container">
              <div class="jeg_share_button clearfix">
                <div class="jeg_share_stats">
                  <div class="jeg_share_count">
                    <div class="counts"><?=$jumlahShare?></div>
                    <span class="sharetext">SHARES</span>
                  </div>
                  <div class="jeg_views_count">
                    <div class="counts"><?=$viewers->lihat?></div>
                    <span class="sharetext">VIEWS</span>
                  </div>
                </div>
                <div class="jeg_sharelist">
                  <a onclick="is_share(<?=$news->id;?>,'facebook')" href="https://www.facebook.com/sharer.php?u=<?=base_url() . 'news/detail/' . $news->slug ?>" target="_blank" rel="nofollow" class="jeg_btn-facebook expanded">
                  <span>
                    <img src="<?= base_url() ?>assets/image/facebook_ic.png"> 
                  </span>
                  <span>Share</span></a>
                  <a onclick="is_share(<?=$news->id;?>,'twitter')" href="https://twitter.com/intent/tweet?text=<?= $news->Title .' '. base_url() . 'news/detail/' . $news->slug ?>" target="_blank" rel="nofollow" class="jeg_btn-twitter expanded"> 
                    <span>
                      <img src="<?= base_url() ?>assets/image/twitter_ic.png"> 
                    </span>
                    <span>Share</span>
                  </a>
                  <a onclick="is_share(<?=$news->id;?>,'whatsapp')" href="//api.whatsapp.com/send?text=<?= $news->Title .' '. base_url() . 'news/detail/' . $news->slug ?>" target="_blank" rel="nofollow" data-action="share/whatsapp/share" class="jeg_btn-whatsapp ">
                  <img src="<?= base_url() ?>assets/image/whatsapp_ic.png" style="padding: 8px">
                  </a>
                  <a onclick="is_share(<?=$news->id;?>,'telegram')" href="https://telegram.me/share/url?url=<?=$news->Title .' '. base_url() . 'news/detail/' . $news->slug ?>" target="_blank" rel="nofollow" class="jeg_btn-telegram ">
                  <img src="<?= base_url() ?>assets/image/telegram_ic.png" style="padding: 8px">
                  </a>
                </div>
              </div>
            </div>  
          </div> 
          <div class="tab-pane" id="add-comment" hidden="true">
            <form action="#" method="post" class="form-horizontal" id="commentForm" role="form"> 
              <div class="form-group">
                  <label for="email" class="col-sm-2 control-label">Comment</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="addComment" id="addComment" rows="5"></textarea>
                  </div>
              </div>
              <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">                    
                      <button class="btn btn-success btn-circle text-uppercase" type="submit" id="submitComment"><span class="glyphicon glyphicon-send"></span> Summit comment</button>
                  </div>
              </div>            
            </form>
          </div>            




        </div>

          <!--  -->


          <!-- berita terkait test -->
          <div class="box-heading" style="font-size: 25px;font-weight: 600;text-transform: none;margin-bottom:-2%">Berita Terkait </div>
          <br>
                  <div class="row">
            <?php

                foreach ($this->db->query("SELECT * FROM tbl_posts order by id desc limit 6 ")->result() as $banner) {
            // foreach ($videoYt2->items as $banner) {
                    $waktu_awal        = strtotime($banner->created_date);
                    $waktu_akhir       = strtotime(date("Y-m-d H:i:s")); // bisa juga waktu sekarang now()
                    
                    //menghitung selisih dengan hasil detik
                    $diff    = $waktu_akhir - $waktu_awal;
                    
                    //membagi detik menjadi jam
                    $jam    = floor($diff / (60 * 60));

                    ?>
                    
                    <div class=" col-sm-4">
                        <a href="<?= base_url() . 'news/detail/' . $banner->slug ?>" target="_blank"> <span class="banner-overlay" style=";  background-color: rgba(0, 0, 0, 0.24) "></span><img style="width: 100%;height: 200px;" src="https://admin103.digivestasi.com/upload/posts/<?= $banner->image ?>" alt="" /></a>
                        <a href="<?= base_url() . 'news/detail/' . $banner->slug ?>" target="_blank">
                        <div class="content2" style="border-radius: 0px;width: 86%;padding-top:10%;">
                            <h4 style="font-weight: 600;font-size: 14px;line-height: 27px;"><?= $banner->Title ?></h4>
                            <h5 style="font-weight: normal;font-size: 12px;line-height: 18px;"><?=date('H:i, d M Y',strtotime($banner->created_date));?> <img src="<?=base_url()?>assets/image/new_image/bubble.png"> <span class="fb-comments-count" data-href="https://digivestasi.com/news/detail/<?=$banner->id?>"></span> </h5> 
                            <!-- <a href="" > <img src="<?=base_url()?>assets/image/new_image/bubble.png"> <span class="fb-comments-count" data-href="https://digivestasi.com/news/detail/<?=$banner->id?>"></span></a> -->
                            

                        </div>
                        </a>
                    </div>
                

                    <?php
                }
                ?>
            
        </div>
          <!-- end berita terkait test -->


          <div class="box-heading" style="font-size: 25px;font-weight: 600;text-transform: none;margin-bottom:-2%">Diskusi tentang postingan ini </div>

          <br>
          <div id="fb-root"></div>
          <!-- <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v13.0" nonce="Bv6xlRWu"></script> -->

          <div class="fb-comments" data-href="https://digivestasi.com/news/detail/<?=$news->id?>" data-width="" data-numposts="5"></div>
          <!--  -->
      </div>
      <div class="col-sm-1"></div>
      <div class="col-sm-4">

        <div class="journal2_cms_blocks" style="background-attachment: scroll; padding-top: 0px; background-color: white; padding-bottom: 0px;">
          <div id="journal-cms-block-1491219349" class="box cms-blocks  ">
            <div class="box-heading">Berita Terkait</div>

            <div class="blocks">
              <?php
              foreach ($this->db->query("SELECT * FROM tbl_posts where idKategori='".$news->idKategori."' order by id desc limit 4")->result() as $p) {
                $waktu_awal3        = strtotime($p->created_date);
                $waktu_akhir3       = strtotime(date("Y-m-d H:i:s")); // bisa juga waktu sekarang now()
                                //menghitung selisih dengan hasil detik
                $diff3    = $waktu_akhir3 - $waktu_awal3;

                                //membagi detik menjadi jam
                $jam3    = floor($diff3 / (60 * 60));
                $ket2 = substr($p->content, 0,200);
                $ket = strip_tags($ket2);
                ?>


                <div class="row tabcontent" style="margin-bottom: 5%;" id="<?=$p->subKategori;?>">
                  <a href="<?= base_url() . 'news/detail/' . $p->slug ?>" class="linkk">
                    <div class="col-sm-4">
                      <i><img class="img-berita" style="margin-right: 5px; top: -1px" src="https://admin103.digivestasi.com/upload/posts/<?= $p->image ?>" width="110" height="auto" alt="" title="" /></i>
                    </div>
                  </a>
                  <div class="col-sm-6 text-berita">
                   <a href="<?= base_url() . 'news/detail/' . $p->slug ?>" style="color: black;text-decoration: none;">
                    <p style="font-size: 16px;font-style: bold !important;font-weight: 600;"><?= substr($p->Title, 0, 50) ?></p>
                    <p style="color: grey;font-size: 12px;float: left;"><?=date('H:i, d M Y',strtotime($p->created_date));?> </p>&nbsp;
                    <a href="<?= base_url() . 'news/detail/' . $p->slug ?>"><img src="<?=base_url()?>assets/image/new_image/bubble.png"> <span class="fb-comments-count" data-href="https://digivestasi.com/news/detail/<?=$p->id?>"></span></a>
                    <div class="text-content-berita">
                      <?=$ket;?>
                    </div>
                  </a>

                </div>

              </div>


              <?php 
            } ?>
          </div>

        </div>


      </div>

              <div class="journal2_cms_blocks" style="background-attachment: scroll; padding-top: 0px; background-color: white; padding-bottom: 0px;">
          <div id="journal-cms-block-1491219349" class="box cms-blocks  ">
            <div class="box-heading">Tag Populer</div>

            <div class="blocks">

              <?php
              foreach ($this->db->query("SELECT a.* ,count(b.id) as jml FROM tbl_post_detail b left join tbl_tag a on b.tagID=a.id group by b.tagID order by jml desc limit 5 ")->result() as $tg) {

                ?>
                <div class="cms-block xs-100 sm-50 md-50 lg-25 xl-26">
                  <span class="block-content" style="">
                    <div class="editor-content" style="text-align: left">
                      <div class="row">
                        <div class="col-sm-12">
                          <a onclick="getTag(<?=$tg->id;?>,'<?=$tag->tag_name?>')" style="color: #FF9F48;text-decoration: none;">
                            <p style="font-size: 16px;font-style: bold !important;">#<?= $tg->tag_name;?></p>
                          </a>

                        </div>

                      </div>
                      <hr style="margin-top: 10px;margin-bottom: 5px;">

                    </div>
                  </span>
                </div>

              <?php } ?>

            </div>

          </div>


        </div>

      <div class="journal2_cms_blocks" style="background-attachment: scroll; padding-top: 0px; background-color: white; padding-bottom: 0px;">
        <div id="journal-cms-block-1491219349" class="box cms-blocks  ">
          <div class="box-heading">Berita Terbaru</div>
          <br>

          <div class="blocks">
            <?php
            foreach ($this->db->query("SELECT * FROM tbl_posts order by id desc limit 4")->result() as $pk) {
              $waktu_awal3        = strtotime($pk->created_date);
                $waktu_akhir3       = strtotime(date("Y-m-d H:i:s")); // bisa juga waktu sekarang now()
                                //menghitung selisih dengan hasil detik
                $diff3    = $waktu_akhir3 - $waktu_awal3;

                                //membagi detik menjadi jam
                $jam3    = floor($diff3 / (60 * 60));
                $ket2 = substr($pk->content, 0,200);
                $ket = strip_tags($ket2);
                ?>


                <div class="row tabcontent" style="margin-bottom: 5%;" id="<?=$pk->subKategori;?>">
                  <a href="<?= base_url() . 'news/detail/' . $pk->slug ?>" class="linkk">
                    <div class="col-sm-4">
                      <i><img class="img-berita" style="margin-right: 5px; top: -1px" src="https://admin103.digivestasi.com/upload/posts/<?= $pk->image ?>" width="110" height="auto" alt="" title="" /></i>
                    </div>
                  </a>
                  <div class="col-sm-6 text-berita">
                   <a href="<?= base_url() . 'news/detail/' . $pk->slug ?>" style="color: black;text-decoration: none;">
                    <p style="font-size: 16px;font-style: bold !important;font-weight: 600;"><?= substr($pk->Title, 0, 50) ?></p>
                    <p style="color: grey;font-size: 12px;float: left;"><?=date('H:i, d M Y',strtotime($pk->created_date));?></p>&nbsp;
                    <img src="<?=base_url()?>assets/image/new_image/bubble.png"> <span class="fb-comments-count" data-href="https://digivestasi.com/news/detail/<?=$pk->id?>"></span>
                    </a>
                    <div class="text-content-berita">
                      <?=$ket;?>
                    </div>

                </div>

              </div>


              <?php 
            } ?>
          </div>

        </div>
        <a href="<?= base_url() . 'hotnews';?>" class="linkk" style="color: orange;text-transform: none;text-decoration: underline;font-size: 16px;">Lihat lebih banyak <a style="color: orange;" data-icon="&#xe608;"></a></a>

      </div>
    </div>
  </div>


  <div class="buttons" hidden="true">
    <!-- <div class="right"><a href="<?=base_url()?>" class="button">Continue</a></div> -->
  </div>

</div>
</div>
</div>

<!-- Harga Cryptopcurency -->
<div id="container" style="margin-bottom: 195px;" hidden="true">
  <div class="container">
    <div id="content">
      <div class="row">
        <div class="col-sm-9">



        </div>
        <div class="col-s-3">
        </div>
      </div>
    </div>
  </div>
</div>


<div style="margin-bottom: 300px;"></div>

<script type="text/javascript">
  // function getBerita(id,kategori){

  //   base_url = '<?php echo base_url();?>';

  //   // if (id=='9') {

  //   //   window.location= base_url+kategori;

  //   // }else if (id=='10') {

  //   //   window.location= base_url+'teknologi';

  //   // }else if (id=='11') {

  //   //   window.location= base_url+'investasi';

  //   // }else{

  //     window.location= base_url+'hotnews';
  //   // }
  // }


  function getBerita(id,kategori){

         base_url = '<?php echo base_url();?>';

        $.ajax({

            type: "GET",

            url: base_url+"Hotnews",

            data: {'id':id,'kategori':kategori},

            success: function(html){

                window.location= base_url+'hotnews/list/?id='+id;

            },

            error: function(){


            }

        });

  }


  function getTag(id,name) {

        base_url = '<?php echo base_url();?>';

        $.ajax({

            type: "GET",

            url: base_url+"News",

            data: {'id':id,'nama':name},

            success: function(html){

                window.location= base_url+'news/tag/?id='+id;

            },

            error: function(){


            }

        });

    }
  
function is_share(id,sosmed) {
  base_url = '<?php echo base_url();?>';
  $.ajax({
    type: "POST",
    url: base_url+"ShareSosmed",
    dataType: "JSON",
    data: {'id':id,'sosmed':sosmed},
    success: function(response){
      $('#count_'+sosmed).html(response.jumlah)
    },
    error: function(){
    }
  });

}


</script>

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v13.0" nonce="Bv6xlRWu"></script>
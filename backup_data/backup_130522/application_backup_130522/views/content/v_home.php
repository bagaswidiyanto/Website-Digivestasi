<style type="text/css">

    .textdigi{
        font-weight: normal;
        font-family: Noto Sans;
        font-size: 13px;
        font-style: normal;
        text-transform: none;
        color: grey;
        text-align: center;
    }

    .text-content-berita {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 4; /* number of lines to show */
        line-clamp: 4; 
        -webkit-box-orient: vertical;
    }



    .owl-carousel .nav-btn{
      height: 47px;
      width: 26px;
      cursor: pointer;
      -webkit-transform: translate(-50%,-50%);
      transform: translate(-50%,-50%);
      position: absolute;
      /*top: 50%;*/
      /*top: 45%;*/
      top: 39%;
  }

  .owl-carousel .owl-prev.disabled,
  .owl-carousel .owl-next.disabled{
    pointer-events: none;
    opacity: 0.2;
}

.owl-carousel .prev-slide{
  background: url("https://progimedia.com/assets/img/icon-next.png") no-repeat scroll 0 0;
  left: 37px;
}
.owl-carousel .next-slide{
  background: url("https://progimedia.com/assets/img/icon-prev.png") no-repeat scroll 0 0;
  right: -2px;
}
.owl-carousel .prev-slide:hover{
   /*background-position: 0px -53px;*/
}
.owl-carousel .next-slide:hover{
    /*background-position: -24px -53px;*/
}
.hSlider{
    text-align: left;
    font-size: 24px;
    margin-top: 3%;
    padding-left: 5px;
}
.tglSlider{
    text-align: left;
    margin-top: 5%;
    color: #BEBEBE;
    font-size: 16px;
    padding-left: 5px;
}

.owl-theme .owl-dots .owl-dot.active span, .owl-theme .owl-dots .owl-dot:hover span {
    background: #ffa500 !important;
}
.owl-theme .owl-dots {
    text-align: left !important;
    -webkit-tap-highlight-color: transparent;margin-top: -2% !important;
}

.owl-carousel .owl-item img {

    height: 300px !important;
    max-height: 100% !important;
}

#garis {
    border-right-width: 1px;
    border-right-style: solid;
    border-right-color: black;
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

.journal-carousel > div {
    overflow: hidden;
    /*margin-left: 2%;*/
    margin-top: 1%;
}

.card-custom {
    min-height: 114px;
}

</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<?php
    $ads = $this->db->query("SELECT * FROM tbl_iklan")->row();
    if ($ads->id) {
        $isi = '<a href="'.$ads->url.'"><img src="https://admin103.digivestasi.com/upload/iklan/'.$ads->image.'" alt="" style="flex-shrink: 0;min-width: 100%;min-height: 100%;min-height: 100%;min-width: 100%;object-fit: cover;object-fit: cover;width: 50px;height: 163px;width: 100%;height: auto;background-size: cover;background-repeat: no-repeat;background-position: center;"></a>'; 
        $sty = '';
    } else {
        $isi = '<center><h5 style="opacity: 0.5;"> Advertisement <br> 1110 X 160 </h5></center>';
        $sty = 'border: 1px dotted black;';
    }
?>
<div class="col-lg-12">
    <div class="container" style="padding-top: 2%;">
        <div class="fill" style="display: flex;justify-content: center;align-items: center;overflow: hidden; height: 160px;<?=$sty?>">
            <?=$isi;?>
        </div>
    </div>
</div>

<div class="col-lg-12">
    <div class="container" style="padding-top: 2%;">
        <div class="row" id="tab">

            <?php foreach ($this->db->query("SELECT * FROM tbl_subkategori where aktif='Y' order by id asc")->result() as $sub) {?>

                <?php if ($sub->id!='1') { ?>
                    <div id="garis"></div>
                <?php } ?>
                
                <button class="tabs-sub-kategori tablinks" style="font-family: Noto Sans;font-style: normal;margin-left: auto;margin-right: auto;" onclick="getBerita(<?=$sub->id;?>,'<?=$sub->kategori;?>')"><?=$sub->kategori;?></button>

            <?php }?>
        </div>
    </div>
</div>

<div class="col-lg-12">
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

<div class="container" style="margin-top: 5%;">
    <div class="owl-carousel owl-theme">
     <?php
     $slider2 = $slider->result(); 
     foreach($slider2 as $s){
        $tgl = date('l, d F Y' , strtotime($s->tanggal));
        
        $cap2 = strip_tags($s->captionSlider);
        $cap=substr($cap2, 0,1000);
        ?>
        <!-- style="border: 1px solid #C4C4C4;border-radius: 10px;" -->
        <div class="item">
            <div class="content" >
                <div class="row">
                    <div class="col-sm-6">
                      <a href="<?=$s->url;?>"><img class="img-responsive" src="https://admin103.digivestasi.com/upload/slider/<?=$s->imageSlider;?>" alt="" style="border-top-left-radius: 10px;border-bottom-left-radius: 10px;"></a>
                  </div>
                  <div class="col-sm-6">
                   <h3 class="hSlider"><?=$s->nameSlider;?></h3>
                   <br>
                   <h6 style="text-align: left;padding-left: 5px; padding-right: 5px;"><?=$cap;?> <a href="<?=$s->url;?>">Readmore..</a></h6> 
                   <h5 class="tglSlider"><small><?=$tgl;?></small></h5>
               </div>
           </div>
       </div>

   </div>
   <?php
}
?>





</div>
</div>





<div class="container" style="background-attachment: scroll; padding-top: 0px; background-color: white; padding-bottom: 0px ;">
    <div class="box journal-carousel carousel-product" id="carousel-1167006846" style="max-width: 1220px; background-attachment: scroll;margin-bottom: 10px;">

        <div class="box-heading" style="font-size: 25px;font-weight: 600;text-transform: none;">Berita Hangat 🔥</div>

        <div class="blocks">

        </div>
    </div>
</div>

<div class="extended-container">
    <div id="container" class="container" style="max-width: 1250px;">

        <div id="notification"></div>
        <div id="content">
            <h1 style="display: none;"></h1>
            <div class="box  static-banners  " style="" id="static-banners-856955270">
                <div>

                    <style type="text/css">
                        .content2 {
                            position: absolute;
                            /* Position the background text */
                            bottom: 0;
                            /* At the bottom. Use top:0 to append it to the top */
                            background: rgb(0, 0, 0);
                            /* Fallback color */
                            background: rgba(0, 0, 0, 0.1);
                            /* Black background with 0.5 opacity */
                            color: #f1f1f1;
                            /* Grey text */
                            width: 91%;
                            /* Full width */
                            padding: 10px;
                            /* Some padding */
                            padding-top: 38%;
                            background: linear-gradient(0deg, #000 0%, rgba(0, 0, 0, 0) 100%);
                        }
                    </style>
                    <div class="box-content ">
                        <div class="row">


                            <?php
                            date_default_timezone_set('ASIA/JAKARTA');

                            foreach ($this->db->query("SELECT * FROM tbl_posts order by id desc limit 3 ")->result() as $banner) {
                                $waktu_awal        = strtotime($banner->created_date);
                                $waktu_akhir       = strtotime(date("Y-m-d H:i:s")); // bisa juga waktu sekarang now()
                                
                                //menghitung selisih dengan hasil detik
                                $diff    = $waktu_akhir - $waktu_awal;
                                
                                //membagi detik menjadi jam
                                $jam    = floor($diff / (60 * 60));


                                // if ($jam>24) {
                                //     if ($jam<=168) {

                                //         $tgl_mulai   = date('Y-m-d', strtotime($banner->created_date));
                                //         $tgl_selesai = date('Y-m-d');

                                //         $waktu_awal        = strtotime($tgl_mulai);
                                //         $waktu_akhir       = strtotime($tgl_selesai);

                                //         $diff  = date_diff( $waktu_awal, $waktu_akhir );

                                //         $hour =  $diff->d.' Days Ago';

                                //     }else if ($jam>=720 && $jam<=744) {
                                //         //data awal
                                //         $tgl_mulai=date('Y-m-d', strtotime($banner->created_date));
                                //         $tgl_selesai=date('Y-m-d');

                                //         $diff  = date_diff( $tgl_mulai, $tgl_selesai );

                                //         $hour =  $diff->m.' Month Ago';

                                //     }else{
                                //         $tgl_mulai=date('Y-m-d', strtotime($banner->created_date));
                                //         $tgl_selesai=date('Y-m-d');

                                //         $diff  = date_diff( $tgl_mulai, $tgl_selesai );

                                //         $hour = $diff->y.' Years Ago';
                                //     }

                                // }else{
                                //     $hour = $jam.' Hours Ago';
                                // }

                                ?>
                                
                                <div class="static-banner col-sm-4">
                                    <a href="<?= base_url() . 'news/detail/' . $banner->slug ?>"> <span class="banner-overlay" style=";  background-color: rgba(0, 0, 0, 0.24) "></span><img style="" src="https://admin103.digivestasi.com/upload/posts/<?= $banner->image ?>" width="50" height="50" alt="" /></a>
                                    <a href="<?= base_url() . 'news/detail/' . $banner->slug ?>">
                                    <div class="content2" style="border-radius: 0px;">
                                        <h4 style="font-weight: 600;font-size: 18px;line-height: 27px;"><?= $banner->Title ?></h4>
                                        <h5 style="font-weight: normal;font-size: 12px;line-height: 18px;"><?=date('H:i, d M Y',strtotime($banner->created_date));?></h5>

                                    </div>
                                    </a>
                                </div>
                            

                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container" style="background-attachment: scroll; padding-top: 0px; background-color: white; padding-bottom: 0px ;">
    <div class="box journal-carousel carousel-product" id="carousel-1167006846" style="max-width: 1220px; background-attachment: scroll">

        <div class="box-heading" style="font-size: 25px;font-weight: 600;text-transform: none;margin-bottom:-2%">Harga Cryptocurrency </div>

        <div class="row" style="margin-top: 2%;">
            <!-- <div class="col-sm-6" style="text-align:left;">
                <a href="<?= base_url()?>" class="" style="text-decoration: underline;color: #FF9F48;font-size: 15px;">Refresh</a>
            </div> -->
            <div class="col-sm-12" style="text-align:right;">
                <a href="<?= base_url().'DetailHarga'?>" class="" style="text-decoration: underline;color: #FF9F48;font-size: 15px;">Lihat Detail</a>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
               <div id="isi_table" class="table-responsive">
                  <table id="example" class="table " style="width:100%;">
                     <thead>
                        <tr style="font-size:14px">
                            <th>#</th>
                            <th>Nama</th>
                            <th></th>
                            <th style="text-align:right;">Harga</th>
                            <th style="text-align:right;">24 Jam</th>
                            <th style="text-align:right;">Volume 24h Jam</th>
                            <th style="text-align:right;">Kapital Pasar</th>
                            <!-- <th>Last 7 Days</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        function formatDollars($dollars)
                        {
                            $formatted = "$" . number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "", $dollars)), 2);
                            return $dollars < 0 ? "({$formatted})" : "{$formatted}";
                        }

                        function http_request($url){
    // persiapkan curl
                            $ch = curl_init(); 

    // set url 
                            curl_setopt($ch, CURLOPT_URL, $url);

    // set user agent    
                            curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

    // return the transfer as a string 
                            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

    // $output contains the output string 
                            $output = curl_exec($ch); 

    // tutup curl 
                            curl_close($ch);      

    // mengembalikan hasil curl
                            return $output;
                        }

                        $isi = http_request("https://api.alternative.me/v1/ticker/?limit=5");

// ubah string JSON menjadi array
                        $isi = json_decode($isi, TRUE);
                        $no=1;
                        foreach ($isi as $key) {
                            echo "<tr style='font-size:14px'>";
                            echo '<td>'.$no.'</td>';
                            if($key["symbol"]=="BTC"){
                                echo '<td><img src="'.base_url().'assets/logo/btc.png" width="20" height="20" alt="" /> '.$key["name"].'</td>';
                            }else if($key["symbol"]=="ETH"){
                                echo '<td><img src="'.base_url().'assets/logo/eth.png" width="20" height="20" alt="" /> '.$key["name"].'</td>';
                            }else if($key["symbol"]=="BNB"){
                                echo '<td><img src="'.base_url().'assets/logo/bnb.png" width="20" height="20" alt="" /> '.$key["name"].'</td>';
                            }else if($key["symbol"]=="USDT"){
                                echo '<td><img src="'.base_url().'assets/logo/usdt.png" width="20" height="20" alt="" /> '.$key["name"].'</td>';
                            }else if($key["symbol"]=="SOL"){
                                echo '<td><img src="'.base_url().'assets/logo/sol.png" width="20" height="20" alt="" /> '.$key["name"].'</td>';
                            }

                            echo '<td style="text-align:left;">'.$key["symbol"].'</td>';
                            echo '<td style="text-align:right;">'.formatDollars($key["price_usd"]).'</td>';
                            // $hit = $key["percent_change_24h"]*100%;
                            if (substr($key["percent_change_24h"], 0,1)=='-') {
                               $sty = 'style="color:red;text-align:right;"';
                               $akhir=explode('-', $key["percent_change_24h"]);
                               $isi=$akhir[1];
                               $icon = 'sort_down.png';
                           }else{
                            $sty = 'style="color:green;text-align:right;"';
                            $isi =$key["percent_change_24h"];
                            $icon = 'sort_up.png';
                        }

                        echo '<td '.$sty.'><img src="'.base_url().'assets/image/'.$icon.'" width="5" height="5" alt="" /> '.number_format($isi,2).' %</td>';
                        echo '<td style="text-align:right;">'.formatDollars($key["24h_volume_usd"]).'</td>';
                        echo '<td style="text-align:right;">'.formatDollars($key["market_cap_usd"]).'</td>';
                            // echo '<td></td>';
                        echo "</tr>";
                        $no++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>
</div>

<!-- Harga Cryptopcurency -->
<div id="bottom-modules" style="margin-bottom: 195px;">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
           <!-- <div class="box-heading" style="font-size: 25px;font-weight: 600;text-transform: none;">Harga Cryptopcurency</div>
               <img src="<?= base_url() ?>assets/image/gap/group.png" width="100%" height="auto" /> -->

               <div class="journal2_cms_blocks" style="background-attachment: scroll; padding-top: 0px; background-color: white; padding-bottom: 0px;">
                <div id="journal-cms-block-1491219349" class="box cms-blocks  ">
                    <div class="box-heading">Berita Terbaru</div>

                    <div class="blocks">
                        <?php
                        
                        foreach ($this->db->query("SELECT * FROM tbl_posts order by id desc limit 8")->result() as $berita) {
                            $waktu_awal3        = strtotime($berita->created_date);
                                $waktu_akhir3       = strtotime(date("Y-m-d H:i:s")); // bisa juga waktu sekarang now()
                                
                                //menghitung selisih dengan hasil detik
                                $diff3    = $waktu_akhir3 - $waktu_awal3;
                                
                                //membagi detik menjadi jam
                                $jam3    = floor($diff3 / (60 * 60));
                                $ket2    = strip_tags($berita->content);
                                $ket     =substr($ket2, 0,1000);
                                
                                ?>

                                <div class="row" style="margin-bottom: 5%;">
                                    <a href="<?= base_url() . 'news/detail/' . $berita->slug ?>" class="linkk">
                                        <div class="col-sm-4">
                                           <i><img style="margin-right: 5px; top: -1px;border-radius: 10px;" src="https://admin103.digivestasi.com/upload/posts/<?= $berita->image ?>" width="210" height="auto" alt="" title="" /></i>
                                       </div>
                                   </a>
                                   <div class="col-sm-6 text-berita">
                                    <a href="<?= base_url() . 'news/detail/' . $berita->slug ?>" style="color: black;text-decoration: none;">
                                      <p style="font-size: 18px;font-style: bold !important;font-weight: 600;"><?= substr($berita->Title, 0, 100) ?></p>
                                      <p style="color: grey;font-size: 12px;"><?=date('H:i, d M Y',strtotime($berita->created_date));?></p>
                                      <div class="text-content-berita">

                                          <?=$ket;?>
                                      </div>
                                  </a>
                              </div>

                          </div>


                      <?php } ?>
                  </div>

              </div>
              <a href="<?= base_url() . 'hotnews';?>" class="linkk" style="color: orange;text-transform: none;text-decoration: underline;">Lihat Lebih Banyak <a style="color: orange;" data-icon="&#xe608;"></a></a>
              <script>
                Journal.equalHeight($('#journal-cms-block-1491219349 .cms-block'), '.block-content');
            </script>

        </div>
    </div>
    <div class="col-sm-2" hidden>
        <div class="box-heading"></div>
        <a href="<?= base_url() . 'news/detail/' . $berita->slug ?>" class="linkk" style="color: orange;text-transform: none;text-decoration: underline;">Lihat Detail <a style="color: orange;" data-icon="&#xe608;"></a></a>
    </div>
    <div class="col-sm-4">

        <div id=sidebar>
            <div class="box-heading" style="font-size: 24px;font-weight: 600;text-transform: none;margin-bottom: 15px;padding-top: 5px;">Tag Populer</div>

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

                <div class="blocks">
                    <div class="cms-block xs-100 sm-50 md-50 lg-25 xl-26">
                        <div style="font-size: 24px;font-weight: 600;text-transform: none;margin-bottom: 10px;">Berita Populer</div>
                        <?php
                        foreach ($this->db->query("SELECT * FROM tbl_posts order by id desc limit 8  ")->result() as $berita) {
                            $waktu_awal2        = strtotime($berita->created_date);
                        $waktu_akhir2       = strtotime(date("Y-m-d H:i:s")); // bisa juga waktu sekarang now()

                        //menghitung selisih dengan hasil detik
                        $diff2    = $waktu_akhir2 - $waktu_awal2;

                        //membagi detik menjadi jam
                        $jam2    = floor($diff2 / (60 * 60));
                        ?>
                        <div class="cms-block xs-100 sm-50 md-50 lg-25 xl-26">
                            <span class="block-content" style="">
                                <div class="editor-content" style="text-align: left">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <a href="<?= base_url() . 'news/detail/' . $berita->slug ?>" style="color: black;text-decoration: none;">
                                                <i><img style="top: -1px;border-radius: 10px;max-width: 80px !important;" src="https://admin103.digivestasi.com/upload/posts/<?= $berita->image ?>" height="auto" alt="" title="" /></i>  
                                            </a>  
                                        </div>
                                        <div class="col-sm-8">
                                            <a href="<?= base_url() . 'news/detail/' . $berita->slug ?>" style="color: black;text-decoration: none;">
                                                <p style="font-size: 16px;font-style: bold !important;"><?= substr($berita->Title, 0, 50) ?></p>
                                                <a style="color: grey;font-size: 12px;"><?=date('H:i, d M Y',strtotime($berita->created_date));?></a>
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

                <div class="blocks" style="text-align:center;">
                    <span class="block-content" style="">
                        <img src="<?= base_url() ?>assets/image/gap/digihitam.png" width="250" height="auto" />
                        <p class="textdigi"><?= (@$_GET['lang'] != 'eng') ?  'Digivestasi adalah sebuah media informasi seputar aset digital terkait mata uang kripto dan tekhnologi blockchain.' :  ' a'; ?></p>
                        <div style="margin-top: 10px;text-align: center;">
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
                    </span>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid" style="margin-top: 18px !important;margin-left: 59px !important;" >
        <div class="row">
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="card-custom" >
                    <img src="<?= base_url() ?>assets/image/calendar-ic.png" style="width: 39px;height: auto;margin-top: 27px;margin-right: 5px;"/>
                    <span style="font-size: 16px;font-weight: 600;position: absolute;margin-top: 34px;"><?=date('d M Y')?></span>
                </div> 
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="card-custom" >
                    <img src="<?= base_url() ?>assets/image/signal-bars.png" style="width: 39px;height: auto;margin-top: 27px;margin-right: 5px;"/>
                    <span class="counter" style="font-size: 16px;font-weight: 600;position: absolute;margin-top: 34px;"><?=$online->jml?></span>
                    <span style="font-size: 12px;font-weight: 100;position: absolute;margin-top: 37px;margin-left: 41px;">Online Visitor Today</span>
                </div> 
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="card-custom" >
                    <img src="<?= base_url() ?>assets/image/male.png" style="width: 39px;height: auto;margin-top: 27px;margin-right: 5px;"/>
                    <span class="counter" style="font-size: 16px;font-weight: 600;position: absolute;margin-top: 34px;"><?=$today->jml?></span>
                    <span style="font-size: 12px;font-weight: 100;position: absolute;margin-top: 37px;margin-left: 41px;">Visitor Today</span>
                </div> 
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="card-custom" >
                    <img src="<?= base_url() ?>assets/image/users-ic.png" style="width: 43px;height: auto;margin-top: 27px;margin-right: 5px;"/>
                    <span class="counter" style="font-size: 16px;font-weight: 600;position: absolute;margin-top: 34px;"><?=$all->jml?></span>
                    <span style="font-size: 12px;font-weight: 100;position: absolute;margin-top: 37px; margin-left:41px">Total Visitor</span>
                </div> 
            </div>
        </div>

        <!-- <div class="row stats">
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="chart" data-percent="230">
                    <span><i class="fa fa-calendar"></i></span>
                    <span class="percent"><?php echo date('d');?></span><?php echo date('M Y');?>
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="chart" data-percent="68">
                    <span><i class="fa fa-signal"></i></span>
                    <span class="percent"><?php echo 100;?></span>Online Visitor Today
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="chart" data-percent="147">
                    <span><i class="fa fa-male"></i></span>
                    <span class="percent"><?php echo 100;?></span>Visitor Today
                </div>
            </div>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="chart" data-percent="105">
                    <span><i class="fa fa-users"></i></span>
                    <span class="percent"><?php echo 1234;?></span>Total Visitor
                </div>
            </div>
        </div> -->
    </div>




    
</div>
</div>

<script>
    $(document).ready(function(){
        // dt();
        setInterval(function() { dt(); }, 10000);
    });

    $('.owl-carousel').owlCarousel({
        center: true,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        items: 1,
        nav: true,
        navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
    })

    // function getBerita(id,kategori){

    //     base_url = '<?php echo base_url();?>';

    //     // if (id=='9') {

    //     //     window.location= base_url+kategori;

    //     // }else if (id=='10') {

    //     //     window.location= base_url+'teknologi';

    //     // }else if (id=='11') {

    //     //     window.location= base_url+'investasi';

    //     // }else{

    //         window.location= base_url+'hotnews';
    //     // }
    // }

    // $(document).ready(function() {
    //     var table = $('#example').DataTable( {
    //         fixedHeader: true
    //     } );
    // } );

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

    base_url = '<?php echo base_url();?>';
    function dt(){
        var id = '0';
     $.ajax({
        type: "POST",
        url: base_url+"Table",
        data: {'id':id},
        cache: false,
        success: function(html) {    

          $("#isi_table").html(html);
      }
      });
     }

     $(document).ready(function() {
        $('.counter').each(function () {
        $(this).prop('Counter',0).animate({
        Counter: $(this).text()
        }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
        $(this).text(Math.ceil(now));
        }
        });
        });

    });
</script>


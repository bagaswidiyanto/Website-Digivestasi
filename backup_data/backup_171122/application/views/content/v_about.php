<style type="text/css">
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
</style>

<div class="col-lg-12">
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

<div class="extended-container">
  <div id="container" class="j-container">
    <div id="content">
      <h3 class="heading-title"><?= (@$_GET['lang'] != 'eng') ?  'Kami adalah Digivestasi' :  'We Are Digivestasi'; ?></h3>

      <div class="home-carousel">
        <div class="dark-mask"></div>
        <div class="homepage owl-carousel">


         <div class="item">
          <div class="row">
            <div class="col-sm-12" style="text-align:center">
              <a href="#"><img class="img-responsive" src="https://admin103.digivestasi.com/upload/company/<?=$contactus->image?>" style="width: 40%;height: auto !important;" alt=""></a>
            </div>
          </div>
        </div>


      </div>
      <!-- <a href="#" class="scroll-down" address="true"></a> -->
    </div>
    <div id="propilpt">
      <?= (@$_GET['lang'] != 'eng') ?  $contactus->description_ina :  $contactus->description_eng ?>
    </div>
  </div>


  <!-- <?= (@$_GET['lang'] != 'eng') ?  $contactus->description_ina :  $contactus->description_eng ?> -->
  <!-- <?= $contactus->description_ina; ?> -->

    <!-- p>We at INNOTEK INSTRUMENTS, are&nbsp;manufacturer&nbsp;and exporter&nbsp;of Surgical and Dental Instruments.&nbsp;<br />
&nbsp;</p>

<p>

We have been exporting our instruments all over the world to amount to hundreds and thousands of instruments each year. In a very short amount of time, our company has grown immensely to offer a diverse product range as well as acquire international certifications proving to our customers that our words and our products, both are of the highest quality.&nbsp;</p>

<p><br />
<strong>PRODUCT’S LINE</strong></p>

<p><br />
We are the original equipment manufacturers (OEM) for surgical and dental instruments. Our product depth covers more then 10000 different type of instruments ranging from the typical instruments used in the clinic to sophisticated instruments required during surgeries. We deem, however, pertinent to submit further that the range and scope of our production activities is not limited only to our product literature. We can produce instruments even if not depicted in our catalogues provided we receive samples or photos or references from the world-renowned company's catalogue.</p>

<p><br />
<strong>QUALITY CERTIFICATIONS</strong></p>

<p><br />
We are ISO 9001:2008, ISO 13485:2003 certified and CE Mark approved.&nbsp;</p>

<p>&nbsp;</p>

<p><strong>FUTURE ORIENTED</strong></p>

<p><br />
We are a forward-looking company, and are determined to cover more milestones so as to be the world leaders in our field in the days to come. We shall cooperate with you every way possible, and assure you to serve your business interests the best way possible.</p>

<p><br />
<strong>COMMITMENT&nbsp;</strong></p>

<p><br />
Our commitment is to meet the changing needs of healthcare systems and to lead the industry by providing quality surgical instruments at competitive cost.</p>

<p><br />
We understand the diverse needs of our customers and know that quality along with delivery times are the most important and common requirements of our customers from both the segments. This realization allows us to serve our customers in the most efficient and cost effective manner.&nbsp;</p>

<p>We are looking forward to serve you.</p>
-->
<p>&nbsp;</p>
<!-- <div class="buttons"> -->
  <!-- <div class="right"><a href="<?= base_url() ?>" class="button">Continue</a></div> -->
  <!-- </div> -->

</div>
</div>

<div style="margin-bottom: 200px;"></div>

<script>
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
</script>
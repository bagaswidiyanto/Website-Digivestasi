<style type="text/css">
	.imgcenter {
  display: block;
  margin-left: auto;
  margin-right: auto;
  /*width: 50%;*/
}
</style>
<div class="extended-container">
<div id="container" class="j-container">

<div id="notification"></div><div class="breadcrumb">
        <a href="<?=base_url()?>">Home</a>
         &raquo; <a href="<?=base_url()?>about"><?=(@$_GET['lang']!='eng') ?  'Berita' :  'News';?></a>
    </div>
 
<div id="content">
	<!-- <h1 class="heading-title"><?=(@$_GET['lang']!='eng') ?  'Profilaaaa' :  'Profileaaa';?></h1>   -->
<!-- <?=(@$_GET['lang']!='eng') ?  $contactus->description_ina :  $contactus->description_eng?> -->
<!-- <?=$contactus->description_ina;?> -->

	<?
$id = $this->uri->segment('3');
$news = $this->db->query("SELECT * FROM tbl_posts where slug = '".$id."' ")->row();
?>
	<h1 class="heading-title"> <?= $news->Title;?></h1> 
<i><img style="min-height: 180px; min-width: 250px;" class="imgcenter" src="https://admin.gap-id.co.id/upload/posts/<?=$news->image?>" width="10" height="50" alt="" title="" /></i>
<p>&nbsp;</p>
 <?= $news->content;?>


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
  <div class="buttons">
    <!-- <div class="right"><a href="<?=base_url()?>" class="button">Continue</a></div> -->
  </div>

  </div>
</div>
</div>
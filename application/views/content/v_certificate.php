
<div class="extended-container">
<div id="container" class="j-container">

<div id="notification"></div><div class="breadcrumb">
        <a href="<?=base_url()?>">Home</a>
         &raquo; <a href="<?=base_url()?>certificate"><?=(@$_GET['lang']!='eng') ?  'Sertifikasi' :  'Certifications';?></a>
    </div>
 
<div id="content"><h1 class="heading-title"><?=(@$_GET['lang']!='eng') ?  'Sertifikasi' :  'Certification';?></h1>  <p><?=(@$_GET['lang']!='eng') ?  'Kami adalah perusahaan bersertifikat ISO 9001: 2015, ISO 13485: 2016 dan CE Mark.' :  'We are ISO 9001:2015, ISO 13485:2016 certified and CE Mark approved company.
';?></p>

<p>&nbsp;</p>
<?php foreach ($certi->result() as $cs) 
{
?>

<a href="https://admin.gap-id.co.id/upload/certificate/<?=$cs->pdfUrl?>" target="_blank"><img alt="" src="https://admin.gap-id.co.id/upload/certificate/<?=$cs->image?>" height="150" width="150" /> &nbsp; &nbsp; 
<!-- <?= $cs->nama ?></a> --></a>

<?php }?>
  <div class="buttons">
    <div class="right"><a href="<?=base_url()?>" class="button">Continue</a></div>
  </div>
  </div>
<!-- <p><a href="http://www.innotek.com.pk/iso9001.pdf" target="_blank"><img alt="" src="https://www.innotek.com.pk/image/data/inno/iso9001-small.jpg" /></a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<a href="http://www.innotek.com.pk/iso13485.pdf" target="_blank"><img alt="" src="https://www.innotek.com.pk/image/data/inno/iso13485-small.jpg" /></a><br />
&nbsp; &nbsp; &nbsp; &nbsp; ISO 9001:2015&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ISO 13485:2016</p>
  <div class="buttons">
    <div class="right"><a href="<?=base_url()?>" class="button">Continue</a></div>
  </div>
  </div> -->

</div>
</div>
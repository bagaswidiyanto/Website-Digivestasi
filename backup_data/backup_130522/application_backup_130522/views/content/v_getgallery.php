<!-- <?
// $id = $this->input->post('id');
// foreach($this->db->query("SELECT * FROM tbl_products where category='".$id."' ")->result() as $product) { 
?> -->
<div class="main">	
	<section class="big_features">
		<div class="container-profile">
			<div class="row">
				<div class=" text-center" >

					<section>
						<div class="pad-container fitur">
							<div class="text-center" data-aos="flip-up">
								<div>
									<h3 style="text-align: center;">
										<!-- <b style="text-align: center;"><?= $product->productName ?></b> -->
										<h1 class="heading-title">Gallerys</h1>  
									</h3>
								</div>
							</div>
							<div class="blog wow animated animated2 " style="text-align:justify" data-aos="fade-up" data-aos-duration="2000">
<!-- <?
// $id = $this->input->post('id');
// foreach($this->db->query("SELECT * FROM tbl_gallery_new where grp='".$id."' ")->result() as $gallery) { 
?> -->
								<!-- <div class="row">
  <div class="">
    <div class="content">
      <img src="<?=base_url()?>../../../upload/product/<?=$product->mainImage?>"  alt="Mountains" style="width:15%">
      <h4>
      	<?= $product->productName ?> 
      		
      	</h4>
      
    </div>
  </div>

</div> -->

 <div class="row text-center text-lg-left">


    <div class="col-lg-3 col-md-4 col-6">
      	<?
$id = $this->input->post('id');
foreach($this->db->query("SELECT * FROM tbl_gallery_new where grp='".$id."' ")->result() as $gallery) { 
?>
      <!-- <a class="d-block mb-4 h-100"  href="<?=base_url()?>../../../upload/gallery/<?=$gallery->image?>" data-fancybox="gallery">
            <img class="img-fluid img-thumbnail" src="<?=base_url()?>../../../upload/gallery/<?=$gallery->image?>" style="width:20%" alt="">
          </a> -->
          <a class="d-block mb-4 h-100"  href="https://admin.gap-id.co.id/upload/gallery/<?=$gallery->image?>" data-fancybox="gallery">
            <img class="img-fluid img-thumbnail" src="https://admin.gap-id.co.id/upload/gallery/<?=$gallery->image?>" style="width:20%" alt="">
          </a>
          <?}?>
          <!-- <h4><?= $gallery->productName ?></h4> -->
    </div>


								<!-- <a href="<?=base_url()?>../../../upload/promo/<?=$product->image?>" data-fancybox="gallery">
											<img src="<?=base_url()?>../../../upload/promo/<?=$product->image?>">
										</a> -->

								<!-- <?
								// if($profile->img!=''){
									?>
								<div class="get-image-profile"> 

										<a href="https://system.splcargo.co.id/upload/profile_web/<?=$profile->img;?>" data-fancybox="gallery">
											<img src="https://system.splcargo.co.id/upload/profile_web/<?=$profile->img;?>">
										</a>

								</div>
								<?
							// }
							?>
								<?
								// =(@$_GET['lang']!='eng') ? $profile->content : $profile->content_eng;
								?> -->

							</div>
						</div>
					</section>
				</div>
			</div>
		</div>
	</section>
</div>
<!-- <?
// }
?> -->
<style type="text/css">
	.tabs-sub-kategori {
		background-color: white;
		/*color: white;*/
		border-radius: 10px;
		/*padding: 10px;*/
		/*padding-top: 8px;*/
		/*padding-bottom: 8px;*/
		padding-right: 12px;
		padding-left: 12px;
		font-size: 16px;
		font-weight: 600;
		margin-left: 10px;
		margin-right: 10px;
	}


	.text-content-berita {
		overflow: hidden;
		text-overflow: ellipsis;
		display: -webkit-box;
		-webkit-line-clamp: 4; /* number of lines to show */
		line-clamp: 4; 
		-webkit-box-orient: vertical;
	}

	.img-berita{
		border-radius: 10px;
	}

	#garis {
		border-right-width: 1px;
		border-right-style: solid;
		border-right-color: black;
	}
</style>

<div class="col-lg-12">
	<div class="container" style="padding-top: 2%;">
		<div class="row" id="tab">

			<?php foreach ($this->db->query("SELECT * FROM tbl_subkategori where aktif='Y' order by id asc")->result() as $sub) {?>

				<?php if ($sub->id!='1') { ?>
					<div id="garis"></div>
				<?php } ?>
				
				<button class="tabs-sub-kategori tablinks" style="font-family: Poppins;font-style: normal;margin-left: auto;margin-right: auto;" onclick="getBerita(<?=$sub->id;?>,'<?=$sub->kategori;?>')"><?=$sub->kategori;?></button>

				


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



<div class="container" style="background-attachment: scroll; padding-top: 0px; background-color: white; padding-bottom: 0px ;">
	<div class="box journal-carousel carousel-product" id="carousel-1167006846" style="max-width: 1220px; background-attachment: scroll">

		<div class="box-heading" style="font-size: 25px;font-weight: 600;text-transform: none;margin-bottom:-2%">Harga Cryptocurrency </div>

		<div class="row" style="margin-top: 2%;" hidden>
            <!-- <div class="col-sm-6" style="text-align:left;">
                <a href="<?= base_url()?>" class="" style="text-decoration: underline;color: #FF9F48;font-size: 15px;">Refresh</a>
            </div> -->
            <div class="col-sm-12" style="text-align:right;">
            	<a href="<?= base_url().'DetailHarga'?>" class="" style="text-decoration: underline;color: #FF9F48;font-size: 15px;">Lihat Detail</a>
            </div>
        </div>

        <div class="row">
        	<div class="col-lg-12">
        		<div id="isi_table">
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

        					$isi = http_request("https://api.alternative.me/v1/ticker/?limit=10");

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
        						}else{
        							if ($key["symbol"]=='ADA'){
        								$ty = 'style="margin-left: -10px;" width="40" height="25"';
        							}else{
        								$ty = 'width="20" height="20"';
        							}
        							echo '<td><img src="'.base_url().'assets/logo/'.$key["symbol"].'.png" alt="" '.$ty.'/> '.$key["name"].'</td>';
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


<div style="margin-bottom: 300px;"></div>

<script>

	$(document).ready(function(){
        // dt();
        setInterval(function() { dt(); }, 10000);
    });

	function getBerita(id,kategori){

		base_url = '<?php echo base_url();?>';

		if (id=='9') {

			window.location= base_url+kategori;

		}else if (id=='10') {

			window.location= base_url+'teknologi';

		}else if (id=='11') {

			window.location= base_url+'investasi';

		}else{

			window.location= base_url+'hotnews';
      	// return false;
      }

  }



  base_url = '<?php echo base_url();?>';
  function dt(){
  	var id = '1';
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
</script>




<style type="text/css">
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

    .text-content-berita {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 4;
        /* number of lines to show */
        line-clamp: 4;
        -webkit-box-orient: vertical;
    }

    .img-berita {
        border-radius: 10px;
    }

    #garis {
        border-right-width: 1px;
        border-right-style: solid;
        border-right-color: black;
    }

    @media only screen and (max-width: 760px) {
        .tabs-sub-kategori {
            font-size: 13px !important;
            font-weight: 600;
        }
    }
</style>

<div class="col-lg-12" hidden>
    <div class="container" style="padding-top: 2%;">
        <div class="row" id="tab">

            <?php foreach ($this->db->query("SELECT * FROM tbl_subkategori where aktif='Y' order by id asc")->result() as $sub) { ?>

                <?php if ($sub->id != '1') { ?>
                    <div id="garis"></div>
                <?php } ?>

                <button class="tabs-sub-kategori tablinks" style="font-family: Noto Sans !important;font-style: normal;margin-left: auto;margin-right: auto;" onclick="getBerita(<?= $sub->id; ?>,'<?= $sub->kategori; ?>')"><?= $sub->kategori; ?></button>




            <?php } ?>
        </div>
    </div>
</div>

<!-- <div class="col-lg-12">
    <div class="container" style="padding-top: 2%;">
        <div class="runtext-container">
            <div class="main-runtext">
                <marquee direction="" onmouseover="this.stop();" onmouseout="this.start();">

                    <div class="holder">
                        <?php foreach ($this->db->query("SELECT * FROM tbl_text_runnning order by id asc ")->result() as $garis) { ?>
                            <div class="text-container">
                                &nbsp; &nbsp; <a data-fancybox-group="gallery" class="fancybox"><?= $garis->text_running; ?></a>
                            </div>
                        <?php } ?>

                    </div>

                </marquee>
            </div>
        </div>
    </div>
</div> -->

<!--<div class="container" style="margin-top: 3%;">-->
<!--	<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" >-->
<!--		<div class="carousel-inner">-->
<!--			<div class="carousel-item active">-->
<!--				<img src="<?= base_url() ?>assets/image/background_hot_news.png" class="d-block w-100" alt="..." style="padding: 40px;">-->
<!--			</div>-->
<!--		</div>-->
<!--	</div>-->
<!--</div>-->




<!-- Harga Cryptopcurency -->
<div id="bottom-modules" style="margin-bottom: 195px;  margin-top: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-12">
                <div class="blocks" id="isiContent">
                    <?php
                    // foreach ($this->db->query("SELECT * FROM tbl_posts where idKategori='2' order by id desc limit 8")->result() as $berita) {
                    if (($berita->num_rows()) > 0) {
                        foreach ($berita->result() as $p) {
                            $waktu_awal3        = strtotime($p->created_date);
                            $waktu_akhir3       = strtotime(date("Y-m-d H:i:s")); // bisa juga waktu sekarang now()

                            //menghitung selisih dengan hasil detik
                            $diff3    = $waktu_akhir3 - $waktu_awal3;

                            //membagi detik menjadi jam
                            $jam3    = floor($diff3 / (60 * 60));
                            $ket2    = strip_tags($p->content);
                            $ket     = substr($ket2, 0, 400);
                    ?>


                            <div class="row tabcontent tabcontent_<?= $p->subKategori; ?>" style="margin-bottom: 5%;" id="<?= $p->subKategori; ?>">
                                <div class="col-4">
                                    <a href="<?= base_url() . 'news/detail/' . $p->slug ?>" class="linkk">
                                        <i><img class="img-berita img-fluid" src="https://admin103.digivestasi.com/upload/posts/thumbnail/<?= $p->image ?>" width="210" height="auto" alt="" title="" /></i>
                                    </a>
                                </div>
                                <div class="col-8 text-berita">
                                    <a href="<?= base_url() . 'news/detail/' . $p->slug ?>" style="color: black;text-decoration: none;">
                                        <p style="font-size: 18px;font-style: bold !important;font-weight: 600;">
                                            <?= substr($p->Title, 0, 100) ?></p>
                                        <p style="color: grey;font-size: 12px;">
                                            <?= date('H:i, d M Y', strtotime($p->created_date)); ?></p>
                                        <div class="text-content-berita">
                                            <?= $ket; ?>
                                        </div>
                                    </a>

                                </div>

                            </div>


                    <?php }
                    } ?>
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-12">

                <div id=sidebar>

                    <div class="box-heading" style="font-size: 24px;font-weight: 600;text-transform: none;margin-bottom: 15px;padding-top: 5px;margin-top: 0px;">
                        Tag Populer</div>

                    <div class="blocks">

                        <?php
                        foreach ($tag as $tg) {

                        ?>
                            <div class="cms-block xs-100 sm-50 md-50 lg-25 xl-26">
                                <span class="block-content" style="">
                                    <div class="editor-content" style="text-align: left">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <a onclick="getBerita(<?= $tg->id; ?>,'<?= $tg->tag_name ?>')" style="color: #1F7793 ;text-decoration: none; cursor: pointer;">
                                                    <p style="font-size: 16px;font-style: bold !important;">
                                                        #<?= $tg->tag_name; ?></p>
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
                            <div class="box-heading" style="font-size: 24px;font-weight: 600;text-transform: none;margin-bottom: 10px">Berita
                                Populer</div>

                            <?php
                            // foreach ($news->result() as $news ) { 


                            foreach ($berita_populer as $berita) {
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
                                                <div class="col-4">
                                                    <a href="<?= base_url() . 'news/detail/' . $berita->slug ?>" style="color: black;text-decoration: none;">
                                                        <i><img style="top: -1px;border-radius: 10px;" src="https://admin103.digivestasi.com/upload/posts/thumbnail/<?= $berita->image ?>" height="auto" class="img-fluid" alt="" title="" /></i>
                                                    </a>
                                                </div>
                                                <div class="col-8">
                                                    <a href="<?= base_url() . 'news/detail/' . $berita->slug ?>" style="color: black;text-decoration: none;">
                                                        <p style="font-size: 16px;font-style: bold !important;">
                                                            <?= substr($berita->Title, 0, 50) ?></p>
                                                        <a style="color: grey;font-size: 12px;"><?= date('H:i, d M Y', strtotime($berita->created_date)); ?></a>
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
                        <img src="<?= base_url() ?>assets/image/gap/digihitam.png" width="250" height="auto" />
                        <p class="textdigi">
                            <?= (@$_GET['lang'] != 'eng') ?  'Digivestasi adalah sebuah media informasi seputar aset digital terkait mata uang kripto dan tekhnologi blockchain.' :  ' a'; ?>
                        </p>

                        <div style="margin-top: 10px;text-align: center;">
                            <?php foreach ($sosmed->result() as $sos) {
                                if ($sos->name == 'Instagram') { ?>
                                    <a href="<?= $sos->link ?>"><img src="<?= base_url() ?>assets/image/ig_icon.png" style="width: 17px;height: auto;margin-top: -10px;margin-right: 5px;"></a>
                                <?php } else if ($sos->name == 'Twitter') { ?>
                                    <a href="<?= $sos->link ?>"><img src="<?= base_url() ?>assets/image/tw_icon.png" style="width: 17px;height: auto;margin-top: -10px;margin-right: 5px;"></a>
                                <?php } else if ($sos->name == 'Youtube') { ?>
                                    <a href="<?= $sos->link ?>"><img src="<?= base_url() ?>assets/image/yt_icon.png" style="width: 17px;height: auto;margin-top: -10px;margin-right: 5px;"></a>
                                <?php } else if ($sos->name == "Facebook") { ?>
                                    <a href="<?= $sos->link ?>"><img src="<?= base_url() ?>assets/image/fb_icon.png" style="width: 17px;height: auto;margin-top: -10px;margin-right: 5px;"></a>
                                <?php } else if ($sos->name == "Tiktok") { ?>
                                    <a href="<?= $sos->link ?>"><img src="<?= base_url() ?>assets/image/tik_icon.png" style="width: 15px;height: auto;margin-top: -10px;margin-right: 5px;"></a>
                            <?php }
                            } ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<center>
    <div class="col-md-12" style="" data-aos="fade-right">

        <?php echo $pagination; ?>
    </div>
</center>


<!-- <div style="margin-bottom: 300px;"></div> -->

<script>
    // function getBerita(tabName) {
    // 	var i, tabcontent,tablinks;
    // 	tabcontent = document.getElementsByClassName("tabcontent");
    //  	// console.log(tabcontent);
    //  	for (i = 0; i < tabcontent.length; i++) {
    //  		if($('.tabcontent_'+tabName).prop('id') == tabName) {
    //  			tabcontent[i].style.display = "";
    //  			// document.getElementById(tabName).style.display = "";
    //  		}else{
    //  			tabcontent[i].style.display = "none";
    //  			// document.getElementById(tabName).style.display = "none";
    //  		}
    //  	}
    // if (tabcontent[i]==tabName) {

    // }else{

    // }

    // }
    //   	tablinks = document.getElementsByClassName("tablinks");
    //   	for (i = 0; i < tablinks.length; i++) {
    //   		if (tablinks) {
    // tablinks[i].className = tablinks[i].className.replace(" ", " active");
    //   		}else{
    //   			tablinks[i].className = tablinks[i].className.replace(" active", "");
    //   		}

    //   	}
    // console.log(tablinks);


    // evt.currentTarget.className += " active";
    // }

    function getBerita(id, kategori) {

        base_url = '<?php echo base_url(); ?>';

        // if (id=='9') {

        // 	window.location= base_url+kategori;

        // }else if (id=='10') {

        // 	window.location= base_url+'teknologi';

        // }else if (id=='11') {

        // 	window.location= base_url+'investasi';

        // }else{


        var idKategori = '2';


        $.ajax({

            type: "POST",

            url: base_url + "GetBerita",

            data: {
                'id': id,
                'idKategori': idKategori
            },

            success: function(html) {

                // $('.success').fadeIn(1000);

                $("#isiContent").html(html);



                // setInterval(function(){ window.location=base_url+'thank_you'; }, 3000);

            },

            error: function() {

                // $('.error').fadeIn(1000);

                // $(".btn").attr("disabled", false);

            }

        });
        // return false;
        // }




    }

    function getTag(id, name) {

        base_url = '<?php echo base_url(); ?>';

        $.ajax({

            type: "GET",

            url: base_url + "News",

            data: {
                'id': id,
                'nama': name
            },

            success: function(html) {

                window.location = base_url + 'news/tag/?id=' + id;

            },

            error: function() {


            }

        });

    }
</script>
<!-- Harga Cryptopcurency -->
<div id="bottom-modules" style="margin-bottom: 195px; margin-top: 20px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">


                <div class="journal2_cms_blocks" style="background-attachment: scroll; padding-top: 0px; background-color: white; padding-bottom: 0px;">
                    <div id="journal-cms-block-1491219349" class="box cms-blocks  ">
                        <!-- <div class="box-heading"></div> -->
                        <br>

                        <div class="blocks" id="isiContent">
                            <?php
                            // foreach ($this->db->query("SELECT * FROM tbl_posts where idKategori='2' order by id desc limit 8")->result() as $berita) {
                            if (($berita->num_rows()) > 0) {
                                foreach ($berita->result() as $p) {
                                    $ket2    = strip_tags($p->content);
                                    $ket     = substr($ket2, 0, 200);
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
                    <script>
                        Journal.equalHeight($('#journal-cms-block-1491219349 .cms-block'), '.block-content');
                    </script>

                </div>
            </div>
            <div class="col-sm-2" hidden>
                <div class="box-heading"></div>
            </div>
            <div class="col-sm-4">

                <div id=sidebar>

                    <div class="tag mt-4 p-3">
                        <div class="header-title my-3">
                            <h2>Tag Terpopuler</h2>
                        </div>
                        <?php
                        foreach ($tag as $tg) {

                        ?>
                            <div class="tag-name">
                                <a onclick="getBerita(<?= $tg->id; ?>,'<?= $tg->tag_name ?>')">#<?= $tg->tag_name; ?></a>
                            </div>
                        <?php } ?>

                    </div>

                    <div class="blocks">
                        <div class="cms-block xs-100 sm-50 md-50 lg-25 xl-26">
                            <div class="box-heading" style="font-size: 24px;font-weight: 600;text-transform: none; margin-bottom: 10px;">
                                Berita Populer</div>

                            <?php
                            // foreach ($news->result() as $news ) { 


                            foreach ($berita_populer as $berita) {
                            ?>
                                <div class="cms-block xs-100 sm-50 md-50 lg-25 xl-26">
                                    <span class="block-content" style="">
                                        <div class="editor-content" style="text-align: left">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <a href="<?= base_url() . 'news/detail/' . $berita->slug ?>" style="color: black;text-decoration: none;">
                                                        <i><img style="top: -1px;border-radius: 10px;" src="https://admin103.digivestasi.com/upload/posts/thumbnail/<?= $berita->image ?>" height="auto" alt="" class="img-fluid" title="" /></i>
                                                    </a>
                                                </div>
                                                <div class="col-sm-8">
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
<!--  -->
<script>
    // $(document).ready(function(){
    //     getIsiTag('<?= $_GET['id'] ?>');

    // });

    function getBerita(id, kategori) {

        base_url = '<?php echo base_url(); ?>';

        $.ajax({

            type: "GET",

            url: base_url + "Hotnews",

            data: {
                'id': id,
                'kategori': kategori
            },

            success: function(html) {

                window.location = base_url + 'hotnews/list/?id=' + id;

            },

            error: function() {


            }

        });

    }
</script>
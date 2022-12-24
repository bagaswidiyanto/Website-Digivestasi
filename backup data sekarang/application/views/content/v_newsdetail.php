<style type="text/css">
.imgcenter {
    display: block;
    margin-left: auto;
    margin-right: auto;
    /*width: 50%;*/
}

.img-berita {
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
    -webkit-line-clamp: 4;
    /* number of lines to show */
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

.jeg_share_stats>div {
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

.jeg_share_stats>div:last-child {
    padding-right: 15px;
}

.jeg_share_stats>div {
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

.jeg_share_stats>div:last-child::after {
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

.jeg_share_button a.expanded>span {
    display: inline;
    position: relative;
}

.jeg_share_button a>span {
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
    background: rgba(0, 0, 0, .15);
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

<div class="container px-lg-5">
    <ul class="breadcrumb text-start">
        <li><a href="<?= base_url(); ?>">Beranda</a></li>
        <li><a href="<?= base_url(); ?>news">News</a></li>
        <li>Detail News</li>
    </ul>
</div>

<div class="container-xxl single-news">
    <div class="container px-lg-5">
        <div class="row">
            <div class="col-lg-8">
                <?php
                $id = $this->uri->segment('3');
                $news = $this->db->query("SELECT * FROM tbl_posts LEFT JOIN tbl_subkategori ON tbl_subkategori.id=tbl_posts.subKategori where slug = '" . $id . "' ")->row();
                $loc = '/index.php/news/detail/' . $id;
                $viewers = $this->db->query("SELECT count(id) as lihat FROM tbl_posts_counter where `location` = '" . $loc . "' ")->row();
                $tgl = date('d F Y', strtotime($news->created_date));
                ?>
                <div class="box-single pb-5">
                    <div class="entry-title">
                        <h2><?= $news->Title; ?></h2>
                    </div>
                    <div class="entry-sub">
                        <p><?= $news->kategori; ?> <span>- Diposting pada <?= $tgl; ?> Waktu baca 5 menit</span></p>
                    </div>
                    <div class="entry-social">
                        <div class="d-flex pt-2">
                            <?php foreach ($sosmed->result() as $sos) { ?>
                            <?php if ($sos->name == 'Instagram') { ?>
                            <a class="btn btn-social me-2" href="<?= $sos->link ?>" target="_blank"><i
                                    class="fab fa-instagram"></i></a>
                            <?php } else if ($sos->name == 'Twitter') { ?>
                            <a class="btn btn-social me-2" href="<?= $sos->link ?>" target="_blank"><i
                                    class="fab fa-twitter"></i></a>
                            <?php } else if ($sos->name == 'Youtube') { ?>
                            <a class="btn btn-social me-2" href="<?= $sos->link ?>" target="_blank"><i
                                    class="fab fa-youtube"></i></a>
                            <?php } else if ($sos->name == "Facebook") { ?>
                            <a class="btn btn-social me-2" href="<?= $sos->link ?>" target="_blank"><i
                                    class="fab fa-facebook-f"></i></a>
                            <?php } else if ($sos->name == "Tiktok") { ?>
                            <a class="btn btn-social me-2" href="<?= $sos->link ?>" target="_blank"><i
                                    class="fab fa-tiktok"></i></a>
                            <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="entry-image my-4">
                        <img src="https://admin103.digivestasi.com/upload/posts/<?= $news->image ?>" class="img-fluid"
                            alt="">
                    </div>
                    <div class="entry-desk">
                        <?= $news->content; ?>
                    </div>
                </div>
                <div class="next-article py-5 position-relative px-4">
                    <div class="row align-items-center">
                        <div class="col-lg-10">
                            <?php $nextNews = $this->db->query("SELECT * FROM tbl_posts order by id desc limit 2,1")->row() ?>
                            <h3>Artikel Selanjutnya</h3>
                            <p><?= $nextNews->Title; ?></p>
                        </div>
                        <div class="col-lg-2 text-center">
                            <a href="<?= base_url() . 'news/detail/' . $nextNews->slug ?>">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="tag-single pt-5">
                    <h2>TAG :</h2>
                    <div class="mt-3">
                        <?php foreach ($this->db->query("SELECT a.* ,count(b.id) as jml FROM tbl_post_detail b left join tbl_tag a on b.tagID=a.id group by b.tagID order by jml desc limit 5 ")->result() as $tg) { ?>
                        <a onclick="getTag(<?= $tg->id; ?>,'<?= $tag->tag_name ?>')"
                            class="px-3 py-1 text-center"><?= $tg->tag_name; ?></a>
                        <?php } ?>
                    </div>
                </div>
                <div class="share-news py-5">
                    <div class="row">
                        <div class="col-lg-9">
                            <div class="d-flex">
                                <?php
                                $jumlahShare = $news->fb_share + $news->twitter_share + $news->wa_share + $news->telegram_share;
                                ?>
                                <a onclick="is_share(<?= $news->id; ?>,'facebook')"
                                    href="https://www.facebook.com/sharer.php?u=<?= base_url() . 'news/detail/' . $news->slug ?>"
                                    target="_blank" rel="nofollow" class="share" style="background: #1877F2;">
                                    <div class="d-flex align-items-center">
                                        <i class="fab fa-facebook"></i>
                                        <p>Share</p>
                                    </div>
                                </a>
                                <a onclick="is_share(<?= $news->id; ?>,'twitter')"
                                    href="https://twitter.com/intent/tweet?text=<?= $news->Title . ' ' . base_url() . 'news/detail/' . $news->slug ?>"
                                    target="_blank" rel="nofollow" class="share" style="background: #1D9BF0;">
                                    <div class="d-flex align-items-center">
                                        <i class="fab fa-twitter"></i>
                                        <p>Share</p>
                                    </div>
                                </a>
                                <a onclick="is_share(<?= $news->id; ?>,'whatsapp')"
                                    href="//api.whatsapp.com/send?text=<?= $news->Title . ' ' . base_url() . 'news/detail/' . $news->slug ?>"
                                    target="_blank" rel="nofollow" data-action="share/whatsapp/share" class="share"
                                    style="background: #2EB943;">
                                    <div class="d-flex align-items-center">
                                        <i class="fab fa-whatsapp"></i>
                                        <p>Share</p>
                                    </div>
                                </a>
                                <div class="total text-center me-4">
                                    <h5><?= $jumlahShare ?></h5>
                                    <p>SHARES</p>
                                </div>
                                <div class="slash position-relative">
                                </div>
                                <div class="view">
                                    <h5><?= $viewers->lihat ?></h5>
                                    <p>VIEW</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-heading"
                    style="font-size: 25px;font-weight: 600;text-transform: none;margin-bottom:-2%">Diskusi tentang
                    postingan ini </div>

                <br>
                <div id="fb-root"></div>
                <!-- <script asy defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v13.0" nonce="Bv6xlRWu"></script> -->

                <div class="fb-comments" data-href="https://digivestasi.com/news/detail/<?= $news->id ?>" data-width=""
                    data-numposts="5"></div>

                <div class="py-5">
                    <div class="header-title">
                        <h2>Berita Lainnya</h2>
                    </div>
                    <div class="more-news mt-3">
                        <div class="row g-4">
                            <?php foreach ($this->db->query("SELECT * FROM tbl_posts LEFT JOIN tbl_subkategori ON tbl_subkategori.id=tbl_posts.subKategori order by tbl_posts.id desc limit 6")->result() as $banner2) { ?>
                            <div class="col-4">
                                <a href="<?= base_url() . 'news/detail/' . $banner2->slug ?>">
                                    <div class="box-news">
                                        <div class="img">
                                            <img src="https://admin103.digivestasi.com/upload/posts/<?= $banner2->image ?>"
                                                class="img-fluid" alt="">
                                        </div>
                                        <div class="category mt-2">
                                            <p><?= $banner2->kategori; ?></p>
                                        </div>
                                        <div class="title my-1">
                                            <p><?= $banner2->Title ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">

                <div class="box-advert text-center bg-grey">
                    <?php $ads = $this->db->query("SELECT * FROM tbl_iklan")->row(); ?>
                    <?php if ($ads->image != '') { ?>
                    <img src="https://admin103.digivestasi.com/upload/iklan/<?= $ads->image; ?>" class="img-fluid w-100"
                        style="height: 130px;" alt="">
                    <?php } else { ?>
                    <!-- Gambar Iklan -->
                    <h1 class="text-white">IKLAN</h1>
                    <?php } ?>
                </div>

                <div class="box-advert text-center bg-grey mt-4">
                    <?php $ads = $this->db->query("SELECT * FROM tbl_iklan")->row(); ?>
                    <?php if ($ads->image != '') { ?>
                    <img src="https://admin103.digivestasi.com/upload/iklan/<?= $ads->image; ?>" class="img-fluid w-100"
                        style="height: 130px;" alt="">
                    <?php } else { ?>
                    <!-- Gambar Iklan -->
                    <h1 class="text-white">IKLAN</h1>
                    <?php } ?>
                </div>


                <div class="headline">
                    <div class="header-title ">
                        <h2>Berita Terpopuler</h2>
                    </div>
                    <div class="row">

                        <div class="col-lg-12 mt-4 mt-lg-0">
                            <div class="row g-3">

                                <?php foreach ($this->db->query("SELECT * FROM tbl_posts order by id desc limit 4")->result() as $banner2) { ?>
                                <div class="col-12">
                                    <a href="<?= base_url() . 'news/detail/' . $banner2->slug ?>">
                                        <div class="side-content-list">
                                            <div class="row">
                                                <div class="col-4">
                                                    <div class="img">
                                                        <img src="https://admin103.digivestasi.com/upload/posts/<?= $banner2->image ?>"
                                                            class="img-fluid" alt="">
                                                    </div>
                                                </div>
                                                <div class="col-8">
                                                    <div class="content">
                                                        <div class="title">
                                                            <p><?= $banner2->Title ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tag mt-4 p-3">
                    <div class="header-title my-3">
                        <h2>Tag Terpopuler</h2>
                    </div>
                    <?php foreach ($this->db->query("SELECT * FROM tbl_subkategori where aktif='Y' order by id asc")->result() as $sub) { ?>
                    <div class="tag-name">
                        <a onclick="getTag(<?= $sub->id; ?>,'<?= $sub->tag_name ?>')">#<?= $sub->kategori; ?></a>
                    </div>
                    <?php } ?>

                </div>
                <div class="headline">
                    <div class="header-title ">
                        <h2>Berita Untukmu</h2>
                    </div>
                    <div class="row g-4">

                        <?php foreach ($this->db->query("SELECT * FROM tbl_posts LEFT JOIN tbl_subkategori ON tbl_subkategori.id=tbl_posts.subKategori order by tbl_posts.id desc limit 4")->result() as $banner2) { ?>
                        <div class="col-lg-12">
                            <div class="side-content h-100">
                                <a href="<?= base_url() . 'news/detail/' . $banner2->slug ?>">
                                    <div class="single-content position-relative">
                                        <div class="img">
                                            <img src="https://admin103.digivestasi.com/upload/posts/<?= $banner2->image ?>"
                                                class="img-fluid" alt="">
                                        </div>
                                        <div class="content">
                                            <div class="category">
                                                <p><?= $banner2->kategori; ?></p>
                                            </div>
                                            <div class="title">
                                                <p><?= $banner2->Title ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
// function getBerita(id,kategori){

//   base_url = '<?php echo base_url(); ?>';

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

function is_share(id, sosmed) {
    base_url = '<?php echo base_url(); ?>';
    $.ajax({
        type: "POST",
        url: base_url + "ShareSosmed",
        dataType: "JSON",
        data: {
            'id': id,
            'sosmed': sosmed
        },
        success: function(response) {
            $('#count_' + sosmed).html(response.jumlah)
        },
        error: function() {}
    });

}
</script>

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v13.0"
    nonce="Bv6xlRWu"></script>
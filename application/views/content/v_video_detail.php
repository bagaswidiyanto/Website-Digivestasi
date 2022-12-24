<div class="container-xxl video">
    <div class="container py-5 px-lg-5">
        <div class="row g-4">
            <?php foreach ($this->db->query("SELECT * FROM tbl_video_yt ORDER BY id DESC")->result() as $video) { ?>
                <div class="col-lg-4">
                    <div class="box-video position-relative">
                        <div class="ratio ratio-16x9">
                            <?= $video->video; ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
<div class="container-fluid banner px-0">
    <img src="https://admin103.digivestasi.com/upload/navigation/<?= $img_about->image; ?>" class="img-fluid w-100"
        alt="">
</div>
<div class="container px-lg-5">
    <ul class="breadcrumb text-start">
        <li><a href="<?= base_url(); ?>">Beranda</a></li>
        <li>About Us</li>
    </ul>
</div>

<style>
.about-us p {
    text-align: justify;
}
</style>

<div class="container-xxl about-us">
    <div class="container px-lg-5 py-5">
        <div class="">
            <?= (@$_GET['lang'] != 'eng') ?  $contactus->description_ina :  $contactus->description_eng ?>
        </div>
    </div>
</div>
<?
date_default_timezone_set('ASIA/JAKARTA');
$curr_time     = date('H:i:s');
?>

<div class="container-fluid bg-black text-light footer wow fadeIn" data-wow-delay="0.1s">
    <div class="container px-lg-5 py-3">
        <div class="row g-5 justify-content-between align-items-center border-bottom pb-3">
            <div class="col-xl-3 col-md-6 col-sm-6">
                <div class="d-flex pt-2">
                    <?php foreach ($sosmed->result() as $sos) { ?>
                    <?php if ($sos->name == 'Instagram') { ?>
                    <a class="btn btn-social text-white me-2" href="<?= $sos->link ?>" target="_blank"><i
                            class="fab fa-instagram"></i></a>
                    <?php } else if ($sos->name == 'Twitter') { ?>
                    <a class="btn btn-social text-white me-2" href="<?= $sos->link ?>" target="_blank"><i
                            class="fab fa-twitter"></i></a>
                    <?php } else if ($sos->name == 'Youtube') { ?>
                    <a class="btn btn-social text-white me-2" href="<?= $sos->link ?>" target="_blank"><i
                            class="fab fa-youtube"></i></a>
                    <?php } else if ($sos->name == "Facebook") { ?>
                    <a class="btn btn-social text-white me-2" href="<?= $sos->link ?>" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>
                    <?php } else if ($sos->name == "Tiktok") { ?>
                    <a class="btn btn-social text-white me-2" href="<?= $sos->link ?>" target="_blank"><i
                            class="fab fa-tiktok"></i></a>
                    <?php } ?>
                    <?php } ?>
                </div>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-6 text-end">
                <div class="text-center">
                    <h5 class="text-white">Download Aplikasi Digivestasi</h5>
                    <div class="row digi mt-3 ">
                        <div class="col-6">
                            <a href="https://play.google.com/store/apps/details?id=id.co.digitalindo.digivestasi"
                                target="_blank">
                                <img src="assets/imagenew/gp.png" class="img-fluid" alt="">
                            </a>
                        </div>
                        <div class="col-6">
                            <a href="#">
                                <img src="assets/imagenew/ap.png" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-between align-items-center pt-3">
            <div class="col-lg-3 col-md-6 col-sm-6 px-0">
                <div class="tautan">
                    <a href="<?= base_url() ?>" class="text-white me-3">Beranda</a>
                    <a href="<?= base_url() ?>about" class="text-white me-3">Tentang Kami</a>
                    <a href="<?= base_url(); ?>contact" class="text-white me-3">Kontak</a>
                </div>
                <div class="copyright mt-4 d-none d-sm-block">
                    <p>© 2022 - <?= date("Y") ?> <a style="color:white;" href="https://www.digivestasi.com">Digivestasi</a>
                        . All rights reserved.</p>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 px-0">
                <div class="text-end img-f">
                    <img src="assets/imagenew/logo_header.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <div class="scroll-top"></div> -->
<!-- <script type="text/javascript" src="<?= base_url() ?>assets/lib/swipebox/source/jquery.swipebox.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/lib/hover-intent/jquery.hoverIntent.min.js?j2v=2.6.3">
</script>
<script type="text/javascript" src="<?= base_url() ?>assets/lib/pnotify/jquery.pnotify.min.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/lib/autocomplete2/jquery.autocomplete2.min.js?j2v=2.6.3">
</script>
<script type="text/javascript" src="<?= base_url() ?>assets/lib/respond/respond.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/lib/sticky/jquery.sticky.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/init.js?j2v=2.6.3"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/js/style.js?j2v=2.6.3"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> -->
<script type="text/javascript">
// $('html, body').delay(1000).animate({
//    scrollTop: $("#myDiv").offset().top
// }, 1000);


//==========================================================CHAT WHATSAPP=============================================================================//

// $(document).ready(function() {
//         setTimeout(function() {
//           $("#whatsapp_chat").trigger('click');
//         }, 3000);
//     });

function chatWhatsApp() {
    var cek_class = document.getElementById('whatsapp-chat-popup');

    if (cek_class.classList.contains('bounceOutDown')) {
        cek_class.classList.remove("bounceOutDown");
        cek_class.classList.add("bounceInUp");
        cek_class.style.display = "block";
    } else {
        cek_class.classList.remove("bounceInUp");
        cek_class.classList.add("bounceOutDown");

    }

}

function chatCustomer(id) {

    var list_chat = document.getElementById("list-chat-section");
    var chat = document.getElementById('customer_chat_' + id);

    if (id != 0 && id != '') {
        list_chat.style.display = "none";
        chat.style.display = "block";
    }
}

function closechatWhatsApp() {
    var cek_class = document.getElementById('whatsapp-chat-popup');

    if (cek_class.classList.contains('bounceInUp')) {
        cek_class.classList.remove("bounceInUp");
        cek_class.classList.add("bounceOutDown");
    }
}


function backListChat(id) {
    var list_chat = document.getElementById("list-chat-section");
    var chat = document.getElementById('customer_chat_' + id);
    if (id != 0 && id != '') {
        chat.style.display = "none";
        list_chat.style.display = "block";
        $("#chat_wa_" + id).val('');
    }
}

function textChatWhatsapp(id) {
    var link_wa = 'https://web.whatsapp.com/send?';
    if (id != 0 && id != '') {
        var telp = $("#telp_wa_" + id).val();
        var chat = $("#chat_wa_" + id).val();
        var link = 'https://web.whatsapp.com/send?phone=62' + telp + '&text=' + chat;

        var btn = document.getElementById("btn_wa_" + id);
        btn.setAttribute("href", link);
    }
}
</script>



</body>

</html>
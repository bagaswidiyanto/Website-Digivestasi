<div class="container-xxl contact">
    <div class="container py-5 px-lg-5">

        <div id="notification"></div>
        <div class="breadcrumb">
            <a href="<?= base_url() ?>" style="color: #FF8700;" class="me-2">Home</a>
            &raquo; <a href="<?= base_url() ?>contact" class="ms-2">Contact Us</a>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="header-title mb-4">
                    <h1 class="fw-bold">Contact Us</h1>
                </div>
                <div class="address">
                    <div class="header-content mb-3">
                        <h3 class="fw-bold">Address:</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-1 mb-10">
                            <img src="<?= base_url(); ?>assets/imagenew/map-pin.svg" class="img-fluid me-3" alt="">
                        </div>
                        <div class="col-lg-11 mb-10">
                            <p><?= $contactus->address ?></p>
                        </div>
                        <div class="col-lg-1 mb-10">
                            <img src="<?= base_url(); ?>assets/imagenew/mail.svg" class="img-fluid me-3" alt="">
                        </div>
                        <div class="col-lg-11 mb-10">
                            <div class="mail">
                                <p>Email: <?= $contactus->email ?></p>
                                <p>Website: <?= $contactus->website ?></p>
                            </div>
                        </div>
                        <div class="col-lg-1 mb-10">
                        </div>
                        <div class="col-lg-11 mb-10">
                            <div class="office">
                                <p>Office:</p>
                                <p><?= $contactus->phoneOffice ?></p>
                            </div>
                        </div>
                        <div class="col-lg-1 mb-10">
                        </div>
                        <div class="col-lg-11 mb-10">
                            <div class="phone">
                                <p>Phone:</p>
                                <p><?= $contactus->phone ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <style>
                .contact .mb-10 {
                    margin-bottom: 20px;
                }

                .form {
                    background: #131313;
                    border-radius: 10px;
                    padding: 35px;
                    box-shadow: 12px 4px 28px 5px rgba(0, 0, 0, 0.25);
                }

                .form label {
                    color: #fff;
                    margin-bottom: 10px;
                }

                .form input {
                    background-color: #D7CDCD;
                }

                .form .submit {
                    background: #FF8700;
                    padding: 7px 20px;
                    border-radius: 10px;
                    border: none;
                    text-transform: uppercase;
                }

                .maps {
                    background: #FF8700;
                }
                </style>
                <div class="form">
                    <form action="<?= base_url() ?>contact" method="post">
                        <div class="mb-3">
                            <label>First Name :</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>E-Mail Address :</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label>Enquiry :</label>
                            <textarea name="enquiry" class="form-control" rows="3"></textarea>
                        </div>
                        <input type="submit" class="submit fw-bold" value="Send Message">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid maps">
    <div class="container-xxl py-5 px-lg-5">
        <iframe allowfullscreen="" frameborder="0" height="250"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.1707944844875!2d107.02375830049128!3d-6.218606414134724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTMnMDcuMCJTIDEwN8KwMDEnMjcuOSJF!5e0!3m2!1sid!2sid!4v1619667830373!5m2!1sid!2sid"
            width="100%" style="border:0" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
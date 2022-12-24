<div class="container-fluid crypto p-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="container px-lg-5">

        <div class="row my-4">
            <div class="col-lg-12">
                <ul class="nav nav-tabs border-0" id="myTab">
                    <li class="nav-item">
                        <a href="#crypto-4" class="nav-link active" data-bs-toggle="tab">CRYPTO</a>
                    </li>
                    <li class="nav-item">
                        <a href="#crypto-1" class="nav-link" data-bs-toggle="tab">EUR</a>
                    </li>
                    <li class="nav-item">
                        <a href="#crypto-2" class="nav-link" data-bs-toggle="tab">ASIA</a>
                    </li>
                    <li class="nav-item">
                        <a href="#crypto-3" class="nav-link" data-bs-toggle="tab">ASIA FX</a>
                    </li>
                    <li class="nav-item">
                        <a href="#crypto-5" class="nav-link" data-bs-toggle="tab">US</a>
                    </li>
                    <li class="nav-item">
                        <a href="#crypto-6" class="nav-link" data-bs-toggle="tab">PRE-MKT</a>
                    </li>
                    <li class="nav-item">
                        <a href="#crypto-7" class="nav-link" data-bs-toggle="tab">OIL</a>
                    </li>
                    <li class="nav-item">
                        <a href="#crypto-8" class="nav-link" data-bs-toggle="tab">BONDS</a>
                    </li>
                    <li class="nav-item">
                        <a href="#crypto-9" class="nav-link" data-bs-toggle="tab">GOLD</a>
                    </li>
                    <li class="nav-item">
                        <a href="#crypto-10" class="nav-link" data-bs-toggle="tab">EUR FX</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tab-content pb-4">
            <div class="tab-pane show active" id="crypto-4">
                <div class="header-title mb-4">
                    <h2>Harga CRYPTO</h2>
                </div>
                <div class="row g-4">
                    <?php
                    function formatDollars4($dollars)
                    {
                        $formatted = "$" . number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "", $dollars)), 2);
                        return $dollars < 0 ? "({$formatted})" : "{$formatted}";
                    }

                    function http_request4($url)
                    {
                        // persiapkan curl
                        $ch = curl_init();

                        // set url 
                        curl_setopt($ch, CURLOPT_URL, $url);

                        // set user agent    
                        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

                        // return the transfer as a string 
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

                        // $output contains the output string 
                        $output = curl_exec($ch);

                        // tutup curl 
                        curl_close($ch);

                        // mengembalikan hasil curl
                        return $output;
                    }

                    $isi4 = http_request("https://api.alternative.me/v1/ticker/?limit=5");
                    $isi4 = json_decode($isi4, TRUE);
                    $no = 1;
                    foreach ($isi4 as $key) {
                    ?>
                    <div class="col-lg col-md-4 col-6">
                        <div class="box-crypto p-3">
                            <div class="title d-fl">
                                <?php if ($key["symbol"] == "BTC") { ?>
                                <img src="<?= base_url(); ?>assets/imagenew/btc.png" class="img-fluid" alt=""> <span
                                    class="fw-bold"><?= $key["name"]; ?> (<?= $key["symbol"]; ?>)</span>
                                <?php } else if ($key["symbol"] == "ETH") { ?>
                                <img src="<?= base_url(); ?>assets/imagenew/eth.png" class="img-fluid" alt=""> <span
                                    class="fw-bold"><?= $key["name"]; ?> (<?= $key["symbol"]; ?>)</span>
                                <?php } else if ($key["symbol"] == "USDT") { ?>
                                <img src="<?= base_url(); ?>assets/imagenew/usdt.png" class="img-fluid" alt=""> <span
                                    class="fw-bold"><?= $key["name"]; ?> (<?= $key["symbol"]; ?>)</span>
                                <?php } else if ($key["symbol"] == "BNB") { ?>
                                <img src="<?= base_url(); ?>assets/imagenew/bnb.png" class="img-fluid" alt=""> <span
                                    class="fw-bold"><?= $key["name"]; ?> (<?= $key["symbol"]; ?>)</span>
                                <?php } else if ($key["symbol"] == "USDC") { ?>
                                <img src="<?= base_url(); ?>assets/imagenew/usdc.png" class="img-fluid" alt=""> <span
                                    class="fw-bold"><?= $key["name"]; ?> (<?= $key["symbol"]; ?>)</span>
                                <?php } ?>

                            </div>
                            <div class="market mt-3">
                                <?php
                                    if (substr($key["percent_change_24h"], 0, 1) == '-') {
                                        $sty = 'style="color:red;text-align:right;"';
                                        $akhir = explode('-', $key["percent_change_24h"]);
                                        $isi = $akhir[1];
                                        $icon = 'sort_down.png';
                                    } else {
                                        $sty = 'style="color:green;text-align:right;"';
                                        $isi = $key["percent_change_24h"];
                                        $icon = 'sort_up.png';
                                    }
                                    ?>
                                <p>Harga : <span><?= formatDollars4($key["price_usd"]); ?></p>
                                <p>24 Jam : </span> <span <?= $sty; ?>><img
                                            src="<?= base_url(); ?>assets/image/<?= $icon; ?>" width="10px" alt="">
                                        <?= number_format($isi, 2); ?> %</span></p>
                                <p>Volume 24 Jam : <span><?= formatDollars4($key["24h_volume_usd"]); ?></span></p>
                                <p>Kapital Pasar : <span><?= formatDollars4($key["market_cap_usd"]); ?></span></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>
            <div class="tab-pane  " id="crypto-1">
                <div class="header-title mb-4">
                    <h2>Harga EUR</h2>
                </div>
                <div class="row g-4" hidden>
                    <?php
                    function formatDollars($dollars)
                    {
                        $formatted = "$" . number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "", $dollars)), 2);
                        return $dollars < 0 ? "({$formatted})" : "{$formatted}";
                    }

                    function http_request($url)
                    {
                        // persiapkan curl
                        $ch = curl_init();

                        // set url 
                        curl_setopt($ch, CURLOPT_URL, $url);

                        // set user agent    
                        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

                        // return the transfer as a string 
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

                        // $output contains the output string 
                        $output = curl_exec($ch);

                        // tutup curl 
                        curl_close($ch);

                        // mengembalikan hasil curl
                        return $output;
                    }

                    $isi = http_request("https://api.alternative.me/v1/ticker/?limit=5");
                    $isi = json_decode($isi, TRUE);
                    $no = 1;
                    foreach ($isi as $key) { ?>
                    <div class="col-lg col-md-4 col-6">
                        <div class="box-crypto p-3">
                            <div class="title d-fl">
                                <?php if ($key["symbol"] == "BTC") { ?>
                                <img src="<?= base_url(); ?>assets/imagenew/btc.png" class="img-fluid" alt=""> <span
                                    class="fw-bold"><?= $key["name"]; ?> (<?= $key["symbol"]; ?>)</span>
                                <?php } else if ($key["symbol"] == "ETH") { ?>
                                <img src="<?= base_url(); ?>assets/imagenew/eth.png" class="img-fluid" alt=""> <span
                                    class="fw-bold"><?= $key["name"]; ?> (<?= $key["symbol"]; ?>)</span>
                                <?php } else if ($key["symbol"] == "USDT") { ?>
                                <img src="<?= base_url(); ?>assets/imagenew/usdt.png" class="img-fluid" alt=""> <span
                                    class="fw-bold"><?= $key["name"]; ?> (<?= $key["symbol"]; ?>)</span>
                                <?php } else if ($key["symbol"] == "BNB") { ?>
                                <img src="<?= base_url(); ?>assets/imagenew/bnb.png" class="img-fluid" alt=""> <span
                                    class="fw-bold"><?= $key["name"]; ?> (<?= $key["symbol"]; ?>)</span>
                                <?php } else if ($key["symbol"] == "USDC") { ?>
                                <img src="<?= base_url(); ?>assets/imagenew/usdc.png" class="img-fluid" alt=""> <span
                                    class="fw-bold"><?= $key["name"]; ?> (<?= $key["symbol"]; ?>)</span>
                                <?php } ?>

                            </div>
                            <div class="market mt-3">
                                <?php
                                    if (substr($key["percent_change_24h"], 0, 1) == '-') {
                                        $sty = 'style="color:red;text-align:right;"';
                                        $akhir = explode('-', $key["percent_change_24h"]);
                                        $isi = $akhir[1];
                                        $icon = 'sort_down.png';
                                    } else {
                                        $sty = 'style="color:green;text-align:right;"';
                                        $isi = $key["percent_change_24h"];
                                        $icon = 'sort_up.png';
                                    }
                                    ?>
                                <p>Harga : <span><?= formatDollars($key["price_usd"]); ?></p>
                                <p>24 Jam : </span> <span <?= $sty; ?>><img
                                            src="<?= base_url(); ?>assets/image/<?= $icon; ?>" width="10px" alt="">
                                        <?= number_format($isi, 2); ?> %</span></p>
                                <p>Volume 24 Jam : <span><?= formatDollars($key["24h_volume_usd"]); ?></span></p>
                                <p>Kapital Pasar : <span><?= formatDollars($key["market_cap_usd"]); ?></span></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <div class="tab-pane  " id="crypto-2">
                <div class="header-title mb-4">
                    <h2>Harga ASIA</h2>
                </div>
                <div class="row g-4" hidden>
                    <?php
                    function formatDollars2($dollars)
                    {
                        $formatted = "$" . number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "", $dollars)), 2);
                        return $dollars < 0 ? "({$formatted})" : "{$formatted}";
                    }

                    function http_request2($url)
                    {
                        // persiapkan curl
                        $ch = curl_init();

                        // set url 
                        curl_setopt($ch, CURLOPT_URL, $url);

                        // set user agent    
                        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

                        // return the transfer as a string 
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

                        // $output contains the output string 
                        $output = curl_exec($ch);

                        // tutup curl 
                        curl_close($ch);

                        // mengembalikan hasil curl
                        return $output;
                    }

                    $isi2 = http_request("https://api.alternative.me/v1/ticker/?limit=5");
                    $isi2 = json_decode($isi2, TRUE);
                    $no = 1;
                    foreach ($isi2 as $key) {
                    ?>
                    <div class="col-lg col-md-4 col-6">
                        <div class="box-crypto p-3">
                            <div class="title d-fl">
                                <?php if ($key["symbol"] == "BTC") { ?>
                                <img src="<?= base_url(); ?>assets/imagenew/btc.png" class="img-fluid" alt=""> <span
                                    class="fw-bold"><?= $key["name"]; ?> (<?= $key["symbol"]; ?>)</span>
                                <?php } else if ($key["symbol"] == "ETH") { ?>
                                <img src="<?= base_url(); ?>assets/imagenew/eth.png" class="img-fluid" alt=""> <span
                                    class="fw-bold"><?= $key["name"]; ?> (<?= $key["symbol"]; ?>)</span>
                                <?php } else if ($key["symbol"] == "USDT") { ?>
                                <img src="<?= base_url(); ?>assets/imagenew/usdt.png" class="img-fluid" alt=""> <span
                                    class="fw-bold"><?= $key["name"]; ?> (<?= $key["symbol"]; ?>)</span>
                                <?php } else if ($key["symbol"] == "BNB") { ?>
                                <img src="<?= base_url(); ?>assets/imagenew/bnb.png" class="img-fluid" alt=""> <span
                                    class="fw-bold"><?= $key["name"]; ?> (<?= $key["symbol"]; ?>)</span>
                                <?php } else if ($key["symbol"] == "USDC") { ?>
                                <img src="<?= base_url(); ?>assets/imagenew/usdc.png" class="img-fluid" alt=""> <span
                                    class="fw-bold"><?= $key["name"]; ?> (<?= $key["symbol"]; ?>)</span>
                                <?php } ?>

                            </div>
                            <div class="market mt-3">
                                <?php
                                    if (substr($key["percent_change_24h"], 0, 1) == '-') {
                                        $sty = 'style="color:red;text-align:right;"';
                                        $akhir = explode('-', $key["percent_change_24h"]);
                                        $isi = $akhir[1];
                                        $icon = 'sort_down.png';
                                    } else {
                                        $sty = 'style="color:green;text-align:right;"';
                                        $isi = $key["percent_change_24h"];
                                        $icon = 'sort_up.png';
                                    }
                                    ?>
                                <p>Harga : <span><?= formatDollars2($key["price_usd"]); ?></p>
                                <p>24 Jam : </span> <span <?= $sty; ?>><img
                                            src="<?= base_url(); ?>assets/image/<?= $icon; ?>" width="10px" alt="">
                                        <?= number_format($isi, 2); ?> %</span></p>
                                <p>Volume 24 Jam : <span><?= formatDollars2($key["24h_volume_usd"]); ?></span></p>
                                <p>Kapital Pasar : <span><?= formatDollars2($key["market_cap_usd"]); ?></span></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>
            <div class="tab-pane " id="crypto-3">
                <div class="header-title mb-4">
                    <h2>Harga ASIA FX</h2>
                </div>
                <div class="row g-4" hidden>
                    <?php
                    function formatDollars3($dollars)
                    {
                        $formatted = "$" . number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "", $dollars)), 2);
                        return $dollars < 0 ? "({$formatted})" : "{$formatted}";
                    }

                    function http_request3($url)
                    {
                        // persiapkan curl
                        $ch = curl_init();

                        // set url 
                        curl_setopt($ch, CURLOPT_URL, $url);

                        // set user agent    
                        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

                        // return the transfer as a string 
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

                        // $output contains the output string 
                        $output = curl_exec($ch);

                        // tutup curl 
                        curl_close($ch);

                        // mengembalikan hasil curl
                        return $output;
                    }

                    $isi3 = http_request("https://api.alternative.me/v1/ticker/?limit=5");
                    $isi3 = json_decode($isi3, TRUE);
                    $no = 1;
                    foreach ($isi3 as $key) {
                    ?>
                    <div class="col-lg col-md-4 col-6">
                        <div class="box-crypto p-3">
                            <div class="title d-fl">
                                <?php if ($key["symbol"] == "BTC") { ?>
                                <img src="<?= base_url(); ?>assets/imagenew/btc.png" class="img-fluid" alt=""> <span
                                    class="fw-bold"><?= $key["name"]; ?> (<?= $key["symbol"]; ?>)</span>
                                <?php } else if ($key["symbol"] == "ETH") { ?>
                                <img src="<?= base_url(); ?>assets/imagenew/eth.png" class="img-fluid" alt=""> <span
                                    class="fw-bold"><?= $key["name"]; ?> (<?= $key["symbol"]; ?>)</span>
                                <?php } else if ($key["symbol"] == "USDT") { ?>
                                <img src="<?= base_url(); ?>assets/imagenew/usdt.png" class="img-fluid" alt=""> <span
                                    class="fw-bold"><?= $key["name"]; ?> (<?= $key["symbol"]; ?>)</span>
                                <?php } else if ($key["symbol"] == "BNB") { ?>
                                <img src="<?= base_url(); ?>assets/imagenew/bnb.png" class="img-fluid" alt=""> <span
                                    class="fw-bold"><?= $key["name"]; ?> (<?= $key["symbol"]; ?>)</span>
                                <?php } else if ($key["symbol"] == "USDC") { ?>
                                <img src="<?= base_url(); ?>assets/imagenew/usdc.png" class="img-fluid" alt=""> <span
                                    class="fw-bold"><?= $key["name"]; ?> (<?= $key["symbol"]; ?>)</span>
                                <?php } ?>

                            </div>
                            <div class="market mt-3">
                                <?php
                                    if (substr($key["percent_change_24h"], 0, 1) == '-') {
                                        $sty = 'style="color:red;text-align:right;"';
                                        $akhir = explode('-', $key["percent_change_24h"]);
                                        $isi = $akhir[1];
                                        $icon = 'sort_down.png';
                                    } else {
                                        $sty = 'style="color:green;text-align:right;"';
                                        $isi = $key["percent_change_24h"];
                                        $icon = 'sort_up.png';
                                    }
                                    ?>
                                <p>Harga : <span><?= formatDollars3($key["price_usd"]); ?></p>
                                <p>24 Jam : </span> <span <?= $sty; ?>><img
                                            src="<?= base_url(); ?>assets/image/<?= $icon; ?>" width="10px" alt="">
                                        <?= number_format($isi, 2); ?> %</span></p>
                                <p>Volume 24 Jam : <span><?= formatDollars3($key["24h_volume_usd"]); ?></span></p>
                                <p>Kapital Pasar : <span><?= formatDollars3($key["market_cap_usd"]); ?></span></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>

            <div class="tab-pane " id="crypto-5">
                <div class="header-title mb-4">
                    <h2>Harga US</h2>
                </div>
                <div class="row g-4" hidden>
                    <?php
                    function formatDollars5($dollars)
                    {
                        $formatted = "$" . number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "", $dollars)), 2);
                        return $dollars < 0 ? "({$formatted})" : "{$formatted}";
                    }

                    function http_request5($url)
                    {
                        // persiapkan curl
                        $ch = curl_init();

                        // set url 
                        curl_setopt($ch, CURLOPT_URL, $url);

                        // set user agent    
                        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

                        // return the transfer as a string 
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

                        // $output contains the output string 
                        $output = curl_exec($ch);

                        // tutup curl 
                        curl_close($ch);

                        // mengembalikan hasil curl
                        return $output;
                    }

                    $isi5 = http_request("https://api.alternative.me/v1/ticker/?limit=5");
                    $isi5 = json_decode($isi5, TRUE);
                    $no = 1;
                    foreach ($isi5 as $key) {
                    ?>
                    <div class="col-lg col-md-4 col-6">
                        <div class="box-crypto p-3">
                            <div class="title d-fl">
                                <?php if ($key["symbol"] == "BTC") { ?>
                                <img src="<?= base_url(); ?>assets/imagenew/btc.png" class="img-fluid" alt=""> <span
                                    class="fw-bold"><?= $key["name"]; ?> (<?= $key["symbol"]; ?>)</span>
                                <?php } else if ($key["symbol"] == "ETH") { ?>
                                <img src="<?= base_url(); ?>assets/imagenew/eth.png" class="img-fluid" alt=""> <span
                                    class="fw-bold"><?= $key["name"]; ?> (<?= $key["symbol"]; ?>)</span>
                                <?php } else if ($key["symbol"] == "USDT") { ?>
                                <img src="<?= base_url(); ?>assets/imagenew/usdt.png" class="img-fluid" alt=""> <span
                                    class="fw-bold"><?= $key["name"]; ?> (<?= $key["symbol"]; ?>)</span>
                                <?php } else if ($key["symbol"] == "BNB") { ?>
                                <img src="<?= base_url(); ?>assets/imagenew/bnb.png" class="img-fluid" alt=""> <span
                                    class="fw-bold"><?= $key["name"]; ?> (<?= $key["symbol"]; ?>)</span>
                                <?php } else if ($key["symbol"] == "USDC") { ?>
                                <img src="<?= base_url(); ?>assets/imagenew/usdc.png" class="img-fluid" alt=""> <span
                                    class="fw-bold"><?= $key["name"]; ?> (<?= $key["symbol"]; ?>)</span>
                                <?php } ?>

                            </div>
                            <div class="market mt-3">
                                <?php
                                    if (substr($key["percent_change_24h"], 0, 1) == '-') {
                                        $sty = 'style="color:red;text-align:right;"';
                                        $akhir = explode('-', $key["percent_change_24h"]);
                                        $isi = $akhir[1];
                                        $icon = 'sort_down.png';
                                    } else {
                                        $sty = 'style="color:green;text-align:right;"';
                                        $isi = $key["percent_change_24h"];
                                        $icon = 'sort_up.png';
                                    }
                                    ?>
                                <p>Harga : <span><?= formatDollars5($key["price_usd"]); ?></p>
                                <p>24 Jam : </span> <span <?= $sty; ?>><img
                                            src="<?= base_url(); ?>assets/image/<?= $icon; ?>" width="10px" alt="">
                                        <?= number_format($isi, 2); ?> %</span></p>
                                <p>Volume 24 Jam : <span><?= formatDollars5($key["24h_volume_usd"]); ?></span></p>
                                <p>Kapital Pasar : <span><?= formatDollars5($key["market_cap_usd"]); ?></span></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>
            <div class="tab-pane " id="crypto-6">
                <div class="header-title mb-4">
                    <h2>Harga PRE-MKT</h2>
                </div>
                <div class="row g-4" hidden>
                    <?php
                    function formatDollars6($dollars)
                    {
                        $formatted = "$" . number_format(sprintf('%0.2f', preg_replace("/[^0-9.]/", "", $dollars)), 2);
                        return $dollars < 0 ? "({$formatted})" : "{$formatted}";
                    }

                    function http_request6($url)
                    {
                        // persiapkan curl
                        $ch = curl_init();

                        // set url 
                        curl_setopt($ch, CURLOPT_URL, $url);

                        // set user agent    
                        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');

                        // return the transfer as a string 
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

                        // $output contains the output string 
                        $output = curl_exec($ch);

                        // tutup curl 
                        curl_close($ch);

                        // mengembalikan hasil curl
                        return $output;
                    }

                    $isi6 = http_request("https://api.alternative.me/v1/ticker/?limit=5");
                    $isi6 = json_decode($isi6, TRUE);
                    $no = 1;
                    foreach ($isi6 as $key) {
                    ?>
                    <div class="col-lg col-md-4 col-6">
                        <div class="box-crypto p-3">
                            <div class="title d-fl">
                                <?php if ($key["symbol"] == "BTC") { ?>
                                <img src="<?= base_url(); ?>assets/imagenew/btc.png" class="img-fluid" alt=""> <span
                                    class="fw-bold"><?= $key["name"]; ?> (<?= $key["symbol"]; ?>)</span>
                                <?php } else if ($key["symbol"] == "ETH") { ?>
                                <img src="<?= base_url(); ?>assets/imagenew/eth.png" class="img-fluid" alt=""> <span
                                    class="fw-bold"><?= $key["name"]; ?> (<?= $key["symbol"]; ?>)</span>
                                <?php } else if ($key["symbol"] == "USDT") { ?>
                                <img src="<?= base_url(); ?>assets/imagenew/usdt.png" class="img-fluid" alt=""> <span
                                    class="fw-bold"><?= $key["name"]; ?> (<?= $key["symbol"]; ?>)</span>
                                <?php } else if ($key["symbol"] == "BNB") { ?>
                                <img src="<?= base_url(); ?>assets/imagenew/bnb.png" class="img-fluid" alt=""> <span
                                    class="fw-bold"><?= $key["name"]; ?> (<?= $key["symbol"]; ?>)</span>
                                <?php } else if ($key["symbol"] == "USDC") { ?>
                                <img src="<?= base_url(); ?>assets/imagenew/usdc.png" class="img-fluid" alt=""> <span
                                    class="fw-bold"><?= $key["name"]; ?> (<?= $key["symbol"]; ?>)</span>
                                <?php } ?>

                            </div>
                            <div class="market mt-3">
                                <?php
                                    if (substr($key["percent_change_24h"], 0, 1) == '-') {
                                        $sty = 'style="color:red;text-align:right;"';
                                        $akhir = explode('-', $key["percent_change_24h"]);
                                        $isi = $akhir[1];
                                        $icon = 'sort_down.png';
                                    } else {
                                        $sty = 'style="color:green;text-align:right;"';
                                        $isi = $key["percent_change_24h"];
                                        $icon = 'sort_up.png';
                                    }
                                    ?>
                                <p>Harga : <span><?= formatDollars6($key["price_usd"]); ?></p>
                                <p>24 Jam : </span> <span <?= $sty; ?>><img
                                            src="<?= base_url(); ?>assets/image/<?= $icon; ?>" width="10px" alt="">
                                        <?= number_format($isi, 2); ?> %</span></p>
                                <p>Volume 24 Jam : <span><?= formatDollars6($key["24h_volume_usd"]); ?></span></p>
                                <p>Kapital Pasar : <span><?= formatDollars6($key["market_cap_usd"]); ?></span></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>
            <div class="tab-pane " id="crypto-7">
                <div class="header-title mb-4">
                    <h2>Harga OIL</h2>
                </div>
            </div>
            <div class="tab-pane " id="crypto-8">
                <div class="header-title mb-4">
                    <h2>Harga BONDS</h2>
                </div>
            </div>
            <div class="tab-pane " id="crypto-9">
                <div class="header-title mb-4">
                    <h2>Harga GOLD</h2>
                </div>
            </div>
            <div class="tab-pane " id="crypto-10">
                <div class="header-title mb-4">
                    <h2>Harga EUR FX</h2>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container-xxl ">
    <div class="container  px-lg-5 ">
        <div class="border-top border-bottom border-2 py-4">
            <div class="slider-container mt-5">
                <div class="swiper-container iklan-slider">
                    <div class="swiper-wrapper">
                        <?php foreach ($this->db->query("SELECT * FROM tbl_iklan WHERE posisi = 1")->result() as $i) { ?>
                        <div class="swiper-slide">
                            <a href="<?= $i->url; ?>" target="_blank" title="<?= $i->nama; ?>">
                                <div class="box-advert text-center">
                                    <?php if ($i->image != '') { ?>
                                    <img src="https://admin103.digivestasi.com/upload/iklan/<?= $i->image; ?>"
                                        class="img-fluid w-100" alt="">
                                    <?php } else { ?>
                                    <img src="<?= base_url() ?>assets/imagenew/1200x180.jpg" class="img-fluid w-100"
                                        alt="">
                                    <?php } ?>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl news-popular">
    <div class="container px-lg-5 pt-5">
        <div class="header-title">
            <h2>Berita Terpopuler</h2>
        </div>
        <div class="slider-container mt-5">
            <div class="swiper-container news-popular-slider">
                <div class="swiper-wrapper">
                    <?php foreach ($this->db->query("SELECT * FROM tbl_posts LEFT JOIN tbl_subkategori ON tbl_subkategori.id=tbl_posts.subKategori order by tbl_posts.id desc")->result() as $banner1) { ?>
                    <div class="swiper-slide">
                        <a href="<?= base_url() . 'news/detail/' . $banner1->slug ?>">
                            <div class="box-news">
                                <div class="row">
                                    <div class="col-4 px-0">
                                        <div class="img">
                                            <img src="https://admin103.digivestasi.com/upload/posts/<?= $banner1->image ?>"
                                                class="img-fluid" alt="">
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="category">
                                            <p><?= $banner1->kategori; ?></p>
                                        </div>
                                        <div class="title">
                                            <p class="text-black"><?= $banner1->Title ?></p>
                                        </div>
                                        <div class="date">
                                            <small
                                                class="text-black"><?= date('H:i, d M Y', strtotime($banner1->created_date)); ?></small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <?php } ?>
                </div>
                <!-- <div class="position-absolute end-0 top-0"> -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <!-- </div> -->
            </div>
        </div>
    </div>
</div>

<div class="container-xxl headline">
    <div class="container px-lg-5 pb-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="content-area">
                    <div class="row">
                        <?php foreach ($this->db->query("SELECT * FROM tbl_posts LEFT JOIN tbl_subkategori ON tbl_subkategori.id=tbl_posts.subKategori order by tbl_posts.id desc limit 1 ")->result() as $banner1) { ?>
                        <div class="col-12">
                            <a href="<?= base_url() . 'news/detail/' . $banner1->slug ?>">
                                <div class="box-news position-relative">
                                    <div class="headline-top">
                                        <h5 class="text-white">HEADLINE</h5>
                                    </div>
                                    <img src="https://admin103.digivestasi.com/upload/posts/<?= $banner1->image ?>"
                                        class="img-fluid w-100" alt="">
                                    <div class="content">
                                        <div class="category">
                                            <p><?= $banner1->kategori; ?></p>
                                        </div>
                                        <div class="title">
                                            <h2 class="text-black"><?= $banner1->Title ?></h2>
                                        </div>
                                        <div class="date">
                                            <small class="text-black">
                                                <?= date('H:i, d M Y', strtotime($banner1->created_date)); ?></small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="content-list mt-2">
                        <div class="row row-p">
                            <?php foreach ($this->db->query("SELECT * FROM tbl_posts order by id desc limit 2,4")->result() as $banner2) { ?>
                            <div class="col-3 px-0">
                                <a href="<?= base_url() . 'news/detail/' . $banner2->slug ?>">
                                    <div class="box-list">
                                        <div class="img">
                                            <img src="https://admin103.digivestasi.com/upload/posts/<?= $banner2->image ?>"
                                                class="img-fluid" alt="">
                                        </div>
                                        <div class="title p-1 p-sm-2">
                                            <p class="text-black"><?= $banner2->Title ?></p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="row g-3">
                    <div class="col-lg-12">
                        <div class="side-content">
                            <?php foreach ($this->db->query("SELECT * FROM tbl_posts LEFT JOIN tbl_subkategori ON tbl_subkategori.id=tbl_posts.subKategori order by tbl_posts.id desc limit 1")->result() as $banner2) { ?>
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
                                        <div class="date">
                                            <p class="">
                                                <?= date('H:i, d M Y', strtotime($banner2->created_date)); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <?php } ?>
                        </div>
                    </div>
                    <?php foreach ($this->db->query("SELECT * FROM tbl_posts  LEFT JOIN tbl_subkategori ON tbl_subkategori.id=tbl_posts.subKategori order by tbl_posts.id desc limit 2,3")->result() as $banner2) { ?>
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
                                            <div class="category">
                                                <p><?= $banner2->kategori; ?></p>
                                            </div>
                                            <div class="title">
                                                <p><?= $banner2->Title ?></p>
                                            </div>
                                            <div class="date">
                                                <p><?= date('H:i, d M Y', strtotime($banner2->created_date)); ?>
                                                </p>
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
</div>

<div class="container-xxl ">
    <div class="container  px-lg-5 ">
        <div class="border-top border-bottom border-2 py-4">
            <?php $ads2 = $this->db->query("SELECT * FROM tbl_iklan WHERE posisi = 2")->row(); ?>
            <a href="<?= $ads2->url; ?>" target="_blank" title="<?= $ads2->nama; ?>">
                <div class="box-advert text-center">
                    <?php if ($ads2->image != '') { ?>
                    <img src="https://admin103.digivestasi.com/upload/iklan/<?= $ads2->image; ?>"
                        class="img-fluid w-100" alt="">
                    <?php } else { ?>
                    <img src="<?= base_url() ?>assets/imagenew/1200x180.jpg" class="img-fluid w-100" alt="">
                    <?php } ?>
                </div>
            </a>
        </div>
    </div>
</div>


<div class="container-xxl">
    <div class="container px-lg-5 py-5">

        <div class="row">
            <div class="col-lg-8 border-bottom pb-3">
                <div class="header-title d-flex justify-content-between">
                    <h2>BERITA TERKINI</h2>
                    <a href="<?= base_url() . 'hotnews'; ?>">Lihat Detail ></a>
                </div>
                <div class="latest-news">
                    <div class="row g-4 mt-3">
                        <?php foreach ($this->db->query("SELECT * FROM tbl_posts LEFT JOIN tbl_subkategori ON tbl_subkategori.id=tbl_posts.subKategori order by tbl_posts.id desc limit 3")->result() as $banner2) {

                            $ket2    = strip_tags($banner2->content);
                            $ket     = substr($ket2, 0, 100);
                        ?>
                        <div class="col-12">
                            <a href="<?= base_url() . 'news/detail/' . $banner2->slug ?>">
                                <div class="box-news">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="img">
                                                <img src="https://admin103.digivestasi.com/upload/posts/<?= $banner2->image ?>"
                                                    class="img-fluid" alt="">
                                            </div>
                                        </div>
                                        <div class="col-7">
                                            <div class="content">
                                                <div class="category">
                                                    <p><?= $banner2->kategori; ?></p>
                                                </div>
                                                <div class="title">
                                                    <p><?= substr($banner2->Title, 0, 40) ?></p>
                                                </div>
                                                <div class="desk my-2">
                                                    <p><?= $ket ?></p>
                                                </div>
                                                <div class="date">
                                                    <p><?= date('H:i, d M Y', strtotime($banner2->created_date)); ?>
                                                    </p>
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
            <div class="col-lg-4">
                <div class="header-title">
                    <h2>Berita Lainnya</h2>
                </div>
                <div class="more-news mt-3">
                    <div class="row g-3">
                        <?php foreach ($this->db->query("SELECT * FROM tbl_posts LEFT JOIN tbl_subkategori ON tbl_subkategori.id=tbl_posts.subKategori order by tbl_posts.id desc limit 4")->result() as $banner2) { ?>
                        <div class="col-6">
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
                                    <div class="date">
                                        <p><?= date('H:i, d M Y', strtotime($banner2->created_date)); ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php } ?>

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
            </div>
        </div>
    </div>
</div>

<div class="container-xxl video">
    <div class="container px-lg-5">
        <div class="header-title py-3">
            <h2>Video</h2>
        </div>
        <div class="row g-4">
            <div class="col-lg-8">
                <div class="box-video position-relative">
                    <div class="video-top">
                        <h5 class="text-white">Video</h5>
                    </div>
                    <div class="ratio ratio-16x9">
                        <?php $video = $this->db->query("SELECT * FROM tbl_video_yt ORDER BY id DESC LIMIT 1")->row() ?>
                        <?= $video->video; ?>
                    </div>
                    <div class="other-video py-2 px-4">
                        <a href="<?= base_url(); ?>video" class="text-white">Lihat video lainnya ></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="border-top border-bottom border-2 py-4 h-100">
                    <?php $ads3 = $this->db->query("SELECT * FROM tbl_iklan WHERE posisi = 3")->row(); ?>
                    <a href="<?= $ads3->url; ?>" target="_blank" title="<?= $ads3->nama; ?>">
                        <div class="box-advert text-center h-100">
                            <?php if ($ads3->image != '') { ?>
                            <img src="https://admin103.digivestasi.com/upload/iklan/<?= $ads3->image; ?>"
                                class="img-fluid w-100 h-100" alt="">
                            <?php } else { ?>
                            <img src="<?= base_url() ?>assets/imagenew/385x440.jpg" class="img-fluid w-100" alt="">
                            <?php } ?>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl tab-news">
    <div class="container px-lg-5 py-5">
        <div class="row">
            <div class="col-lg-8">
                <ul class="nav nav-tabs border-0" id="myTab">
                    <li class="nav-item">
                        <a href="#recent-1" class="nav-link active" data-bs-toggle="tab">Recent</a>
                    </li>
                    <li class="nav-item">
                        <a href="#recent-2" class="nav-link" data-bs-toggle="tab">Trending</a>
                    </li>
                    <li class="nav-item">
                        <a href="#recent-3" class="nav-link" data-bs-toggle="tab">Most Views</a>
                    </li>
                </ul>

                <div class="tab-content py-5">
                    <div class="tab-pane  show active" id="recent-1">
                        <div class="row g-4">
                            <?php
                            foreach ($this->db->query("SELECT * FROM tbl_posts LEFT JOIN tbl_subkategori ON tbl_subkategori.id=tbl_posts.subKategori order by tbl_posts.id desc limit 3  ")->result() as $berita) {

                                $ket2    = strip_tags($berita->content);
                                $ket     = substr($ket2, 0, 100);
                            ?>
                            <div class="col-12">
                                <a href="<?= base_url() . 'news/detail/' . $berita->slug ?>">
                                    <div class="box-news">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="img">
                                                    <img src="https://admin103.digivestasi.com/upload/posts/<?= $berita->image ?>"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="content">
                                                    <div class="category">
                                                        <p><?= $berita->kategori; ?></p>
                                                    </div>
                                                    <div class="title">
                                                        <p><?= substr($berita->Title, 0, 50) ?></p>
                                                    </div>
                                                    <div class="desk my-2">
                                                        <p><?= $ket; ?></p>
                                                    </div>
                                                    <div class="date ">
                                                        <p><?= date('H:i, d M Y', strtotime($berita->created_date)); ?>
                                                        </p>
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
                    <div class="tab-pane" id="recent-2">
                        <div class="row g-4">
                            <?php
                            foreach ($this->db->query("SELECT * FROM tbl_posts LEFT JOIN tbl_subkategori ON tbl_subkategori.id=tbl_posts.subKategori order by tbl_posts.id asc limit 3  ")->result() as $berita) {

                                $ket2    = strip_tags($berita->content);
                                $ket     = substr($ket2, 0, 100);
                            ?>
                            <div class="col-12">
                                <a href="<?= base_url() . 'news/detail/' . $berita->slug ?>">
                                    <div class="box-news">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="img">
                                                    <img src="https://admin103.digivestasi.com/upload/posts/<?= $berita->image ?>"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="content">
                                                    <div class="category">
                                                        <p><?= $berita->kategori; ?></p>
                                                    </div>
                                                    <div class="title">
                                                        <p><?= substr($berita->Title, 0, 50) ?></p>
                                                    </div>
                                                    <div class="desk my-2">
                                                        <?= $ket; ?>
                                                    </div>
                                                    <div class="date ">
                                                        <p><?= date('H:i, d M Y', strtotime($berita->created_date)); ?>
                                                        </p>
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
                    <div class="tab-pane" id="recent-3">
                        <div class="row g-4">
                            <?php
                            foreach ($this->db->query("SELECT b.*,SUBSTRING(a.location, 24) as location, COUNT( a.id ) AS total ,tbl_subkategori.kategori
                            FROM tbl_posts_counter a
                            LEFT JOIN tbl_posts b ON SUBSTRING(a.location, 24)=b.slug 
                            LEFT JOIN tbl_subkategori ON tbl_subkategori.id=b.subKategori
                            GROUP BY a.location ORDER BY total desc limit 5")->result() as $berita) {

                                $ket2    = strip_tags($berita->content);
                                $ket     = substr($ket2, 0, 100);
                            ?>
                            <div class="col-12">
                                <a href="<?= base_url() . 'news/detail/' . $berita->slug ?>">
                                    <div class="box-news">
                                        <div class="row">
                                            <div class="col-5">
                                                <div class="img">
                                                    <img src="https://admin103.digivestasi.com/upload/posts/<?= $berita->image ?>"
                                                        class="img-fluid" alt="">
                                                </div>
                                            </div>
                                            <div class="col-7">
                                                <div class="content">
                                                    <div class="category">
                                                        <p><?= $berita->kategori; ?></p>
                                                    </div>
                                                    <div class="title">
                                                        <p><?= substr($berita->Title, 0, 50) ?></p>
                                                    </div>
                                                    <div class="desk my-2">
                                                        <?= $ket; ?>
                                                    </div>
                                                    <div class="date ">
                                                        <p><?= date('H:i, d M Y', strtotime($berita->created_date)); ?>
                                                        </p>
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
            <div class="col-lg-4">
                <div class="box-subscribe text-center px-4 py-5">
                    <div class="img">
                        <img src="assets/imagenew/img-subscripbe.png" class="img-fluid" alt="">
                    </div>
                    <div class="title my-3">
                        <h5>Dapatkan informasi terbaru seputar Investasi dan Cryptopcurency</h5>
                    </div>
                    <div class="langganan">
                        <p>Langganan bersama Digivestasi dan dapatkan informasi terupdate dari kami</p>
                    </div>

                    <div class="subscribe mt-4">
                        <form action="">
                            <div class="position-relative">
                                <input type="text" placeholder="Masukkan email Anda.."
                                    class="form-control p-4 bg-white">
                                <button type="submit"
                                    class="position-absolute top-0 end-0 h-100 p-3 text-white fw-bold">SUBSCRIBE</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="about text-center mt-5">
                    <div class="img">
                        <img src="assets/imagenew/logo_bottom.png" class="img-fluid" alt="">
                    </div>
                    <?= $website_ident->description_ina; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end grid news -->

<!-- Facts Start -->
<div class="container-fluid facts" data-parallax="scroll" data-image-src="img/carousel-1.jpg">
    <div class="container py-4">
        <div class="row g-5">
            <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="d-flex align-items-center h-100">
                    <i class="fas fa-calendar"></i>
                    <div class="data ms-2">
                        <h4><?= date('d') ?></h4>
                        <p><?= date('M Y') ?></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
                <div class="d-flex align-items-center h-100">
                    <i class="fas fa-male"></i>
                    <div class="data ms-2">
                        <h4 data-toggle="counter-up"><?= $today->jml ?></h4>
                        <p>Visitor Today</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
                <div class="d-flex align-items-center h-100">
                    <i class="fas fa-signal"></i>
                    <div class="data ms-2">
                        <h4 data-toggle="counter-up"><?= $online->jml ?></h4>
                        <p>Online Visitor Today</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
                <div class="d-flex align-items-center h-100">
                    <i class="fas fa-users"></i>
                    <div class="data ms-2">
                        <h4 data-toggle="counter-up"><?= $all->jml ?></h4>
                        <p>Total Visitor</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Facts End -->


<script>
$(document).ready(function() {
    // dt();
    setInterval(function() {
        dt();
    }, 10000);
});

// Testimonials carousel
var cardSlider = new Swiper('.iklan-slider', {
    autoplay: {
        delay: 4000,
        disableOnInteraction: false
    },
    loop: true,
    slidesPerView: 1,
    spaceBetween: 10,

});

// Testimonials carousel
var cardSlider = new Swiper('.news-popular-slider', {
    autoplay: {
        delay: 4000,
        disableOnInteraction: false
    },
    loop: true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    },
    slidesPerView: 4,
    spaceBetween: 25,
    breakpoints: {
        // when window width is >= 480px
        480: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        // when window width is >= 640px
        600: {
            slidesPerView: 1,
            spaceBetween: 20
        },
        767: {
            slidesPerView: 1,
            spaceBetween: 30
        },
        // when window is <= 991px
        991: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
    }
});

$('.owl-carousel').owlCarousel({
    center: true,
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    items: 1,
    nav: true,
    navText: ["<div class='nav-btn prev-slide'></div>", "<div class='nav-btn next-slide'></div>"],
})

// function getBerita(id,kategori){

//     base_url = '<?php echo base_url(); ?>';

//     // if (id=='9') {

//     //     window.location= base_url+kategori;

//     // }else if (id=='10') {

//     //     window.location= base_url+'teknologi';

//     // }else if (id=='11') {

//     //     window.location= base_url+'investasi';

//     // }else{

//         window.location= base_url+'hotnews';
//     // }
// }

// $(document).ready(function() {
//     var table = $('#example').DataTable( {
//         fixedHeader: true
//     } );
// } );

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

base_url = '<?php echo base_url(); ?>';

function dt() {
    var id = '0';
    $.ajax({
        type: "POST",
        url: base_url + "Table",
        data: {
            'id': id
        },
        cache: false,
        success: function(html) {

            $("#isi_table").html(html);
        }
    });
}
</script>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v13.0"
    nonce="Bv6xlRWu"></script>
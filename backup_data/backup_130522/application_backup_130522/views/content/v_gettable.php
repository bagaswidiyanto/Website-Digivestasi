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
    $id = $this->input->post('id');

    if ($id=='1') {
        $isi = http_request("https://api.alternative.me/v1/ticker/?limit=10");
    }else{
        $isi = http_request("https://api.alternative.me/v1/ticker/?limit=5");
    }



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
            echo '<td><img src="'.base_url().'assets/logo/'.$key["symbol"].'.png" alt="" '.$ty.' /> '.$key["name"].'</td>';
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
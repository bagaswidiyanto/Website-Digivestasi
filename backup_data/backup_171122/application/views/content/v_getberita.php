<?php
// subKategori='".$id."' and
// if(($berita->num_rows()) >0){ 
//     foreach ($berita->result() as $p) {
$id = $this->input->post('id');
$idKategori = $this->input->post('idKategori');
$cek = $this->db->query("SELECT * FROM tbl_posts where subKategori='".$id."' order by id desc limit 8");
if ($cek->num_rows()>0) {

foreach ($cek->result() as $p) {
    $waktu_awal3        = strtotime($p->created_date);
      $waktu_akhir3       = strtotime(date("Y-m-d H:i:s")); // bisa juga waktu sekarang now()

                                //menghitung selisih dengan hasil detik
      $diff3    = $waktu_akhir3 - $waktu_awal3;

                                //membagi detik menjadi jam
      $jam3    = floor($diff3 / (60 * 60));
      $ket2    = strip_tags($p->content);
      $ket     = substr($ket2, 0,200);
      ?>


      <div class="row tabcontent tabcontent_<?=$p->subKategori;?>" style="margin-bottom: 5%;" id="<?=$p->subKategori;?>">
       <a href="<?= base_url() . 'news/detail/' . $p->slug ?>" class="linkk">
          <div class="col-sm-4">
             <i><img class="img-berita" style="margin-right: 5px; top: -1px" src="https://admin103.digivestasi.com/upload/posts/<?= $p->image ?>" width="210" height="auto" alt="" title="" /></i>
         </div>
     </a>
     <div class="col-sm-6 text-berita">
      <a href="<?= base_url() . 'news/detail/' . $p->slug ?>" style="color: black;text-decoration: none;">
      <p style="font-size: 18px;font-style: bold !important;font-weight: 600;"><?= substr($p->Title, 0, 100) ?></p>
      <p style="color: grey;font-size: 12px;"><?=date('H:i, d M Y',strtotime($p->created_date));?></p>
      <div class="text-content-berita">
         <?=$ket;?>
     </div>
 </a>

 </div>

</div>


<?php
}
}else{ ?>
<?php }?>
<!-- <?=$id;?> -->
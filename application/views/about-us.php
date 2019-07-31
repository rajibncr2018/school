<?php 
include 'header.php';
?>
<div class="about-banner-area">
         <div class="bradcum-area">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                     <div class="bradcum-yallow-area">
                        <h3><?=$cms[3]['name'];?><span></span></h3>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <img src="<?=base_url()?>backend/data_image/<?=$cms[3]['image'];?>"> 
      </div>
      <div id="page" class="page">
      <div class="space space--sm"></div>
      <section class="abt">
         <div class="container">
            <div class="row">
               <div class="abt-inr">
                  <h2><?=$cms[0]['name'];?></h2>
                  <div class="col-sm-12">
                      <p>
                     <?php
                      $desc = json_decode($cms[0]['json_data']);
                      echo $desc->description;
                      ?></p>
                     <h2><?=$cms[1]['name'];?></h2>
                     <img src="<?=base_url()?>backend/data_image/<?=$cms[1]['image'];?>">
                     <p>
                     <?php
                      $desc = json_decode($cms[1]['json_data']);
                      echo $desc->description;
                      ?></p>
                     <h2><?=$cms[2]['name'];?></h2>
                     <img src="<?=base_url()?>backend/data_image/<?=$cms[2]['image'];?>" style="float: right;padding-left: 20px !important; padding-right:0 !important;">
                     <p>
                     <?php
                      $desc = json_decode($cms[2]['json_data']);
                      echo $desc->description;
                      ?></p>
                  </div>
               </div>
            </div>
         </div>
      </section>
<?php 
include 'footer.php';
?>
<?php 
include 'header.php';
?>
<div class="about-banner-area">
   <div class="bradcum-area">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
               <div class="bradcum-yallow-area">
                  <h3><?=$cms[8]['name'];?><span></span></h3>
               </div>
            </div>
         </div>
      </div>
   </div>
   <img src="<?=base_url()?>backend/data_image/<?=$cms[8]['image'];?>"> 
</div>
<div id="page" class="page">
<div class="space space--sm"></div>
<div class="space space--sm"></div>
<section class="abt">
   <div class="container">
      <div class="row">
         <?php
        $show = $this->Common_model->select('switch_data',array('status' => 'Yes','type' => 'show'),'','','','','id','DESC');
        foreach ($show as $key => $value)
        {
          $desc = json_decode($value['json_data']);
        ?>
         <div class="col-sm-4">
            <div class="rcnt-shw">
               <img src="<?=base_url()?>backend/data_image/<?=$value['image'];?>" alt="">
               <span class="evnt-dt"><?=$desc->post_date;?></span>
               <span class="evnt-sts"> <?=$desc->event_status;?></span>
               <h3><?=$desc->name;?></h3>
               <h4><?=$desc->location;?></h4>
            </div>
         </div>
        <?php
         }
        ?>
      </div>
   </div>
</section>
<?php 
include 'footer.php';
?>
<?php 

include 'header.php';

?>

<div class="about-banner-area">

         <div class="bradcum-area">

            <div class="container">

               <div class="row">

                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">

                     <div class="bradcum-yallow-area">

                        <h3><?=$details['name'];?><span></span></h3>

                     </div>

                  </div>

               </div>

            </div>

         </div>

         <img src="<?=base_url()?>backend/data_image/<?=$details['image'];?>"> 

      </div>

      <div id="page" class="page">
      <div class="space space--sm"></div>
      <div class="space space--sm"></div>
      <div class="space space--sm"></div>
    <div class="space space--sm"></div>
    <section class="abt">
        <div class="container">
            <div class="row">
                <div class="abt-inr">
                    <h2>Indusband</h2>
                    <?php
                    $pro_details = json_decode($details['json_data']);
                    $images = $this->Common_model->select('switch_data',array('category_id' => $details['id'],'status' => 'Yes','type' => 'projectimage'),'','','','','id','DESC');
                    //print_r($images);
                    ?>
                    <div class="col-sm-12">
                        <?php
                        if($images[0]['image'])
                        {
                        ?>
                        <img src="<?=base_url()?>backend/data_image/<?=$images[0]['image'];?>" style="float: right;">
                        <?php
                        }
                        ?>
                        <?=$pro_details->description1;?>
                        <?php
                        if($images[1]['image'])
                        {
                        ?>
                          <img src="<?=base_url()?>backend/data_image/<?=$images[1]['image'];?>">

                          <?php
                        }
                        ?>
                          <?=$pro_details->description2;?>
                          <?php
                        if($images[2]['image'])
                        {
                        ?>
                          <img src="<?=base_url()?>backend/data_image/<?=$images[2]['image'];?>" style="max-width: 100%;">

                          <?php
                        }
                        ?>
                          <?=$pro_details->description3;?>
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php 

include 'footer.php';

?>
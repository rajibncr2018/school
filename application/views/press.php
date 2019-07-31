<?php 
include 'header.php';
?>
<div class="about-banner-area">
         <div class="bradcum-area">
            <div class="container">
               <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                     <div class="bradcum-yallow-area">
                        <h3><?=$cms[7]['name'];?><span></span></h3>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <img src="<?=base_url()?>backend/data_image/<?=$cms[7]['image'];?>"> 
      </div>
      <div id="page" class="page">
      <div class="space space--sm"></div>
      <div class="space space--sm"></div>
      <section class="abt">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <div class="tab-content">
                    
                     <div class="tab-pane active" id="tab_default_1">
                        <div class="row">
                        <?php
                          $press = $this->Common_model->select('switch_data',array('status' => 'Yes','type' => 'press'),'','','','','id','DESC');
                          foreach ($press as $key => $value)
                          {
                            $desc = json_decode($value['json_data']);
                          ?>
                           <div class="col-sm-4">
                              <a class="example-image-link" href="<?=base_url()?>backend/data_image/<?=$value['image'];?>" data-size="1600x1067" data-lightbox="example-set" data-title="<?=$desc->name;?>">
                              <img class="img-fluid example-image" src="<?=base_url()?>backend/data_image/<?=$value['image'];?>" alt="<?=$desc->name;?>">
                              </a>
                           </div>
                            <?php
                           }
                           ?>
                        </div>
                     </div>
                    
                  </div>
               </div>
            </div>
         </div>
      </section>
<?php 
include 'footer.php';
?>
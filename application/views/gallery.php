<?php 
include 'header.php';
?>
<div class="about-banner-area">
   <div class="bradcum-area">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
               <div class="bradcum-yallow-area">
                  <h3><?=$cms[10]['name'];?><span></span></h3>
               </div>
            </div>
         </div>
      </div>
   </div>
   <img src="<?=base_url()?>backend/data_image/<?=$cms[10]['image'];?>"> 
</div>
<div id="page" class="page">
  <div class="space space--sm"></div>
  <section class="glr">
     <div class="tabbable-panel">
        <div class="tabbable-line">
            <div class="container">
              <div class="row">
           <div class="nav nav-tabs glr-nav">
              <div class="col-sm-4 active">
                 <div class="row">
                    <a href="#tab_default_1" data-toggle="tab">
                       <div class="nw-mdl" style="position: relative; min-height: 50px;border-bottom: 1px solid #fff;">
                          <h4><?=$cms[4]['name'];?></h4>
                       </div>
                    </a>
                 </div>
              </div>
              <div class="col-sm-4 active">
                 <div class="row">
                    <a href="#tab_default_2" data-toggle="tab">
                       <div class="nw-mdl" style="position: relative; min-height: 50px; border-bottom: 1px solid #fff;">
                          <h4><?=$cms[5]['name'];?></h4>
                       </div>
                    </a>
                 </div>
              </div>
              <div class="col-sm-4 active">
                 <div class="row">
                    <a href="#tab_default_3" data-toggle="tab">
                       <div class="nw-mdl brdmdl" style="position: relative; min-height: 50px; border-bottom: 1px solid #fff;">
                          <h4><?=$cms[6]['name'];?></h4>
                       </div>
                    </a>
                 </div>
              </div>
           </div>
           </div>
           </div>
           <div class="container">
              <div class="row">
                 <div class="col-sm-12">
                    <div class="tab-content">
                       <div class="tab-pane active" id="tab_default_1">
                          <div class="row">
                            <?php
                          $gallery = $this->Common_model->select('switch_data',array('status' => 'Yes','type' => 'gallery'),'','','','','id','DESC');
                          foreach ($gallery as $key => $value)
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
                       <div class="tab-pane" id="tab_default_2">
                          <div class="row">
                             <?php
                          $video = $this->Common_model->select('switch_data',array('status' => 'Yes','type' => 'video'),'','','','','id','DESC');
                          foreach ($video as $key => $value)
                          {
                            $desc = json_decode($value['json_data']);
                          ?>
                             <div class="col-sm-4">
                                <a class="b-link-stripe b-animate-go lightninBox" data-lb-group="1"> <iframe src="<?=$desc->video_url;?>" allowfullscreen="" width="100%" height="325" frameborder="0"></iframe>
                                </a> 
                             </div>
                             <?php
                              }
                             ?>
                          </div>
                       </div>
                       <div class="tab-pane" id="tab_default_3">
                          <div class="row">
                             <div id="mainwrap">
                                 
                                 <!-- <div id="nowPlay"> <span class="left" id="npAction">Paused...</span> <span class="right" id="npTitle"></span> </div>
                                 <div id="audiowrap">
                                    <div id="audio0">
                                       <audio preload id="audio1" controls="controls">Your browser does not support HTML5 Audio!</audio>
                                    </div>
                                    <div id="tracks"> <a id="btnPrev">&larr;</a> <a id="btnNext">&rarr;</a> </div>
                                 </div>
                                 <div id="plwrap">
                                    <ul id="plList">
                                    </ul>
                                 </div> -->
                                 <?php
                                  $audio = $this->Common_model->select('switch_data',array('status' => 'Yes','type' => 'audio'),'','','','','id','DESC');
                                  foreach ($audio as $key => $value)
                                  {
                                  //print_r($desc);
                                  ?>
                                  <h4><?=$value['name'];?></h4>
                                      <audio preload="auto" src="<?=base_url()?>backend/data_image/<?=$value['image'];?>"></audio>
                                  <?php
                                  }
                                  ?>
                              </div>
                          </div>
                       </div>
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
<style type="text/css">
  .plyr__controls{
    display: none;
  }
</style>

<script src="<?=base_url()?>frontend/js/lightbox.min.js"></script>
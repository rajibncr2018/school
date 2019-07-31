<?php 
include 'header.php';
?>
<section class="slide-wrapper" >
   <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
      <!-- Indicators -->
      <ol class="carousel-indicators">
         <?php
           $banner = $this->Common_model->select('switch_data',array('status' => 'Yes','type' => 'banner'),'','','','','id','DESC');
           foreach ($banner as $key => $value)
           {
             //$desc = json_decode($value['json_data']);
           ?>
         <li data-target="#myCarousel" data-slide-to="<?=$key;?>" class="<?=$key==0 ? "active" : ""; ?>"></li>
         <?php
         }
         ?>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
         <?php
           $banner = $this->Common_model->select('switch_data',array('status' => 'Yes','type' => 'banner'),'','','','','id','DESC');
           foreach ($banner as $key => $value)
           {
             //$desc = json_decode($value['json_data']);
           ?>
         <div class="item <?=$key==0 ? "active" : ""; ?>" >
            <img src="<?=base_url()?>backend/data_image/<?=$value['image'];?>" alt="Los Angeles" style="width:100%;">
         </div>
         <?php
         }
         ?>
      </div>
      <!-- Left and right controls -->
      <!--<a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
      </a>-->
   </div>
</section>
 <section class="visible-xs nw-tagg">
   <div class="col-sm-4">
      <div class="row">
         <a href="http://indusband.com/about">
            <div class="nw-mdl-h" style="background: url(frontend/images/g11.jpg) no-repeat center center; background-size: cover; position: relative; min-height: 88px;">
               <h4>Read More</h4>
            </div>
         </a>
      </div>
   </div>
   <div class="col-sm-4">
      <div class="row">
         <a href="http://indusband.com/gallery">
            <div class="nw-mdl-h" style="background: url(frontend/images/g12.jpg) no-repeat center center; background-size: cover; position: relative; min-height: 88px;">
               <h4>Read More</h4>
            </div>
         </a>
      </div>
   </div>
   <div class="col-sm-4">
      <div class="row">
         <a href="http://indusband.com/contact">
            <div class="nw-mdl-h" style="background: url(frontend/images/g13.jpg) no-repeat center center; background-size: cover; position: relative; min-height: 88px;">
               <h4>Read More</h4>
            </div>
         </a>
      </div>
   </div>
</section>     
<?php 
include 'footer.php';
?>
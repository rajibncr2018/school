<?php 
include 'header.php'; 
?>
<div class="about-banner-area">
   <div class="bradcum-area">
      <div class="container">
         <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
               <div class="bradcum-yallow-area">
                  <h3><?=$cms[9]['name'];?><span></span></h3>
               </div>
            </div>
         </div>
      </div>
   </div>
   <img src="<?=base_url()?>backend/data_image/<?=$cms[9]['image'];?>"> 
</div>
<div id="page" class="page">
<div class="space space--sm"></div>
<div class="space space--sm"></div>
<section class="cntt">
   <div class="container">
      <div class="row">
         <div class="col-sm-6">
            <div class="cnt">
               <span class="ph">
               <i class="fa fa-phone"></i>
               <a href="tel:<?=$settingsArray['contact_no_1']?>"><?=$settingsArray['contact_no_1']?></a>
               </span>
               <span class="ph">
               <i class="fa fa-phone"></i>
               <a href="tel:<?=$settingsArray['contact_no_2']?>"><?=$settingsArray['contact_no_2']?></a>
               </span>
               <span class="ml">
               <i class="fa fa-envelope"></i>
               <a href="mailto:<?=$settingsArray['contact_email']?>"><?=$settingsArray['contact_email']?></a><br>
               </span>
            </div>
         </div>
         <div class="col-sm-6">

            <div class="frmm">
               <?php 
             if($this->session->flashdata("success_msg")){
             ?>
               <div class="alert alert-success alert-dismissable">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                 <?=$this->session->flashdata("success_msg")?>
               </div>
            <?php 
             } 
             if($this->session->flashdata("error_msg"))
             { 
             ?>
               <div class="alert alert-danger alert-dismissable">
                 <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                 <?=$this->session->flashdata("error_msg")?>
               </div>
             <?php 
             } 
             ?>
               <form class="contact" id="contact-form" method="post" name="contact-form" action="<?=base_url().'contact/contact_form';?>">
                  <h3 class="heading-helper heading-helper--large editContent">drop us a line</h3>
                  <input id="name" name="name" class="contact__field" type="text" placeholder="Enter Name" required="">
                  <input class="contact__field" id="email" name="email" type="email" class="email" placeholder="Enter Email" required="">
                  <input class="contact__field" id="phone" name="phone" type="text" placeholder="Enter Phone" required="">
                  <textarea class="contact__field contact__area" id="message" name="message" placeholder="message"></textarea>
                  <button class="btn btn--decorated btn-warning btn-submit" type="submit">Send Message</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</section>
<?php 
include 'footer.php'; 
?>
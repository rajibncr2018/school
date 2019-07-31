<footer class="footer footer--info">
         <div class="container">
            <div class="row">
               <!-- Latest post -->
                  <div class="copy">
                      <span class="editContent" style="float:left; ">
                      INDUSBAND.COM
                      </span>
                  </div>
                  <div class="copy">
                     <div class="social social--default social--small" style="text-align: center;">
                        <!-- List with social icons -->
                        <ul>
                           <li class="social__item"><a class="social__link" href="<?=$settingsArray['twitter_link']?>" target="_blank"><i class="social__icon fa fa-twitter"></i></a></li>
                           <li class="social__item"><a class="social__link" href="<?=$settingsArray['facebook_link']?>" target="_blank"><i class="social__icon fa fa-facebook"></i></a></li>
                           <li class="social__item"><a class="social__link" href="?=$settingsArray['googleplus_link']?>" target="_blank"><i class="social__icon fa fa-youtube-play"></i></a></li>
                        </ul>
                     </div>
                  </div>
               <!-- end latest post -->
               <!-- Contact info about company -->
               
               <!-- end contact info -->
               <!-- Social links -->
                  <div class="copy">
                     <span class="editContent" style="float:right;">
                     © Indusband, 2019. All rights reserved.
                     </span>
                  </div>
               <!-- end social links -->
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </footer>
      <!-- player -->
      <link rel="stylesheet" href="<?=base_url()?>frontend/css/plyr.css" />
      <script src="<?=base_url()?>frontend/js/html5media.min.js"></script>
      <script src="<?=base_url()?>frontend/js/plyr.js"></script>
      <script src="<?=base_url()?>frontend/js/index-player.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="<?=base_url()?>frontend/js/audio.min.js"></script>
      <script>
         $('audio').initAudioPlayer();
      </script>
     
      </script>
      <!--// player -->
   </body>
</html>
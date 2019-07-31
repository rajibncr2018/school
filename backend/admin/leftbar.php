<div class="page-sidebar nav-collapse collapse">

			<!-- BEGIN SIDEBAR MENU -->        	

			<ul>

				<li>

					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

					<div class="sidebar-toggler hidden-phone"></div>

					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->

				</li>

				

				<li>&nbsp;</li>

				<li class="start <?=isset($group['dashboard']) && $group['dashboard'] ? $group['dashboard'] : "";?>">

					<a href="dashboard.php">

					<i class="icon-home"></i> 

					<span class="title">Dashboard</span>

					<span class="<?=isset($selected['dashboard']) && $selected['dashboard'] ? $selected['dashboard'] : "";?>"></span>

					</a>

				</li>

                

				<li class="has-sub <?=isset($group['seo']) && $group['seo'] ? $group['seo'] : "";?>">

					<a href="javascript:;">

					<i class="icon-bookmark-empty"></i> 

					<span class="title">SEO</span>

					<span class="<?=isset($selected['seo']) && $selected['seo'] ? $selected['seo'] : "";?>"></span>

					<span class="arrow <?=isset($arrowopen['seo']) && $arrowopen['seo'] ? $arrowopen['seo'] : "";?>"></span>

					</a>

					<ul class="sub">

						<li <?=isset($activepage['seo']) && $activepage['seo'] ? $activepage['seo']:"";?>><a href="seo.php">Manage SEO</a></li>

					</ul>

				</li>



				<li class="has-sub <?=isset($group['cms']) && $group['cms'] ? $group['cms'] : "";?>">

					<a href="javascript:;">

					<i class="icon-bookmark-empty"></i> 

					<span class="title">CMS Page</span>

					<span class="<?=isset($selected['cms']) && $selected['cms'] ? $selected['cms'] : "";?>"></span>

					<span class="arrow <?=isset($arrowopen['cms']) && $arrowopen['cms'] ? $arrowopen['cms'] : "";?>"></span>

					</a>

					<ul class="sub">

						<li <?=isset($activepage['cms']) && $activepage['cms'] ? $activepage['cms']:"";?>><a href="cms.php">Manage CMS</a></li>

					</ul>

				</li>

				<li class="has-sub <?=isset($group['banner']) && $group['banner'] ? $group['banner'] : "";?>">

					<a href="javascript:;">

					<i class="icon-bookmark-empty"></i> 

					<span class="title">Banner</span>

					<span class="<?=isset($selected['banner']) && $selected['banner'] ? $selected['banner'] : "";?>"></span>

					<span class="arrow <?=isset($arrowopen['banner']) && $arrowopen['banner'] ? $arrowopen['banner'] : "";?>"></span>

					</a>

					<ul class="sub">

						<li <?=isset($activepage['banner']) && $activepage['banner'] ? $activepage['banner']:"";?>><a href="banner.php">Manage Banner</a></li>

					</ul>

				</li>

				<!-- <li class="has-sub <?=isset($group['service']) && $group['service'] ? $group['service'] : "";?>">

					<a href="javascript:;">

					<i class="icon-bookmark-empty"></i> 

					<span class="title">Service</span>

					<span class="<?=isset($selected['service']) && $selected['service'] ? $selected['service'] : "";?>"></span>

					<span class="arrow <?=isset($arrowopen['service']) && $arrowopen['service'] ? $arrowopen['service'] : "";?>"></span>

					</a>

					<ul class="sub">

						<li <?=isset($activepage['service']) && $activepage['service'] ? $activepage['service']:"";?>><a href="service.php">Manage Service</a></li>

					</ul>

				</li> -->

				<li class="has-sub <?=isset($group['press']) && $group['press'] ? $group['press'] : "";?>">

					<a href="javascript:;">

					<i class="icon-bookmark-empty"></i> 

					<span class="title">Press</span>

					<span class="<?=isset($selected['press']) && $selected['press'] ? $selected['press'] : "";?>"></span>

					<span class="arrow <?=isset($arrowopen['press']) && $arrowopen['press'] ? $arrowopen['press'] : "";?>"></span>

					</a>

					<ul class="sub">

						<li <?=isset($activepage['press']) && $activepage['press'] ? $activepage['press']:"";?>><a href="press.php">Manage Press</a></li>

					</ul>

				</li>

				<li class="has-sub <?=isset($group['category']) && $group['category'] ? $group['category'] : "";?>">

					<a href="javascript:;">

					<i class="icon-bookmark-empty"></i> 

					<span class="title">Gallery</span>

					<span class="<?=isset($selected['category']) && $selected['category'] ? $selected['category'] : "";?>"></span>

					<span class="arrow <?=isset($arrowopen['category']) && $arrowopen['category'] ? $arrowopen['category'] : "";?>"></span>

					</a>

					<ul class="sub">

						<!-- <li <?=isset($activepage['category']) && $activepage['category'] ? $activepage['category']:"";?>><a href="category.php">Manage Category</a></li> -->

						<li <?=isset($activepage['gallery']) && $activepage['gallery'] ? $activepage['gallery']:"";?>><a href="gallery.php">Manage Image</a></li>

						<li <?=isset($activepage['audio']) && $activepage['audio'] ? $activepage['audio']:"";?>><a href="audio.php">Manage Audio</a></li>

						<li <?=isset($activepage['video']) && $activepage['video'] ? $activepage['video']:"";?>><a href="video.php">Manage Video</a></li>

					</ul>

				</li>

				<!-- <li class="has-sub <?=isset($group['client']) && $group['client'] ? $group['client'] : "";?>">

					<a href="javascript:;">

					<i class="icon-bookmark-empty"></i> 

					<span class="title">Client</span>

					<span class="<?=isset($selected['client']) && $selected['client'] ? $selected['client'] : "";?>"></span>

					<span class="arrow <?=isset($arrowopen['client']) && $arrowopen['client'] ? $arrowopen['client'] : "";?>"></span>

					</a>

					<ul class="sub">

						<li <?=isset($activepage['client']) && $activepage['client'] ? $activepage['client']:"";?>><a href="client.php">Manage Client</a></li>

					</ul>

				</li> -->

				<li class="has-sub <?=isset($group['show']) && $group['show'] ? $group['show'] : "";?>">

					<a href="javascript:;">

					<i class="icon-bookmark-empty"></i> 

					<span class="title">Show</span>

					<span class="<?=isset($selected['show']) && $selected['show'] ? $selected['show'] : "";?>"></span>

					<span class="arrow <?=isset($arrowopen['show']) && $arrowopen['show'] ? $arrowopen['show'] : "";?>"></span>

					</a>

					<ul class="sub">

						<li <?=isset($activepage['show']) && $activepage['show'] ? $activepage['show']:"";?>><a href="show.php">Manage Show</a></li>

					</ul>

				</li>

				<li class="has-sub <?=isset($group['project']) && $group['project'] ? $group['project'] : "";?>">

					<a href="javascript:;">

					<i class="icon-bookmark-empty"></i> 

					<span class="title">Project</span>

					<span class="<?=isset($selected['project']) && $selected['project'] ? $selected['project'] : "";?>"></span>

					<span class="arrow <?=isset($arrowopen['project']) && $arrowopen['project'] ? $arrowopen['project'] : "";?>"></span>

					</a>

					<ul class="sub">

						<li <?=isset($activepage['project']) && $activepage['project'] ? $activepage['project']:"";?>><a href="project.php">Manage Project</a></li>

					</ul>

				</li>

				<!-- <li class="has-sub <?=isset($group['creative']) && $group['creative'] ? $group['creative'] : "";?>">

					<a href="javascript:;">

					<i class="icon-bookmark-empty"></i> 

					<span class="title">Creative</span>

					<span class="<?=isset($selected['creative']) && $selected['creative'] ? $selected['creative'] : "";?>"></span>

					<span class="arrow <?=isset($arrowopen['creative']) && $arrowopen['creative'] ? $arrowopen['creative'] : "";?>"></span>

					</a>

					<ul class="sub">

						<li <?=isset($activepage['creative']) && $activepage['creative'] ? $activepage['creative']:"";?>><a href="creative.php">Manage Creative</a></li>

					</ul>

				</li>

				<li class="has-sub <?=isset($group['branding']) && $group['branding'] ? $group['branding'] : "";?>">

					<a href="javascript:;">

					<i class="icon-bookmark-empty"></i> 

					<span class="title">Branding</span>

					<span class="<?=isset($selected['branding']) && $selected['branding'] ? $selected['branding'] : "";?>"></span>

					<span class="arrow <?=isset($arrowopen['branding']) && $arrowopen['branding'] ? $arrowopen['branding'] : "";?>"></span>

					</a>

					<ul class="sub">

						<li <?=isset($activepage['branding']) && $activepage['branding'] ? $activepage['branding']:"";?>><a href="branding.php">Manage Branding</a></li>

					</ul>

				</li>

				<li class="has-sub <?=isset($group['booking']) && $group['booking'] ? $group['booking'] : "";?>">

					<a href="javascript:;">

					<i class="icon-bookmark-empty"></i> 

					<span class="title">Booking</span>

					<span class="<?=isset($selected['booking']) && $selected['booking'] ? $selected['booking'] : "";?>"></span>

					<span class="arrow <?=isset($arrowopen['booking']) && $arrowopen['booking'] ? $arrowopen['booking'] : "";?>"></span>

					</a>

					<ul class="sub">

						<li <?=isset($activepage['booking']) && $activepage['booking'] ? $activepage['booking']:"";?>><a href="booking.php">Manage Booking</a></li>

					</ul>

				</li>

				<li class="has-sub <?=isset($group['testimonial']) && $group['testimonial'] ? $group['testimonial'] : "";?>">

					<a href="javascript:;">

					<i class="icon-bookmark-empty"></i> 

					<span class="title">Testimonial</span>

					<span class="<?=isset($selected['testimonial']) && $selected['testimonial'] ? $selected['testimonial'] : "";?>"></span>

					<span class="arrow <?=isset($arrowopen['testimonial']) && $arrowopen['testimonial'] ? $arrowopen['testimonial'] : "";?>"></span>

					</a>

					<ul class="sub">

						<li <?=isset($activepage['testimonial']) && $activepage['testimonial'] ? $activepage['testimonial']:"";?>><a href="testimonial.php">Manage Testimonial</a></li>

					</ul>

				</li>  -->



				<!-- <li class="has-sub <?=isset($group['gallery']) && $group['gallery'] ? $group['gallery'] : "";?>">

					<a href="javascript:;">

					<i class="icon-bookmark-empty"></i> 

					<span class="title">Gallery</span>

					<span class="<?=isset($selected['gallery']) && $selected['gallery'] ? $selected['gallery'] : "";?>"></span>

					<span class="arrow <?=isset($arrowopen['gallery']) && $arrowopen['gallery'] ? $arrowopen['gallery'] : "";?>"></span>

					</a>

					<ul class="sub">

						<li <?=isset($activepage['gallery']) && $activepage['gallery'] ? $activepage['gallery']:"";?>><a href="gallery.php">Manage Gallery</a></li>

					</ul>

				</li> -->

				

				<li class="has-sub <?=isset($group['tools']) && $group['tools'] ? $group['tools'] : "";?>">

					<a href="javascript:;">

					<i class="icon-bookmark-empty"></i> 

					<span class="title">Tools</span>

					<span class="<?=isset($selected['tools']) && $selected['tools'] ? $selected['tools'] : "";?>"></span>

					<span class="arrow <?=isset($arrowopen['tools']) && $arrowopen['tools'] ? $arrowopen['tools'] : "";?>"></span>

					</a>

					<ul class="sub">

						<li <?=isset($activepage['settings']) && $activepage['settings'] ? $activepage['settings']:"";?>><a href="settings.php">Settings</a></li>

						<li <?=isset($activepage['changepass']) && $activepage['changepass'] ? $activepage['changepass']:"";?>><a href="changepass.php">Change Password</a></li>

						<li><a href="logout.php">Logout</a></li>

					</ul>

				</li>

			</ul>

			<!-- END SIDEBAR MENU -->

		</div>


<?php
   include("header.php");
   ?>
<section class="inr-bnr" style="background:url(<?=base_url()?>frontend/images/parralux.jpg) no-repeat center center; background-size:cover;">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <h1>Admission</h1>
            <a href="<?=base_url()?>">Home</a> &gt; <a href="<?=base_url().'admission'?>">Admission</a>
         </div>
      </div>
   </div>
</section>
<section class="schl-abt">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <p align="center"><strong>NORTH POINT SENIOR SECONDARY BOARDING SCHOOL <br>
               </strong>(UNDER NORTH POINT EDUCATION TRUST)<br>
               <strong>Arjunpur, Kolkata - 700 059 <br>
               Nangolpota, Matiagacha, Kamdhuni,
               <br>
               Rajarhat, Kharlbarl Road, Kolkata - 700135</strong>
            </p>

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
            <form action="<?=base_url().'admission_submit'?>" name="StudentRegistration" method="post" onsubmit="return(validate());">
               <p>
                  Application for Registration and Admission to Class
                  <select name="class">
                     <option value="" selected>select..</option>
                     <option value="Nursery">Nursery</option>
                     <option value="Upper KG">Upper KG</option>
                     <option value="Lower KG">Lower KG</option>
                     <option value="Class 1">Class 1</option>
                     <option value="Class 2">Class 2</option>
                     <option value="Class 3">Class 3</option>
                     <option value="Class 4">Class 4</option>
                     <option value="Class 5">Class 5</option>
                     <option value="Class 6">Class 6</option>
                     <option value="Class 7">Class 7</option>
                     <option value="Class 8">Class 8</option>
                     <option value="Class 9">Class 9</option>
                     <option value="Class 10">Class 10</option>
                     <option value="Class 11">Class 11</option>
                     <option value="Class 12">Class 12</option>
                  </select>
               </p>
               <p>For the Academic Session
                  <input type="text" name="Session" id="Session">
               </p>
               <p>Full Name 
                  <input type="text" name="CandName" id="CandName" size="67">
               </p>
               <p>Blood Group
                  <input name="BlGrp" type="text" id="BlGrp" size="40">
                  Sex : 
                  <input type="radio" name="sex" value="male" size="10">Male
                  <input type="radio" name="sex" value="Female" size="10">Female
               </p>
               <p>Name of Father / Guardian
                  <input type="text" name="FN" id="FN">
                  Mother
                  <input type="text" name="MN" id="MN">
               </p>
               <p>Present address
                  <input name="PresentAdd" type="text" id="PresentAdd" size="63">
               </p>
               <p>Pin Code
                  <input type="number" name="PresentPin" id="PresentPin">
                  Mobile No.
                  <input type="text" name="mobileno" id="mobileno" size="32">
               </p>
               <p>Permanent address
                  <input name="PermAdd" type="text" id="PermAdd" size="60">
               </p>
               <p>Pin Code
                  <input type="number" name="PermPin" id="PermPin">
                  Phone No.
                  <input type="text" name="PermPh" id="PermPh" size="33">
               </p>
               <p>
                  <label for="emailid">Email:</label>
                  <input name="emailid" type="email" id="emailid" size="71">
               </p>
               <p>Occupational Address of Guardian with designation, if any
                  <label for="Occ"></label>
                  <input name="Occ" type="text" id="Occ" size="23">
               </p>
               <p>Approximate Annual Income
                  <input name="Income" type="text" id="Income" size="50">
               </p>
               <p>Religion
                  <input name="Religion" type="text" id="Religion" size="30">
                  Nationality
                  <input name="Nationality" type="text" id="Nationality" size="23">
               </p>
               <p>Date of Birth 
                  <input type="date" name="DOB" id="DOB">
                  Birth Place
                  <input name="BirthPlace" type="text" id="BirthPlace" size="33">
               </p>
               <p>
                  State
                  <select name=State id="State">
                     <option value="">------------Select State------------</option>
                     <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                     <option value="Andhra Pradesh">Andhra Pradesh</option>
                     <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                     <option value="Assam">Assam</option>
                     <option value="Bihar">Bihar</option>
                     <option value="Chandigarh">Chandigarh</option>
                     <option value="Chhattisgarh">Chhattisgarh</option>
                     <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                     <option value="Daman and Diu">Daman and Diu</option>
                     <option value="Delhi">Delhi</option>
                     <option value="Goa">Goa</option>
                     <option value="Gujarat">Gujarat</option>
                     <option value="Haryana">Haryana</option>
                     <option value="Himachal Pradesh">Himachal Pradesh</option>
                     <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                     <option value="Jharkhand">Jharkhand</option>
                     <option value="Karnataka">Karnataka</option>
                     <option value="Kerala">Kerala</option>
                     <option value="Lakshadweep">Lakshadweep</option>
                     <option value="Madhya Pradesh">Madhya Pradesh</option>
                     <option value="Maharashtra">Maharashtra</option>
                     <option value="Manipur">Manipur</option>
                     <option value="Meghalaya">Meghalaya</option>
                     <option value="Mizoram">Mizoram</option>
                     <option value="Nagaland">Nagaland</option>
                     <option value="Orissa">Orissa</option>
                     <option value="Pondicherry">Pondicherry</option>
                     <option value="Punjab">Punjab</option>
                     <option value="Rajasthan">Rajasthan</option>
                     <option value="Sikkim">Sikkim</option>
                     <option value="Tamil Nadu">Tamil Nadu</option>
                     <option value="Tripura">Tripura</option>
                     <option value="Uttaranchal">Uttaranchal</option>
                     <option value="Uttar Pradesh">Uttar Pradesh</option>
                     <option value="West Bengal">West Bengal</option>
                  </select>
               </p>
               <p>Class Last Passed, if any
                  <input name="ClassPassed" type="text" id="ClassPassed" size="54">
               </p>
               <p>School Last Attended, if any
                  <input name="Schoolprev" type="text" id="Schoolprev" size="51">
               </p>
               <p>Through what source of information did  you become interested in this school
                  <input name="source" type="text" id="source" size="7">
               </p>
               <p>&nbsp;</p>
               <p><strong>FOR XI &amp; XII ONLY :</strong></p>
               <p>
                  Choose your Stream 
                  <select Name="State">
                     <option value="" selected>select..</option>
                     <option value="Arts">Arts</option>
                     <option value="Commerce">Commerce</option>
                     <option value="Science">Science</option>
                  </select>
                  Subject Combinations
                  <label for="textfield13"></label>
                  <input name="textfield13" type="text" id="textfield13" size="25">
               </p>
               <p>
                  <input type="submit" name="submit" id="submit" value="Submit">
                  <input type="reset" name="reset" id="reset" value="Reset">
               </p>
            </form>
         </div>
      </div>
   </div>
</section>
<?php
include("footer.php");
?>
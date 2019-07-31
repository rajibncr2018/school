<?php
include("config/connect.php");
$getdest = "SELECT * FROM ".TABLE_PREFIX."admission WHERE id = '".$_REQUEST['id']."'";
$getdest = mysql_query($getdest) or die(mysql_error());
$rowdest = mysql_fetch_array($getdest);

?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Admission From</title>
   
   
   
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      body {
  background: rgb(204,204,204); 
}
page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
page[size="A4"] {  
  width: 21cm;
  height: 29.7cm; 
}
page[size="A4"][layout="portrait"] {
  width: 29.7cm;
  height: 21cm;  
}
page[size="A3"] {
  width: 29.7cm;
  height: 42cm;
}
page[size="A3"][layout="portrait"] {
  width: 42cm;
  height: 29.7cm;  
}
page[size="A5"] {
  width: 14.8cm;
  height: 21cm;
}
page[size="A5"][layout="portrait"] {
  width: 21cm;
  height: 14.8cm;  
}
@media print {
  body, page {
    margin: 0;
    box-shadow: 0;
  }
}
    </style>
 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="css/style.css">
 
</head>
 
<body>
<page size="A4">
  <table>
  <thead>
    <tr>
      <th colspan="2" align="center">Admission Form</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td colspan="2" align="center"><strong>
        NORTH POINT SENIOR SECONDARY BOARDING SCHOOL<br>
        (UNDER NORTH POINT EDUCATION TRUST)</strong><br>
        <p>Arjunpur, Kolkata - 700 059
        Nangolpota, Matiagacha, Kamdhuni,<br>
        Rajarhat, Kharlbarl Road, Kolkata - 700135 </p>
      </td>
    </tr>
    <tr>
      <td><strong>Class</strong></td>
      <td><?=$rowdest['class'];?></td>
    </tr>
    <tr>
      <td><strong>Session</strong></td>
      <td><?=$rowdest['Session'];?></td>
    </tr>
    <tr>
      <td><strong>Candidate Name</strong></td>
      <td><?=$rowdest['CandName'];?></td>
    </tr>
    <tr>
      <td><strong>Blood Group</strong></td>
      <td><?=$rowdest['BlGrp'];?></td>
    </tr>
    <tr>
      <td><strong>Father Name</strong></td>
      <td><?=$rowdest['FN'];?></td>
    </tr>
    <tr>
      <td><strong>Mother Name</strong></td>
      <td><?=$rowdest['MN'];?></td>
    </tr>
    <tr>
      <td><strong>Present Address</strong></td>
      <td><?=$rowdest['PresentAdd'].','.$rowdest['PresentPin'];?></td>
    </tr>
    <tr>
      <td><strong>Mobile No</strong></td>
      <td><?=$rowdest['mobileno'];?></td>
    </tr>
    <tr>
      <td><strong>Parmanent Address</strong></td>
      <td><?=$rowdest['PermAdd'].','.$rowdest['PermPin'];?></td>
    </tr>
    <tr>
      <td><strong>Parmanent Phone</strong></td>
      <td><?=$rowdest['PermPh'];?></td>
    </tr>
    <tr>
      <td><strong>Email ID</strong></td>
      <td><?=$rowdest['emailid'];?></td>
    </tr>
    <tr>
      <td><strong>Occupation</strong></td>
      <td><?=$rowdest['Occ'];?></td>
    </tr>
    <tr>
      <td><strong>Religion</strong></td>
      <td><?=$rowdest['Religion'];?>l</td>
    </tr>
    <tr>
      <td><strong>Income</strong></td>
      <td><?=$rowdest['Income'];?></td>
    </tr>
    <tr>
      <td><strong>Date of Birth</strong></td>
      <td><?=$rowdest['DOB'];?>l</td>
    </tr>
    <tr>
      <td><strong>Birth Place</strong></td>
      <td><?=$rowdest['BirthPlace'];?>l</td>
    </tr>
    <tr>
      <td><strong>State</strong></td>
      <td><?=$rowdest['State'];?></td>
    </tr>
    <tr>
      <td><strong>Class Passed</strong></td>
      <td><?=$rowdest['ClassPassed'];?>l</td>
    </tr>
    <tr>
      <td><strong>Previous School</strong></td>
      <td><?=$rowdest['Schoolprev'];?>l</td>
    </tr>
    <tr>
      <td><strong>Submit Date</strong></td>
      <td><?=$rowdest['submit_date'];?></td>
    </tr>
    <tr>
      <td align="center" colspan="2"><button onclick="myFunction()">Print this page</button></td>
    </tr>
  </tbody>
</table>
</page>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  
<script>
function myFunction() {
    window.print();
}
</script>
</body>
</html>
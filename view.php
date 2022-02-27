
<?php
$mysqli = new mysqli('localhost', 'root', '1234', 'crud') or die(mysqli_error($mysqli));

if (isset($_GET['id'])) {  
      $id = $_GET['id'];  
      $query = "SELECT * FROM `data` WHERE id = '$id'";  
      $run = mysqli_query($mysqli,$query);  
      if ($num = mysqli_num_rows($run)>0) {  
                while ($result = mysqli_fetch_assoc($run)) {  
                  $nameC=$result['nameC'];
                  $image = $result['image'];
                  $nameC=$result['nameC'];
                  $nameE=$result['nameE'];
                  $gender=$result['gender'];
                  $blood=$result['blood'];
                  $dob=$result['dob'];
                  $height=$result['height'];
                  $cnic=$result['cnic'];
                  $weight=$result['weight'];
                  $education=$result['education'];
                  $msn=$result['msn'];
                  $subject=$result['subject'];
                  $level=$result['level'];
                  $address=$result['address'];
                  $paddress=$result['paddress'];
                  $pcode=$result['pcode'];
                  $nameemer=$result['nameemer'];
                  $relationship=$result['relationship'];
                  $telephone=$result['telephone'];
                  $frelationship=$result['frelationship'];
                  $fage=$result['fage'];
                  $position=$result['position'];
                  $ftelephone=$result['ftelephone'];
                  $fname=$result['fname'];
                 

                  
                }
                ?>
                

<!DOCtype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="index.css">
  <title></title>
</head>
<body>
  <?php include 'head.php';?>
  <div class="main-border">
  <h1 class="main-heading">Record of : <?php echo $nameE ?> </h1>
  </div>
  
<table >
  <tr>
    <td>name in Chinese</td>
    <td>
      <?php echo $nameC  ?>
    </td>
    <td>name in English</td>
    <td><input type="TEXT" name="nameE" value="<?php echo $nameE ?>" id="text-box"disabled/></td>
    <td>SEX</td>
    <td>
      <?php echo $gender  ?>

    </td>
     
      <img style="margin-left: 600px;" src="<?php echo $image ?>" width="150">

    
    
  </tr>
  <tr>
     <td>Blood type</td>
    <td>
      <input type="TEXT" name="blood" value="<?php echo $blood  ?>"  id="text-box" disabled >
    </td>
    <td>Date of Birth</td>
    <td>
      <input type="date" name="dob" value="<?php echo $dob  ?>" id="text-box" disabled>
    </td>
    <td>Height</td>
    <td>
      <input type="TEXT" name="height" value="<?php echo $height  ?>" id="text-box" disabled>
    </td>
  </tr>
  <tr>
     <td>ID Card text</td>
    <td>
      <input type="text" name="cnic" value="<?php echo $cnic  ?>" SIZE="20" id="text-box" disabled>
    </td>
    <td>Weight</td>
    <td>
      <input type="TEXT" name="weight" value="<?php echo $weight  ?>" SIZE="20" id="text-box" disabled>
    </td>
    <td>Educational</td>
    <td>
      <input type="TEXT" name="education" value="<?php echo $education  ?>" SIZE="20" id="text-box" disabled/>
    </td>
    
  </tr>
    <tr>
     <td>OO/MSN</td>
    <td>
      <input type="TEXT" name="msn" SIZE="20" value="<?php echo $msn  ?>" id="text-box" disabled>
    </td>
    <td>Major Subject</td>
    <td>
      <input type="TEXT" name="subject" SIZE="20" value="<?php echo $subject   ?>" id="text-box" disabled/>
    </td>
    <td>Highest Level</td>
    <td>
      <input type="TEXT" name="level" SIZE="20" value="<?php echo $level  ?>" id="text-box" disabled>
    </td>
  </tr>
    </tr>
    <tr>
     <td>Residental Address</td>
    <td>
      <input type="TEXT" name="address" SIZE="20" value="<?php echo $address   ?>" id="text-box"disabled />
    </td>
    <td>Present Address</td>
    <td>
      <input type="TEXT" name="paddress" SIZE="20" value="<?php echo $paddress  ?>" id="text-box" disabled/>
    </td>
      <td>Postal Code</td>
    <td>
      <input type="TEXT" name="pcode" SIZE="20" value="<?php echo $pcode  ?>" id="text-box"disabled/>
    </td>
  </tr>
   
</table>
<div class="third-border">
  <p class="third-heading">incase of emergency please inform the following person </p>
  </div>
  <table>
    <tr>
     <td>Name</td>
    <td>
      <input type="TEXT" name="nameemer" value="<?php echo $nameemer  ?>"  id="text-box" disabled/>
    </td>
    <td>Relationship</td>
    <td>
      <input type="TEXT" name="relationship" value="<?php echo $relationship  ?>"  id="text-box"disabled/>
    </td>
    <td>Telephone</td>
    <td>
      <input type="text" name="telephone" value="<?php echo $telephone  ?>"  id="text-box" disabled/>
    </td>
  </tr>
  </table>
  <div class="third-border">
  <p class="third-heading">Family Data </p>
  </div>
   <table>
    <tr>
    
    <td>
      <input type="TEXT" name="fname" value="<?php echo $fname  ?>"  id="text-box" placeholder="name" disabled/>
    </td>
    
    <td>
      <input type="TEXT" name="frelationship" value="<?php echo $frelationship  ?>"  id="text-box" placeholder="Relationship" disabled/>
    </td>
    
    <td>
      <input type="TEXT" name="fage" value="<?php echo $fage  ?>" id="text-box" placeholder="Age" disabled>
    </td>
      <td>
      <input type="TEXT" name="position" value="<?php echo $position  ?>"  id="text-box" placeholder="Working Company/Position" disabled>
    </td>
      <td>
      <input type="text" name="ftelephone" value="<?php echo $ftelephone  ?>"  id="text-box" placeholder="Telephone" disabled>
    </td>
  </tr>
  </table>
  <div class="buttons">
   
   <a href="studentlist.php"> Back to List</a>

   
</div>
<?php include 'footer.php'?>



</body>

</html>
                <?php


                
              }

       
 } 

?>


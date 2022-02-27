
<?php
$mysqli = new mysqli('localhost', 'root', '1234', 'crud') or die(mysqli_error($mysqli));
$id = $_GET['id'];
if(isset($_POST['update']))
{
  $nameC=$_POST['nameC'];
  $nameE=$_POST['nameE'];
  $gender=$_POST['gender'];
  $blood=$_POST['blood'];
  $dob=$_POST['dob'];
  $height=$_POST['height'];
  $cnic=$_POST['cnic'];
  $weight=$_POST['weight'];
  $education=$_POST['education'];
  $msn=$_POST['msn'];
  $subject=$_POST['subject'];
  $level=$_POST['level'];
  $address=$_POST['address'];
  $paddress=$_POST['paddress'];
  $pcode=$_POST['pcode'];
  $nameemer=$_POST['nameemer'];
  $relationship=$_POST['relationship'];
  $telephone=$_POST['telephone'];
  $fname=$_POST['fname'];
  $frelationship=$_POST['frelationship'];
  $fage=$_POST['fage'];
  $position=$_POST['position'];
  $ftelephone=$_POST['ftelephone'];
  $files = $_FILES['image'];
  $filename = $files['name'];
  $fileerror = $files['error'];
  $filetemp = $files['tmp_name'];
  $fileext = explode('.',$filename);
  $filecheck = strtolower(end($fileext));
  $fileextstored = array('png', 'jpg', 'jpeg');
  if(in_array($filecheck,$fileextstored))
  {
    $destinationfile = "Pictures/".$filename;
    move_uploaded_file($filetemp,$destinationfile);
   if (isset($_GET['id'])) {  
    $id = $_GET['id'];
           $query="UPDATE `data` SET `id`='$id' ,`nameC`='$nameC',`nameE`='$nameE',`gender`='$gender',`image`='$destinationfile',`blood`='$blood',`dob`='$dob',`height`='$height',`cnic`='$cnic',`weight`='$weight',`education`='$education',`msn`='$msn',`subject`='$subject',`level`='$level',`address`='$address',`paddress`='$paddress',`pcode`='$pcode',`nameemer`=' $nameemer',`relationship`='$relationship',`telephone`='$telephone',`fname`='$fname',`frelationship`='$frelationship',`fage`=' $fage',`position`='$position',`ftelephone`=' $ftelephone' WHERE id = '$id'";  
        $queryF=mysqli_query($mysqli,$query) ;
        header('location:studentlist.php');
      }  
 } 

}
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
  <div class="main-border">
  <h1 class="main-heading">Edit Form </h1>
  </div>
  <div class="second-border">
  <p class="second-heading">Date: </p>
  </div>
  </div>
  <div class="third-border">
  <p class="third-heading">Personal Data & Contacts </p>
  </div>
  <form METHOD="POST" action="" enctype="multipart/form-data">
<table >
  <tr>
    <td>Name in Chinese</td>
    <td>
      <input type="TEXT" name="nameC" value="<?php echo $nameC  ?>"  id="text-box" required />
    </td>
    <td>Name in English</td>
    <td><input type="TEXT" name="nameE" value="<?php echo $nameE ?>" id="text-box"required/></td>
    <td>SEX</td>  
    <td>
      <input type="radio" name="gender"  value="Male" ><label>Male</label><br/>
      <input type="radio" name="gender"  value="Female"><label>Female</label>

    </td>

     <td>
      <label style="text-align: center;">(photo)</label><br/>
      <input type="file" name="image" required/>

    </td>
  </tr>
  <tr>
     <td>Blood type</td>
    <td>
      <input type="TEXT" name="blood" value="<?php echo $blood  ?>"  id="text-box" required >
    </td>
    <td>Date of Birth</td>
    <td>
      <input type="date" name="dob" value="<?php echo $dob  ?>" id="text-box" required>
    </td>
    <td>Height</td>
    <td>
      <input type="TEXT" name="height" value="<?php echo $height  ?>" id="text-box"required>
    </td>
  </tr>
  <tr>
     <td>ID Card Number</td>
    <td>
      <input type="Number" name="cnic" value="<?php echo $cnic  ?>" SIZE="20" id="text-box" required>
    </td>
    <td>Weight</td>
    <td>
      <input type="TEXT" name="weight" value="<?php echo $weight?>" SIZE="20" id="text-box">
    </td>
    <td>Educational</td>
    <td>
      <input type="TEXT" name="education" value="<?php echo $education  ?>" SIZE="20" id="text-box" required/>
    </td>
    
  </tr>
    <tr>
     <td>OO/MSN</td>
    <td>
      <input type="TEXT" name="msn" SIZE="20" value="<?php echo $msn  ?>" id="text-box" required/>
    </td>
    <td>Major Subject</td>
    <td>
      <input type="TEXT" name="subject" SIZE="20" value="<?php echo $subject   ?>" id="text-box" required/>
    </td>
    <td>Highest Level</td>
    <td>
      <input type="TEXT" name="level" SIZE="20" value="<?php echo $level  ?>" id="text-box" required/>
    </td>
  </tr>
    </tr>
    <tr>
     <td>Residental Address</td>
    <td>
      <input type="TEXT" name="address" SIZE="20" value="<?php echo $address   ?>" id="text-box"required />
    </td>
    <td>Present Address</td>
    <td>
      <input type="TEXT" name="paddress" SIZE="20" value="<?php echo $paddress  ?>" id="text-box" required/>
    </td>
      <td>Postal Code</td>
    <td>
      <input type="TEXT" name="pcode" SIZE="20" value="<?php echo $pcode  ?>" id="text-box"required/>
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
      <input type="TEXT" name="nameemer" value="<?php echo $nameemer  ?>"  id="text-box" rwquired/>
    </td>
    <td>Relationship</td>
    <td>
      <input type="TEXT" name="relationship" value="<?php echo $relationship  ?>"  id="text-box"reqquired/>
    </td>
    <td>Telephone</td>
    <td>
      <input type="Number" name="telephone" value="<?php echo $telephone  ?>"  id="text-box" required/>
    </td>
  </tr>
  </table>
  <div class="third-border">
  <p class="third-heading">Family Data </p>
  </div>
   <table>
    <tr>
    
    <td>
      <input type="TEXT" name="fname" value="<?php echo $fname  ?>"  id="text-box" placeholder="name" required/>
    </td>
    
    <td>
      <input type="TEXT" name="frelationship" value="<?php echo $frelationship  ?>"  id="text-box" placeholder="Relationship" required/>
    </td>
    
    <td>
      <input type="TEXT" name="fage" value="<?php echo $fage  ?>" id="text-box" placeholder="Age">
    </td>
      <td>
      <input type="TEXT" name="position" value="<?php echo $position  ?>"  id="text-box" placeholder="Working Company/Position">
    </td>
      <td>
      <input type="text" name="ftelephone" value="<?php echo $ftelephone  ?>"  id="text-box" placeholder="Telephone" required>
    </td>
  </tr>
  </table>
  <div class="buttons">
   <button type="Submit" name="update" href="#" class="btn btn-primary">Update</button>
   <a href="studentlist.php"> Back to List</a>

   
</div>
</form>



</body>
<script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "studentlist.php";
    };
</script>
</html>
                <?php


                
              }

       
 } 

?>


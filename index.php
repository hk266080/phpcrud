<?php
$mysqli = new mysqli('localhost', 'root', '1234', 'crud') or die(mysqli_error($mysqli));
 if(isset($_POST['save']))
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
      $mysqli->query("INSERT INTO `data`( `nameC`, `nameE`, `gender`, `image`, `blood`, `dob`, `height`, `cnic`, `weight`, `education`, `msn`, `subject`, `level`, `address`, `paddress`, `pcode`, `nameemer`, `relationship`, `telephone`, `fname`, `frelationship`, `fage`, `position`, `ftelephone`) VALUES ('$nameC','$nameE','$gender','$destinationfile','$blood','$dob','$height','$cnic','$weight','$education','$msn','$subject','$level','$address','$paddress','$pcode','$nameemer','$relationship','$telephone','$fname','$frelationship','$fage',' $position',' $ftelephone')");

  }


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
	<h1 class="main-heading">Student Registration Form </h1>
	</div>
	<div class="second-border">
	<p class="second-heading">Date: </p>
	</div>
	</div>
	<div class="third-border">
	<p class="third-heading">Personal Data & Contacts </p>
	</div>
	<form METHOD="POST" action=""  enctype="multipart/form-data" id="myForm">
<table >
  <tr>
    <td>Name in Chinese</td>
    <td>
      <input type="TEXT" style="height: 35px; font-size: 14px; border: none;" class="nameC" name="nameC"  value="<?php echo isset($_POST['nameC']) ? $_POST['nameC'] : ''; ?>" id="text-box" required/>
    </td>
    <td>Name in English</td>
    <td><input type="TEXT" style="height: 35px; font-size: 14px; border: none;" class="nameE" name="nameE"  value="<?php echo isset($_POST['nameE']) ? $_POST['nameE'] : ''; ?>" id="text-box-t" required/></td>
    <td>SEX</td>
    <td>
    	<input type="radio" name="gender"  value="Male" /><label>Male</label><br/>
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
      <input type="TEXT" class="blood" style="height: 35px; font-size: 14px; border: none;" name="blood" value="<?php echo isset($_POST['blood']) ? $_POST['blood'] : ''; ?>" id="text-box-fiv"required/>
    </td>
    <td>Date of Birth</td>
    <td>
      <input type="date" style="height: 35px; font-size: 14px; border: none;" class="dob" name="dob" value="<?php echo isset($_POST['dob']) ? $_POST['dob'] : ''; ?>"  id="text-box-six" required/>
    </td>
    <td>Height</td>
    <td>
      <input type="TEXT" class="height" style="height: 35px; font-size: 14px; border: none;" name="height" value="<?php echo isset($_POST['height']) ? $_POST['height'] : ''; ?>"  id="text-box-sv" required/>
    </td>
  </tr>
  <tr>
     <td>ID Card Number</td>
    <td>
      <input type="Number" class="cnic" style="height: 35px; font-size: 14px; border: none;" name="cnic" SIZE="20" value="<?php echo isset($_POST['cnic']) ? $_POST['cnic'] : ''; ?>" id="text-box-e" required/>
    </td>
    <td>Weight</td>
    <td>
      <input type="TEXT" class="weight" style="height: 35px; font-size: 14px; border: none;" name="weight" SIZE="20" value="<?php echo isset($_POST['weight']) ? $_POST['weight'] : ''; ?>" id="text-box-n" required/>
    </td>
    <td>Educational</td>
    <td>
      <input type="TEXT" class="education" style="height: 35px; font-size: 14px; border: none;" name="education" SIZE="20" value="<?php echo isset($_POST['education']) ? $_POST['education'] : ''; ?>" id="text-box-tn" required />
    </td>
    
  </tr>
    <tr>
     <td>OO/MSN</td>
    <td>
      <input type="TEXT" class="msn" style="height: 35px; font-size: 14px; border: none;"  name="msn" SIZE="20"  value="<?php echo isset($_POST['msn']) ? $_POST['msn'] : ''; ?>" id="text-box-elv" required>
    </td>
    <td>Major Subject</td>
    <td>
      <input type="TEXT" class="subject" name="subject" style="height: 35px; font-size: 14px; border: none;" SIZE="20" value="<?php echo isset($_POST['subject']) ? $_POST['subject'] : ''; ?>"  id="text-box-twl" required>/
    </td>
    <td>Highest Level</td>
    <td>
      <input type="TEXT" class="level" name="level" SIZE="20" style="height: 35px; font-size: 14px; border: none;" value="<?php echo isset($_POST['level']) ? $_POST['level'] : ''; ?>" id="text-box-trt" required/>
    </td>
  </tr>
    </tr>
    <tr>
     <td>Residental Address</td>
    <td>
      <input type="TEXT" class="address" style="height: 35px; font-size: 14px; border: none;"  name="address" SIZE="20" value="<?php echo isset($_POST['address']) ? $_POST['address'] : ''; ?>" id="text-box-frt" required/>
    </td>
    <td>Present Address</td>
    <td>
      <input type="TEXT" class="paddress" style="height: 35px; font-size: 14px; border: none;"  name="paddress" value="<?php echo isset($_POST['paddress']) ? $_POST['paddress'] : ''; ?>" SIZE="20" id="text-box-fif" required/>
    </td>
      <td>Postal Code</td>
    <td>
      <input type="TEXT" class="pcode" style="height: 35px; font-size: 14px; border: none;"  name="pcode" value="<?php echo isset($_POST['pcode']) ? $_POST['pcode'] : ''; ?>" SIZE="20" id="text-box-sx" required/>
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
      <input type="TEXT" class="nameemer" style="height: 35px; font-size: 14px;" name="nameemer" value="<?php echo isset($_POST['nameemer']) ? $_POST['nameemer'] : ''; ?>"  id="text-box-st" required/>
    </td>
    <td>Relationship</td>
    <td>
      <input type="TEXT" class="relationship" style="height: 35px; font-size: 14px;" name="relationship" style="height: 35px; font-size: 14px;" value="<?php echo isset($_POST['relationship']) ? $_POST['relationship'] : ''; ?>"  id="text-box=Et" required/>
    </td>
    <td>Telephone</td>
    <td>
      <input type="Number" class="telephone" style="height: 35px; font-size: 14px;" name="telephone" value="<?php echo isset($_POST['telephone']) ? $_POST['telephone'] : ''; ?>"  id="text-box-Nn" required/>
    </td>
  </tr>
  </table>
  <div class="third-border">
  <p class="third-heading">Family Data </p>
  </div>
   <table>
    <tr>
    
    <td>
      <input type="TEXT" class="fname" style="height: 40px; font-size: 14px; border: none;" name="fname" value="<?php echo isset($_POST['fname']) ? $_POST['fname'] : ''; ?>"  id="text-box-to" placeholder="name" required/>
    </td>
    
    <td>
      <input type="TEXT" class="frelationship" name="frelationship" style="height: 35px; font-size: 14px;" value="<?php echo isset($_POST['frelationship']) ? $_POST['frelationship'] : ''; ?>"  id="text-box-ttw" placeholder="Relationship" required/>
    </td>
    
    <td>
      <input type="TEXT" class="fage" style="height: 35px; font-size: 14px;" name="fage" value="<?php echo isset($_POST['fage']) ? $_POST['fage'] : ''; ?>"  id="text-box-tt" placeholder="Age">
    </td>
      <td>
      <input type="TEXT" class="position" name="position" value="<?php echo isset($_POST['position']) ? $_POST['position'] : ''; ?>"  id="text-box-tfr" style="height: 35px; font-size: 14px;" placeholder="Working Company/Position">
    </td>
      <td>
      <input type="Number" class="tb" name="ftelephone" value="<?php echo isset($_POST['ftelephone']) ? $_POST['ftelephone'] : ''; ?>" style="height: 35px; font-size: 14px;"  id="text-box-tf" placeholder="Telephone" required/>
    </td>
  </tr>
  </table>
  <div class="buttons">
   <button type="Submit" name="save" href="#" class="btn btn-primary" >SAVE</button>
   <input type="button" onclick="location.href='studentlist.php';"  value="Student List" />
   <input type="button" name="reset" value="Clear" onclick="updateForm();">
   
   
   
</div>
</form>

<?php include 'footer.php'?>

</body>
<script type="text/javascript">
function updateForm()
{
  
    document.getElementById("text-box").value = "";
    document.getElementById("text-box-tf").value = "";
    document.getElementById("text-box-tfr").value = "";
    document.getElementById("text-box-tt").value = "";
    document.getElementById("text-box-to").value = "";
    document.getElementById("text-box-ttw").value = "";
    document.getElementById("text-box-Nn").value = "";
    document.getElementById("text-box=Et").value = "";
    document.getElementById("text-box-st").value = "";
    document.getElementById("text-box-sx").value = "";
    document.getElementById("text-box-fif").value = "";
    document.getElementById("text-box-frt").value = "";
    document.getElementById("text-box-trt").value = "";
    document.getElementById("text-box-twl").value = "";
    document.getElementById("text-box-elv").value = "";
    document.getElementById("text-box-tn").value = "";
    document.getElementById("text-box-n").value = "";
    document.getElementById("text-box-e").value = "";
    document.getElementById("text-box-sv").value = "";
    document.getElementById("text-box-six").value = "";
    document.getElementById("text-box-fiv").value = "";
    document.getElementById("text-box-f").value = "";
    document.getElementById("text-box-tw").value = "";
 
}
</script>
</html>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="stdent.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+HKoQE36HtLF5197bKMEQxNCRg85tBk5mcLUj99nPoxTR+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Student List</title>
</head>
<body>
	<?php 
    require("head.php");
   ?>
		<div class="main-border">
	<h1 class="main-heading">STUDENT LIST </h1>
	</div>
<table class="table text-center">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Blood</th>
      <th scope="col">Gender</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  	<?php

		$mysqli = new mysqli('localhost', 'root', '1234', 'crud') or die(mysqli_error($mysqli));
	if (isset($_GET['id'])) {  
      $id = $_GET['id'];  
      $query = "DELETE FROM `data` WHERE id = '$id'";  
      $run = mysqli_query($mysqli,$query);  

       
 }  
		$displayquery = "SELECT * FROM `data`";
		$querydispaly = mysqli_query($mysqli,$displayquery);
		$rows = mysqli_num_rows($querydispaly);
        
        
           if ($num = mysqli_num_rows($querydispaly)>0) {  
                while ($result = mysqli_fetch_assoc($querydispaly)) {  
                     echo "  
                          <tr class='data'>  
                               <td>".$result['id']."</td> 
                               <td>".$result['nameE']."</td>   
                               <td>".$result['blood']."</td>  
                               <td>".$result['gender']."</td>  
                               <td>
                               <a href='studentlist.php?id=".$result['id']."' id='btn'>Delete</a>|
                                <a href='form.php?id=".$result['id']."' class='opt'>Edit/Update</a> |
                                <a href='view.php?id=".$result['id']."' class='opt'>View</a>

                               </td>

                          </tr>  
                     ";  
                }  
           }  
      ?>  

  </tbody>
</table>

    
  </tbody>
</table>
<?php include 'footer.php'?>
</body>
</html>
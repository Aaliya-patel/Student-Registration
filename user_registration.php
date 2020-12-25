<html>
	<head>
		<title>Student's Registration Form</title>
	</html>
	
<body>
<form method='POST' action='user_registration.php'>
<table width='500' border='3' align='center'>
	<tr>
		<th bgcolor='sky blue'> student's Registration Form</th>
	</tr>
	<tr>
		<td>Student's Name:</td>
		<td><input type='text' name='user_name'>
		<font color='red'><?php echo @$_GET['name']; ?>
		</font>
		</td>
	</tr>
	
	<tr>
		<td>USN:</td>
		<td><input type='text' name='university_number'>
		<font color='red'><?php echo @$_GET['name']; ?>
		</font>
		</td>
	</tr>
	
	<tr>
		<td>Branch:</td>
		<td>
		<select name='department'>
		<option value='null'></option>
		<option>CS</option>
		<option>EC</option>
		<option>EE</option>
		<option>Mechanical</option>
		<option>civil</option>
		<option>IS</option>
		<option>Aeronatics</option>
		
		</select>
		</td>
	</tr>
	
	<tr>
		<td>semester:</td>
		<td>
		<Select name='sem'>
		<option value='null'></option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		</select>
		
		</td>
	</tr>
	
	<tr>
		<td>Gender:</td>
		<td>
		<Select name='gen'>
		<option value='null'></option>
		<option>Male</option>
		<option>Female</option>
		</td>
	</tr>
	
	<tr>
		<td>Contact Number:</td>
		<td><input type='text' name='mobile_number'></td>
	</tr>
	
	<tr>
		<td>Address:</td>
		<td><input type='text' name='Address_name'></td>
	</tr>
	
	<tr>
		<td>Subject Name:</td>
		<td><input type='text' name='subject_name'></td>
	</tr>
	
	<tr>
		<td>IA1:</td>
		<td><input type='text' name='IA1_marks'></td>
	</tr>
	
	<tr>
		<td>IA2:</td>
		<td><input type='text' name='IA2_marks'></td>
	</tr>
	
	<tr>
		<td>IA3:</td>
		<td><input type='text' name='IA3_marks'></td>
	</tr>
	<tr>
		<td align='center'>
		<input type='Submit' name='Submit' value='Submit'>
	</tr>
	

</table>
</form>
</body>
</html>

<?php
	  $servername = "localhost";
      $username = "root";
      $password = "";
      $db = 'students';
      
      // Create connection
      $conn = mysqli_connect($servername, $username, $password, $db);
      
if(isset($_POST['Submit']))
{
	echo  $name = $_POST['user_name'];
    echo  $usn = $_POST['university_number'];
    echo  $branch = $_POST['department'];
    echo  $semester = $_POST['sem'];
    echo  $gender = $_POST['gen'];
    echo  $cno = $_POST['mobile_number'];
     echo $address = $_POST['Address_name'];
     echo $sn = $_POST['subject_name'];
    echo  $ia1 = $_POST['IA1_marks'];
     echo $ia2 = $_POST['IA2_marks'];
	 echo $ia3 = $_POST['IA3_marks'];
if($name ==''){
	echo
	"<script>window.open('user_registration.php?stuname=Enter name','_self')</script>";
	exit();
}
if($usn ==''){
	echo
	"<script>window.open('user_registration.php?uninum=Enter usn','_self')</script>";
	exit();
}
if($branch ==''){
	echo
	"<script>window.open('user_registration.php?bran=Enter branch','_self')</script>";
	exit();
}
if($semester ==''){
	echo
	"<script>window.open('user_registration.php?seme=Enter semes','_self')</script>";
	exit();
}
if($gender ==''){
	echo
	"<script>window.open('user_registration.php?Gene=Enter gender','_self')</script>";
	exit();
}
if($cno ==''){
	echo
	"<script>window.open('user_registration.php?Cellno=Enter cell no','_self')</script>";
	exit();
}
if($address ==''){
	echo
	"<script>window.open('user_registration.php?Addre=Enter address','_self')</script>";
	exit();
}
if($sn ==''){
	echo
	"<script>window.open('user_registration.php?subna=Enter subjectname','_self')</script>";
	exit();
}
if($ia1 ==''){
	echo
	"<script>window.open('user_registration.php?internal1=Enter marks','_self')</script>";
	exit();
}
if($ia2 ==''){
	echo
	"<script>window.open('user_registration.php?internal2=Enter marks','_self')</script>";
	exit();
}
if($ia3 ==''){
	echo
	"<script>window.open('user_registration.php?internal3=Enter marks','_self')</script>";
	exit();
}
if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
      }
      echo "Connected successfully";

      $sql = "insert into u_reg (Name,USN,Branch,Semester,Gender,contact_number,Address,Sub_Name,IA1,IA2,IA3)
			values('$name','$usn','$branch','$semester','$gender','$cno','$address','$sn','$ia1','$ia2','$ia3')";

      if ($conn->query($sql) === TRUE) { 
           echo "New record created successfully";
      } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
      }

      mysqli_close($conn);
}
?>
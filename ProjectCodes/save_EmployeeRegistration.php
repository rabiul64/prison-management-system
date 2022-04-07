<?php

include_once "connection.php";

$sql="INSERT INTO employee

(last_name,first_name,gender,age,religion,blood_group,department_name,phone,joining_date,salary)

VALUES('".$_POST['last_name']."','".$_POST['first_name']."','".$_POST['gender']."','".$_POST['age']."','".$_POST['religion']."',
       '".$_POST['blood_group']."','".$_POST['department_name']."','".$_POST['phone']."','".$_POST['joining_date']."','".$_POST['salary']."');";

 if(mysqli_query($con, $sql)){
  ?>


	<script>window.location='employee list.php'</script>

<?php

}
else
{
	echo "Error: ". $sql . "<br>" . mysqli_error($con);

}
mysqli_close($con);

 ?>

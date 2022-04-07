<?php

include_once "connection.php";

$sql="INSERT INTO prisoner

(last_name,first_name,gender,age,blood_group,address,criminal_type,crime_type,arrival_date,allocated_cell,case_no,cell)

VALUES('".$_POST['last_name']."','".$_POST['first_name']."','".$_POST['gender']."','".$_POST['age']."','".$_POST['blood_group']."',
       '".$_POST['address']."','".$_POST['criminal_type']."','".$_POST['crime_type']."','".$_POST['arrival_date']."','".$_POST['allocated_cell']."','".$_POST['case_no']."','".$_POST['cell']."');";

 if(mysqli_query($con, $sql)){
  ?>


	<script>window.location='prisoner list.php'</script>

<?php

}
else
{
	echo "Error: ". $sql . "<br>" . mysqli_error($con);

}
mysqli_close($con);

 ?>

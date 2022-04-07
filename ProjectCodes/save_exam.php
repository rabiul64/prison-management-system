<?php

include_once "connection.php";


$sql="INSERT INTO exam

(names, date, exam)

VALUES('".$_POST['name']."','".$_POST['dates']."','".$_POST['examination']."');";


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

<?php

include_once "connection.php";

$sql="INSERT INTO visitors

(last_name,first_name,mobile,address,arrival_date,arrival_time,visited_to,search_prisoner_ID)

VALUES('".$_POST['last_name']."','".$_POST['first_name']."','".$_POST['mobile']."','".$_POST['address']."','".$_POST['arrival_date']."',
       '".$_POST['arrival_time']."','".$_POST['visited_to']."','".$_POST['search_prisoner_ID']."');";

 if(mysqli_query($con, $sql)){
  ?>


	<script>window.location='visitor list.php'</script>

<?php

}
else
{
	echo "Error: ". $sql . "<br>" . mysqli_error($con);

}
mysqli_close($con);

 ?>
 

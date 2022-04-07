<?php include 'inc/header.php'; ?>

<?php

include_once "connection.php";


if(!mysqli_connect_errno())
{
	$doctors = mysqli_query($con,"SELECT * FROM prison_doctor ORDER BY doctor_id");

	mysqli_close($con);

}
?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Duty doctors List
                        </h1>

                        <center><p> This is a list for Duty doctors who are registered here </p><center>

                        
                        <table class="table table-bordered table-hover"   id="example" class="display" style="width:100%">
	<thead>
		<th>ID</th>
		<th>Name</th>
		<th>Specitality</th>
		<th>Gender</th>
		<th>Salary</th>
		<th>Religion</th>
		<th>Blood Group</th>
		<th>Phone</th>
		<th>Joining Date</th>
	
		
		
	</thead>
	<tbody>
		<?php
		$sl_no=1;
	 foreach($doctors as $doctor){ ?>


				<tr>

				<td><?php echo $doctor['doctor_id'];?></td>

				<td><?php echo $doctor['first_name'].' '.$doctor['last_name'];?></td>

				<td><?php echo $doctor['speciality'];?></td>

				<td><?php echo $doctor['gender'];?></td>

				

				<td><?php echo $doctor['salary'];?></td>

				
				
				<td><?php echo $doctor['religion'];?></td>
				
				<td><?php echo $doctor['blood_group'];?></td>
				
				<td><?php echo $doctor['phone'];?></td>

				<td><?php echo $doctor['joining_date'];?></td>

				

				

				

				</tr>
				<?php
				$sl_no++;
	};?>
	</tbody>


</table>
<button class="btn btn-primary" onclick="printIt();"><span class="glyphicon glyphicon-print"></span>	Print</button> 
                        
                    </div>
                </div>
                <!-- /.row -->

            

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php include 'inc/footer.php'; ?>
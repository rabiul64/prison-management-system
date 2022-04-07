<?php include 'inc/header.php'; ?>

<?php

include_once "connection.php";


if(!mysqli_connect_errno())
{
	$officers = mysqli_query($con,"SELECT * FROM duty_officer ORDER BY officer_id");

	mysqli_close($con);

}
?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Duty Officers List
                        </h1>

                        <center><p> This is a list for Duty Officers who are registered here </p><center>

                        <table class="table table-bordered table-hover"   id="example" class="display" style="width:100%">
	<thead>
		<th>ID</th>
		<th>Name</th>
		<th>Rank</th>
		<th>Gender</th>
		<th>Blood Group</th>
		<th>Salary</th>
		<th>Religion</th>
		<th>Joining Date</th>
		<th>Working Shift</th>
		<th>Contact No</th>
	
		
		
	</thead>
	<tbody>
		<?php
		$sl_no=1;
	 foreach($officers as $officer){ ?>


				<tr>

				<td><?php echo $officer['officer_id'];?></td>

				<td><?php echo $officer['first_name'].' '.$officer['last_name'];?></td>

				<td><?php echo $officer['rank'];?></td>

				<td><?php echo $officer['gender'];?></td>

				<td><?php echo $officer['blood_group'];?></td>

				<td><?php echo $officer['salary'];?></td>

				<td><?php echo $officer['religion'];?></td>

				<td><?php echo $officer['joining_date'];?></td>

				<td><?php echo $officer['working_shift'];?></td>

				<td><?php echo $officer['contact_no'];?></td>

				

				

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
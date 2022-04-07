<?php include 'inc/header.php'; ?>

<?php

include_once "connection.php";


if(!mysqli_connect_errno())
{
	$prisoners = mysqli_query($con,"SELECT * FROM prisoner ORDER BY prisoner_id");

	mysqli_close($con);

}
?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Prisoner List
                        </h1>
                        <center><p> This is a list for prisoners who are registered here </p><center>
                        <table class="table table-bordered"   id="example" class="display" style="width:100%">
	<thead>
		<th>ID</th>
		<th>Name</th>
		<th>Gender</th>
		<th>Criminal Type</th>
		<th>Age</th>
		<th>Cell</th>
		<th>Arrival Date</th>
		<th>Allocated cell</th>
		<th>Crime Type</th>
		<th>Blood Group</th>
		<th>Address</th>
		<th>Case No.</th>
		
		
	</thead>
	<tbody>
		<?php
		$sl_no=1;
	 foreach($prisoners as $prisoner){ ?>


				<tr>

				<td><?php echo $prisoner['prisoner_id'];?></td>

				<td><?php echo $prisoner['first_name'].' '.$prisoner['last_name'];?></td>

				<td><?php echo $prisoner['gender'];?></td>

				<td><?php echo $prisoner['criminal_type'];?></td>

				<td><?php echo $prisoner['age'];?></td>

				<td><?php echo $prisoner['cell'];?></td>

				<td><?php echo $prisoner['arrival_date'];?></td>

				<td><?php echo $prisoner['allocated_cell'];?></td>

				<td><?php echo $prisoner['crime_type'];?></td>

				<td><?php echo $prisoner['blood_group'];?></td>

				<td><?php echo $prisoner['address'];?></td>

				<td><?php echo $prisoner['case_no'];?></td>

				

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
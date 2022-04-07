<?php include 'inc/header.php'; ?>

<?php

include_once "connection.php";


if(!mysqli_connect_errno())
{
	$doctors = mysqli_query($con,"SELECT * FROM visitors ORDER BY visitor_id");

	mysqli_close($con);

}
?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Visitors List 
                        </h1>

                        <center><p> This is a list for visitors who are registered here </p><center>

                        <table class="table table-bordered table-hover"   id="example" class="display" style="width:100%">
	<thead>
		<th>ID</th>
		<th>Name</th>
		<th>Mobile</th>
		<th>Address</th>
		<th>Arrival Date</th>
		<th>Arrival Time</th>
		<th>Visited To Prisoner (ID)</th>
		
		
		
	</thead>
	<tbody>
		<?php
		$sl_no=1;
	 foreach($doctors as $doctor){ ?>


				<tr>

				<td><?php echo $doctor['visitor_id'];?></td>

				<td><?php echo $doctor['first_name'].' '.$doctor['last_name'];?></td>

				<td><?php echo $doctor['mobile'];?></td>

				<td><?php echo $doctor['address'];?></td>
				
				<td><?php echo $doctor['arrival_date'];?></td>

				

				<td><?php echo $doctor['arrival_time'];?></td>

				
				
				<td><?php echo $doctor['visited_to'];?></td>
				
				
				

				

				

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
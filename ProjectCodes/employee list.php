<?php include 'inc/header.php'; ?>
<?php

include_once "connection.php";


if(!mysqli_connect_errno())
{
	$employees = mysqli_query($con,"SELECT * FROM employee ORDER BY employee_id");

	mysqli_close($con);

}
?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Employee List
                        </h1>
                        <center><p> This is a list for Duty employees who are registered here </p><center>

                          <table class="table table-bordered table-hover"   id="example" class="display" style="width:100%">
	<thead>
		<th>ID</th>
		<th>Name</th>
		
		<th>Gender</th>
		<th>age</th>
		<th>Religion</th>
		<th>Blood Group</th>
		<th>Department Name</th>
		
		<th>Joining Date</th>
		<th>Phone</th>
		<th>Salary</th>
	
		
	
	</thead>
	<tbody>
		<?php
		$sl_no=1;
	 foreach($employees as $employee){ ?>


				<tr>

				<td><?php echo $employee['employee_id'];?></td>

				<td><?php echo $employee['first_name'].' '.$employee['last_name'];?></td>

				<td><?php echo $employee['gender'];?></td>

				<td><?php echo $employee['age'];?></td>

				<td><?php echo $employee['religion'];?></td>

				<td><?php echo $employee['blood_group'];?></td>

				<td><?php echo $employee['department_name'];?></td>

				<td><?php echo $employee['joining_date'];?></td>

				<td><?php echo $employee['phone'];?></td>

				<td><?php echo $employee['salary'];?></td>

				

				

				</tr>
				<?php
				$sl_no++;
	};?>
	</tbody>


</table> <button class="btn btn-primary" onclick="printIt();"><span class="glyphicon glyphicon-print"></span>	Print</button>  
                        
                    </div>
                </div>
                <!-- /.row -->

            

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php include 'inc/footer.php'; ?>
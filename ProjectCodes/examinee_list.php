<?php include 'inc/header.php'; ?>

<?php

include_once "connection.php";


if(!mysqli_connect_errno())
{
	$examinees = mysqli_query($con,"SELECT * FROM exam ORDER BY id");

	mysqli_close($con);

}
?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Examinee List
                        </h1>
                        <center><p> This is a list for examinees who are registered here </p><center>
                        <table class="table table-bordered">
	<thead>
		<th>ID</th>
		<th>Name</th>
		<th>Exam</th>
		<th>Date</th>
	
		
		
	</thead>
	<tbody>
		<?php
		$sl_no=1;
	 foreach($examinees as $examinee){ ?>


				<tr>

				<td><?php echo $examinee['id'];?></td>
				<td><?php echo $examinee['names'];?></td>
				<td><?php echo $examinee['exam'];?></td>
				<td><?php echo $examinee['date'];?></td>

			

				

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
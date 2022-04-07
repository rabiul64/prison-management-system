<?php include 'inc/header.php'; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Enter The Duty Officers ID To Delete!
                        </h1>

                        <?php

$db['hostname'] = "localhost";
$db['username'] = "root";
$db['password'] = "";
$db['database'] = "prison";

// Create connection
$con = mysqli_connect($db['hostname'],$db['username'],$db['password'],$db['database']);

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to Mysql: " . Mysqli_connect_error();
}
         if(isset($_POST['delete'])) {
            
            $officer_id = $_POST['officer_id'];
            
            $sql = "DELETE FROM duty_officer WHERE officer_id = $officer_id" ;
            $retval =mysqli_query($con, $sql);
            
            if(! $retval ) {
               die('Could not delete data: ');
            }
            
            echo "<script>window.location='Duty Officer List.php'</script>";
         }else {
            ?><center>
       
               <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
                     
                     <tr>
                        <td width = "100"> Delete #ID</td>
                  <br>
                        <td><input name = "officer_id" type = "text" 
                           id = "officer_id" class="form-control"  required></td>
                     </tr>
                    
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                     
                     <tr>
                        <td width = "100"> </td>
                        <td><br>
                           <input name = "delete" type = "submit" 
                              id = "delete" class="btn btn-primary" value = "Delete">
                        </td>
                     </tr>
                     
                  </table>
               </form>
             </center>
            <?php
         }
      ?>
                        
                    </div>
                </div>
                <!-- /.row -->

            

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php include 'inc/footer.php'; ?>
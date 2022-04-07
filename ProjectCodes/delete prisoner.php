<?php include 'inc/header.php'; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Enter The Prisoner ID To Delete!
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
                
            $prisoner_id = $_POST['prisoner_id'];
            
            $sql = "DELETE FROM prisoner WHERE prisoner_id = $prisoner_id" ;
            $retval =mysqli_query($con, $sql);
            
            if(! $retval ) {
               die('Could not delete data: ' . mysql_error());
            }
            
            echo "<script>window.location='prisoner list.php'</script>";
         }else {
            ?><center>
             <form method = "post" action = "<?php $_PHP_SELF ?>">
                  <table width = "400" border = "0" cellspacing = "1" 
                     cellpadding = "2">
                     
                     <tr>
                        <td width = "100"> Delete #ID</td>
                        <br>
                        <td><input name = "prisoner_id" type = "text" 
                           id = "prisoner_id"   class="form-control" required></td>
                     </tr>
                    
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                     
                     <tr>
                        <td width = "100"> </td>
                        <td><br>
                           <input class="btn btn-primary" name = "delete" type = "submit" 
                              id = "delete" value = "Delete">
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
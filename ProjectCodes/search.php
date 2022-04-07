<?php include 'inc/header.php'; ?>

<?php
include("connection.php");
   /* @mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
    /*
        localhost - it's location of the mysql server, usually localhost
        root - your username
        third is your password
         
        if connection fails it will stop loading the page and display an error
    */
     
    /*mysql_select_db("prison") or die(mysql_error());
    /* tutorial_search is the name of database we've created */
?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Search Result:
                        </h1>

                        <?php
    $query = $_GET['query']; 
    // gets value sent over search form
     
    $min_length = 0;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        
         
        $raw_results = mysqli_query($con,"SELECT * FROM prisoner
            WHERE (`prisoner_id` LIKE '%".$query."%')");
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysqli_fetch_array($raw_results)){
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
             
                
                
                                    
                            echo'       <table class="table table-bordered">
                                         <thead>
                        <th>ID    &nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>Gender&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>Criminal Type&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>Age&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>Arrival Date&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>Allocated cell&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>Crime Type&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>Blood Group&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        <th>Case No.&nbsp;&nbsp;&nbsp;&nbsp;</th>
                        
                       
                    </thead>
                         
                       ';
                
        
    
            
;?>

<tr>

                <td><?php echo $results['prisoner_id'];?></td>

                <td><?php echo $results['first_name'].' '.$results['last_name'];?></td>

                <td><?php echo $results['gender'];?></td>

                <td><?php echo $results['criminal_type'];?></td>

                <td><?php echo $results['age'];?></td>

                <td><?php echo $results['arrival_date'];?></td>

                <td><?php echo $results['allocated_cell'];?></td>

                <td><?php echo $results['crime_type'];?></td>

                <td><?php echo $results['blood_group'];?></td>

                <td><?php echo $results['address'];?></td>

                <td><?php echo $results['case_no'];?></td>

                

                </tr>
                
                </table>
                
                
            
        <?php    }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
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
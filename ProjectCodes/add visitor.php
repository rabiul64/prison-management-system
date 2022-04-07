<?php include 'inc/header.php'; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-5">
                        <h1 class="page-header">
                           Visitor Registration 
                        </h1>

                        <form class="visitorRegistration"  method="post" action="save_visitorRegistration.php">

     

      <p>
        <label>Last Name</label><br/>
        <input type="text" name="last_name"  required class="form-control">
      </p>

   <p>
        <label>First Name</label><br/>
        <input type="text" name="first_name"  required class="form-control">
      </p>

  <p>
        <label>Mobile</label><br/>
        <input  id="phone" name="mobile" type="tel" required class="form-control">
      </p>
    
    <p>
        <label>Address</label><br/>
        <input type="text" name="address" required  class="form-control">
      </p>


      <p>
        <label>Arrival Date</label><br/>
        <input type="date" name="arrival_date"  required class="form-control">
      </p>
    
    <p>
        <label>Arrival Time</label><br/>
        <input type="text" name="arrival_time"  required class="form-control">
      </p>
    


     <p>
        <label>Visited To</label><br/>
        <input type="text" name="visited_to"  required class="form-control">
      </p>
    
    
   
     <p>
         <label>search prisoner ID</label><br/>
     <input type="text" name="search_prisoner_ID" required  class="form-control">
   </p>  
             

     

      
     <p>
        <input class="btn btn-primary" type="submit" name="submit" value="Submit"/>
      </p>

    </form>
                        
                    </div>
                </div>
                <!-- /.row -->

            

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php include 'inc/footer.php'; ?>
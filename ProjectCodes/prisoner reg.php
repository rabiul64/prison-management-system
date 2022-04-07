<?php include 'inc/header.php'; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="page-header">
                           Prisoner Registration
                        </h1>

                         <form class="PrisonerRegistration"  method="post" action="save_prisoner.php">

     

      <p>
        <label>Last Name</label><br/>
        <input type="text" name="last_name" required class="form-control">
      </p>

   <p>
        <label>First Name</label><br/>
        <input type="text" name="first_name"  required class="form-control">
      </p>


<p>
        <label>Gender</label><br/>
        <input type="radio" name="gender" value="Male" checked="checked" />Male &nbsp;
        <input type="radio" name="gender" value="Female" />Female &nbsp;
        <input type="radio" name="gender" value="Others" />Others &nbsp;
      </p>

       <p>
        <label>Age</label><br/>
        <input type="date" name="age"  required class="form-control">
      </p>

      <p>
        <label>Cell</label><br/>
       <select name="cell"  required class="form-control">
         <option value="General Population">General Population</option>
         <option value="Psychiatric">Psychiatric</option>
         <option value="Military">Military</option>
         <option value="Remand">Remand</option>
         <option value="Political crime">Political crime</option>
         <option value="Others">Others</option>
        
       </select>
     </p>

      <p>
        <label>Blood Group</label><br/>
       <select name="blood_group"  required class="form-control">
         <option value="A Positive">A Positive</option>
         <option value="A Negative">A Negative</option>
         <option value="A Unknown">A Unknown</option>
         <option value="B Positive">B Positive</option>
         <option value="B Negative">B Negative</option>
         <option value="B Unknown">B Unknown</option>
         <option value="AB Positive">AB Positive</option>
         <option value="AB Negative">AB Negative</option>
         <option value="AB Unknown">AB Unknown</option>
         <option value="O Positive">O Positive</option>
         <option value="O Negative">O Negative</option>
         <option value="O Unknown">O Unknown</option>
         <option value="Unknown">Unknown</option>
       </select>
     </p>

       <p>
        <label>address</label><br/>
        <input type="text" name="address"  class="form-control" required>
      </p>

  <p>
        <label>Criminal Type</label><br/>
        <input type="radio" name="criminal_type" value="New" checked="checked" />New &nbsp;
        <input type="radio" name="criminal_type" value="Old" />Old &nbsp;
      </p>

      <p>
        <label>Crime Type</label><br/>
        <input type="radio" name="crime_type" value="Murder" checked="checked" />Murder &nbsp;
        <input type="radio" name="crime_type" value="Rape" />Rape &nbsp;
        <input type="radio" name="crime_type" value="Robbery" />Robbery &nbsp;
        <input type="radio" name="crime_type" value="fordgery" />fordgery &nbsp;
      </p>

      <p>
        <label>Arraival Date</label><br/>
        <input type="date" name="arrival_date"  class="form-control" required>
      </p>

     

     

      <p>
        <label>Allocatd Cell</label><br/>
        <input type="text" name="allocated_cell"  class="form-control" required>
      </p>

     

      <p>
        <label>Case no</label><br/>
        <input type="text" name="case_no"  class="form-control" required>
      </p>
     
     <p>
        <input type="submit" name="submit" class="btn btn-primary" value="Submit"/>
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
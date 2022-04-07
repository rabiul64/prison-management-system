<?php include 'inc/header.php'; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-5">
                        <h1 class="page-header">
                           Employee Registration
                        </h1>

                        <form class="EmployeeRegistration"  method="post" action="save_EmployeeRegistration.php">

     

      <p>
        <label>Last Name</label><br/>
        <input type="text" name="last_name"  required class="form-control">
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
        <label>Religion</label><br/>
        <input type="radio" name="religion" value="Islam" checked="checked" />Islam &nbsp;
        <input type="radio" name="religion" value="Hindu" />Hindu &nbsp;
        <input type="radio" name="religion" value="Buddha" />Buddha &nbsp;
        <input type="radio" name="religion" value="Christian" />Christian &nbsp;
    </p>
      


      <p>
        <label>Blood Group</label><br/>
       <select name="blood_group" required class="form-control">
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
        <label>Department Name</label><br/>
        <input type="text" name="department_name"  required class="form-control">
      </p>
   
    <p>
        <label>Contact NO</label><br/>
        <input type="text" name="phone"  required class="form-control">
      </p>
    
    
    
    
    
      <p>
        <label>Joining Date</label><br/>
        <input type="date" name="joining_date"  required class="form-control">
      </p>

     
       <p>
        <label>Salary</label><br/>
        <input type="text" name="salary"  required class="form-control">
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
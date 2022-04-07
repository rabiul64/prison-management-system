<?php include 'inc/header.php'; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-5">
                        <h1 class="page-header">
                           Add Prisoner Exam
                        </h1>

                        <form class="visitorRegistration"  method="post" action="save_exam.php">

   <p>
        <strong>Name</strong><br/>
        <input type="text" name="name"    required class="form-control">
      </p>

  <p>
        <strong>Date</strong><br/>
        <input type="date" name="dates"    required class="form-control">
      </p>
    
      <p>
        <strong>Exam</strong><br/>
       <select name="examination"   required class="form-control">
         <option value="ssc">Ssc</option>
         <option value="hsc">Hsc</option>
         <option value="honors">Honors</option>
       </select>
     </p>
     <p>
        <input type="submit" class="btn btn-primary" name="submit" value="Submit"/>
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
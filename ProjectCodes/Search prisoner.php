<?php include 'inc/header.php'; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-6">
                        <h1 class="page-header">
                           Search Prisoner
                        </h1>

                         <form action="search.php" method="GET">
        <input type="text" class="form-control" name="query" placeholder="Enter Prisoner ID"  required/><BR>
        <input class="btn btn-primary" type="submit" value="Search" />
    </form>
                        
                    </div>
                </div>
                <!-- /.row -->

            

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
<?php include 'inc/footer.php'; ?>
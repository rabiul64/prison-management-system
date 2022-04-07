  <?php 
   session_start();

   if(isset($_SESSION['login'])){
    echo "<script>window.location='admin_homepage.php'</script>";
  }

   $servername = "localhost";
$username = "root";
$password = "";
$dbname = "prison";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

            if ($_SERVER['REQUEST_METHOD']=='POST') {

              class Recaptcha{
  
  public function __construct(){
        $this->config = require('config.php');
    }

  public function verifyResponse($recaptcha){
    
    $remoteIp = $this->getIPAddress();

    // Discard empty solution submissions
    if (empty($recaptcha)) {
      return array(
        'success' => false,
        'error-codes' => 'missing-input',
      );
    }

    $getResponse = $this->getHTTP(
      array(
        'secret' => $this->config['secret-key'],
        'remoteip' => $remoteIp,
        'response' => $recaptcha,
      )
    );

    // get reCAPTCHA server response
    $responses = json_decode($getResponse, true);

    if (isset($responses['success']) and $responses['success'] == true) {
      $status = true;
    } else {
      $status = false;
      $error = (isset($responses['error-codes'])) ? $responses['error-codes']
        : 'invalid-input-response';
    }

    return array(
      'success' => $status,
      'error-codes' => (isset($error)) ? $error : null,
    );
  }


  private function getIPAddress(){
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) 
    {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
    } 
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) 
    {
     $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } 
    else 
    {
      $ip = $_SERVER['REMOTE_ADDR'];
    }
    
    return $ip;
  }

  private function getHTTP($data){
    
    $url = 'https://www.google.com/recaptcha/api/siteverify?'.http_build_query($data);
    $response = file_get_contents($url);

    return $response;
  }
}

$recaptcha = $_POST['g-recaptcha-response'];

$object = new Recaptcha();
$response = $object->verifyResponse($recaptcha);

              if(isset($response['success']) and $response['success'] != true) {
  echo "An Error Occured and Error code is :".$response['error-codes'];
}else{

   $username =  $_POST['username'];
              $password =  $_POST['password'];


                $sql = "SELECT * FROM user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        if($row["username"]==$username && $row["password"]==$password){
           $_SESSION['login'] = 'true';
          echo "<script>window.location='admin_homepage.php'</script>";
          exit;
        }else{
          echo "<script>alert('Username and Password do not matched')</script>";
        }


    }
} else {
    echo "0 results";
}

              }



              }


              ?>

<html><head>
                                <meta charset="utf-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1">
                                <title>Noakhali Prison Management System </title>
                                <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
                                <style>@import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
.login-block{
    background: #DE6262;  /* fallback for old browsers */
background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to bottom, #FFB88C, #DE6262); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
float:left;
width:100%;
padding : 50px 0;
}
.banner-sec{background:url(https://static.pexels.com/photos/33972/pexels-photo.jpg)  no-repeat left bottom; background-size:cover; min-height:500px; border-radius: 0 10px 10px 0; padding:0;}
.container{background:#fff; border-radius: 10px; box-shadow:15px 20px 0px rgba(0,0,0,0.1);}
.carousel-inner{border-radius:0 10px 10px 0;}
.carousel-caption{text-align:left; left:5%;}
.login-sec{padding: 50px 30px; position:relative;}
.login-sec .copy-text{position:absolute; width:80%; bottom:20px; font-size:13px; text-align:center;}
.login-sec .copy-text i{color:#FEB58A;}
.login-sec .copy-text a{color:#E36262;}
.login-sec h2{margin-bottom:30px; font-weight:800; font-size:30px; color: #DE6262;}
.login-sec h2:after{content:" "; width:100px; height:5px; background:#FEB58A; display:block; margin-top:20px; border-radius:3px; margin-left:auto;margin-right:auto}
.btn-login{background: #DE6262; color:#fff; font-weight:600;}
.banner-text{width:70%; position:absolute; bottom:40px; padding-left:20px;}
.banner-text h2{color:#fff; font-weight:600;}
.banner-text h2:after{content:" "; width:100px; height:5px; background:#FFF; display:block; margin-top:20px; border-radius:3px;}
.banner-text p{color:#fff;}

.login-block {
    background: #DE6262;
    background: -webkit-linear-gradient(to bottom, #FFB88C, #DE6262);
    background: linear-gradient(to bottom, #FFB88C, #DE6262);
    float: left;
    width: 100%;
    padding: 85px 0;
}
</style>
                                <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
                                <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
                                <script type="text/javascript"></script>
                            </head>
                            <body>
                            <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
   <script>
       function onSubmit(token) {
         document.getElementById("demo-form").submit();
       }
     </script>
<!------ Include the above in your HEAD tag ---------->

<section class="login-block">
    <div class="container">
  <div class="row">
    <div class="col-md-4 login-sec">
        <h2 class="text-center">Login Now</h2>
      
        <form class="login-form" method="POST" action="index.php" id="demo-form">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase">Username</label>
    <input type="text" class="form-control" placeholder="" name="username" required>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase">Password</label>
    <input type="password" class="form-control" placeholder=""  name="password" required>
  </div>
  
  
    <div class="form-check">
  
    <button type="submit" class="btn btn-login float-right g-recaptcha submit" data-sitekey="6LdRdmkUAAAAAH565y_92tdR1_GRPOLxtQGmUM7i"
data-callback="onSubmit">Submit</button>
  </div>
  
</form>
<div class="copy-text">Created by <a href="#">Rabiul Islam</a></div>
    </div>
    <div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                 <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
            <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block img-fluid" src="images/image1.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>Manage Prisoners</h2>
            <p>You can Add/Delete Prisoners</p>
        </div>  
  </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="images/image2.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>Manage Duty Officers</h2>
            <p>You can Add/Delete Duty Officers</p>
        </div>  
    </div>
    </div>
    <div class="carousel-item">
      <img class="d-block img-fluid" src="images/image3.jpg" alt="First slide">
      <div class="carousel-caption d-none d-md-block">
        <div class="banner-text">
            <h2>Manage Employees</h2>
            <p>You can Add/Delete Employees</p>
        </div>  
    </div>
  </div>
            </div>     
        
    </div>
  </div>
</div>
</div></section>
                            
                        </body></html>
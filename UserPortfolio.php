<?php
// Connection to Database
include 'config/db.php';
session_start();
if(isset($_SESSION['login_status']))
{  	

  // Session
  $email=$_SESSION['email'];

  // Sql Query
  $id="SELECT * FROM User WHERE Email='$email'"; 
  $result=mysqli_query($check,$id);
  $passans=$result->fetch_array(MYSQLI_ASSOC);

  // Taking data into variables
  $firstName=$passans['First Name'];
  $lastName=$passans['Last Name'];
  $school=$passans['School'];
  $per10=$passans['10th %'];
  $per12=$passans['12th %'];
  $university=$passans['University'];
  $course=$passans['Graduation Course'];
  $html=$passans['html'];
  $css=$passans['css'];
  $java=$passans['java'];
  $bootstrap=$passans['bootstrap'];
  $c=$passans['c'];

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="css/ResponsivePortfolio.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
<title>Responsive</title>
<!-- CSS -->
<style>
header h1{
padding-left: 450px;
padding-bottom:50px;
}
header img
{
padding-top: 50px;
height:300px;
}

@media(max-width:950px)
{
header h3{
    padding-left:0px;
}
header h1{
    padding-left:0px;
}
header img{
   margin-right:0px;
}
}
.styling
{
background-color:red;
color:white;
border:0px;
border-color:red;
}
.btn:hover
{
background-color:green;
border-color:green;
}
.navbar-brand
{
padding-left: 80px;
}
#home
{
background-color: #e9ecef;
}
@media(max-width:950px)
{
.navbar-brand{
    padding-left:0px;
}
}
.about-us h1
{
text-align: center;
padding:3rem;
}
#knowledge h1
{
text-align: center;
padding:3rem;
}
#knowledge
{
margin-bottom:90px;
}
#about img
{
width:100%;
height:50vh;
}
#contact
{
background-color: #343a40;
color: #fff;
}
input
{
padding: 5px;
margin: 5px;
width: 100%;
}
table
{
margin-top:30px;
}
.copyright {
background-color: #343a40;
padding: 10px;
text-align: center;
color: #fff;
}
</style>
</head>
<!-- Content -->
<body>
<!-- Nav Bar -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <a class="navbar-brand" href="#">My Page</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#knowledge">Knowledge</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
    </div>
    <div class="logout">
    <a href="logout.php"><button class="btn my-2 my-sm-0 styling" name="logout">Logout</button></a>
    </div>
  </nav>
  <!-- Home -->
  <section id="home">
    <header>
        <img src="image/des.png" class="rounded mx-auto d-block" alt="..." >
        <h1>Hello I am <?php echo $firstName." ".$lastName?></h1>
    </header>
  </section>
  <!-- About -->
  <section id="about">
      <div class="container about-us">
          <h1>
              About
          </h1>
          <div class="row">
             <div class="col-sm-6">
                <h3>I am <?php echo $firstName." ",$lastName?>.I had completed my Schooling from <?php echo $school?> .I scored <?php echo $per10?>% in Secondary School Examination and <?php echo $per12?>% in Higher Secondary School Examination.Recently pursuing <?php echo $course?> from <?php echo $university?></h3>
             </div>
             <div class="col-sm-6">
              <img src="image/about.jpg">
             </div>
            </div>
          </div>
    </div> 
  </section>
  <hr>
  <!-- Card -->
  <section id="knowledge">
    <div class="container">
      <h1>knowledge</h1>
      <h3>HTML</h3>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: <?php echo $html?>%;" aria-valuenow="<?php $html?>" aria-valuemin="0" aria-valuemax="<?php $html?>"><?php echo $html?>%</div>
      </div>
      <h3>CSS</h3>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: <?php echo$css?>%;" aria-valuenow="<?php $css?>" aria-valuemin="0" aria-valuemax="<?php $css?>"><?php echo $css?>%</div>
      </div>
      <h3>Java</h3>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: <?php echo $java?>%;" aria-valuenow="<?php $java?>" aria-valuemin="0" aria-valuemax="<?php $java?>"><?php echo $java?>%</div>
      </div>
      <h3>Bootstrap</h3>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: <?php echo $bootstrap?>%;" aria-valuenow="<?php $bootstrap?>" aria-valuemin="0" aria-valuemax="<?php $bootstrap?>"><?php echo $bootstrap?>%</div>
      </div>
      <h3>C language</h3>
      <div class="progress">
        <div class="progress-bar" role="progressbar" style="width: <?php echo $c?>%;" aria-valuenow="<?php $c?>" aria-valuemin="0" aria-valuemax="<?php $c?>"><?php echo $c?>%</div>
      </div>
    </div>
  </section>
  <section id="contact">
      <div class="container">
       <div class="row">
         <div class="col-12 col-md-7">
            Name:<br>
            <input type="textbox" id="name"><br>
            Email:<br>
            <input type="email" id="email"><br>
            Pass:<br>
            <input type="password" id="pass"><br>
            <button class="btn btn-primary w-100 my-3">Submit</button>
         </div>
         <div class="col-12 col-md-5">
          <table class="table bg-light">
            <thead>
              <tr>
                <th scope="col"><i class="fab fa-instagram"></i></th>
                <td>Instagram</td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row"><i class="fab fa-facebook"></i></th>
                <td>Facebook</td>
              </tr>
              <tr>
                <th scope="row"><i class="fab fa-twitter"></i></th>
                <td>Twitter</td>
              </tr>
              <tr>
                <th scope="row"><i class="fab fa-github"></i></th>
                <td>Github</td>
              </tr>
            </tbody>
          </table>
         </div>
       </div>
      </div>
        <div class="copyright">
          <p>Copyright <span>&#169</span>| <?php echo $firstName." ",$lastName?></p>
        </div>
    </section>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html> 
<?php }else{
  header('location:home.php');
  echo "hello";
}
?>
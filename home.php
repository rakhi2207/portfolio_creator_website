<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Do+Hyeon&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Portfolio Creator</title>
    <style>
*
{
    padding:0px;
    margin:0px;
    box-sizing: border-box;
}
body
{
    background-image:url(image/bghome.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
}
.divider
{
    border-color:rgb(226, 52, 52);
    border-width: 10px;
    margin-left:180px;
    margin-right:180px;
}
.style
{
  color:red;
  font-family: 'Do Hyeon', sans-serif;
  font-size: 50px;
  align-items: center;
  margin-top:150px;
}
.filter
{
    background-color:rgba(92, 77, 66, 0.5);
    position:absolute;
    width:100%;
    height:100%;
}
.portfolio
{
    margin-bottom:-100px;
    color:white;
    font-family: 'Do Hyeon', sans-serif;
    font-family: 'Hammersmith One', sans-serif;
    font-family: 'Russo One', sans-serif;
    font-family: 'Sansita Swashed', cursive;
}
.btn
{
    background-color: orange;
    border: 0px;
    margin-left:20px;
}
.btn:hover
{
    opacity:0.5;
}
    </style>
  </head>
  <body>
      <div class="filter">
            <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
                <div class="col-lg-10 align-self-end portfolio">
                    <h1 class="text-uppercase  font-weight-bold">Portfolio Creator</h1>
                    <hr class="divider">
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <p class="text-white-75 font-weight-light mb-5 style">
                        Come! Both of us will make your portfolio more smarter.
                    </p>
                    <?php
                            include 'config/db.php';
                            session_start();

                    if(!isset($_SESSION['login_status']))
                    {
                        echo '<a class="btn  btn-xl js-scroll-trigger" href="portfoliosignup.php">Sign up</a>';
                        echo '<a class="btn btn-xl js-scroll-trigger" href="portfoliosignin.php">Sign in</a>';                        
                    }else if($_SESSION['email']=="admin@gmail.com"&&$_SESSION['password']=='admin1'&&isset($_SESSION['login_status']))
                    {
                        $_SESSION['email'];
                        $_SESSION['password'];
                        $id="SELECT * FROM User" ; 
                        $result=mysqli_query($check,$id);
                        echo  "<table class='table table-dark table-striped table-hover'><thead><tr><th scope='col'>ID</th><th scope='col'>Name</th>
                            <th scope='col'>Email</th>
                            <th scope='col'>School</th>
                            <th scope='col'>10th %</th>
                            <th scope='col'>12th %</th>
                            <th scope='col'>Uniersity</th>
                            <th scope='col'>Graduation Course</th>
                            <th scope='col'>html</th>
                            <th scope='col'>css</th>
                            <th scope='col'>java</th>
                            <th scope='col'>bootstrap</th>
                            <th scope='col'>c</th>
                          </tr>
                        </thead>";
                        while($row = $result->fetch_array(MYSQLI_ASSOC))

                            {
                                echo "<tbody><tr><th scope='row'>" . $row["ID"]. "</th><td>" . $row["First Name"]. " " . $row["Last Name"]. "</td><td>".$row["Email"]."</td><td>".$row["School"]."</td><td>".$row['10th %']."</td><td>".$row['12th %']."</td><td>".$row['University']."</td><td>".$row['Graduation Course']."</td><td>".$row['html']."</td><td>".$row['css']."</td><td>".$row['java']."</td><td>".$row['bootstrap']."</td><td>".$row['c']."</td></tr>";
                                // echo "<tbody><tr><th scope=".$row["ID"].">1</th><td>". $row["First Name"]. " " . $row["Last Name"]."</td><td>"."</td><td>".$row["Email"]."</td><td>".$row["School"]."</td><td>".$row["10th %"]."</td><td>"$row["12th %"]."</td><td>".$row["University"]."</td><td>".$row["Graduation Course"]."</td><td>".$row["html"]."</td><td>".$row["css"]."</td><td>".$row["java"]."</td><td>".$row["bootstrap"]."</td><td>".$row["c"]."</td></tr>";
                            }
                            echo "</table><br>";
                            echo '<a href="logout.php"><button class="btn my-2 my-sm-0 styling" name="logout">Logout</button></a>';
                    }else
                    {
                        $email=$_SESSION['email'];
                        $id="SELECT * FROM User WHERE Email='$email'"; 
                        $result=mysqli_query($check,$id);
                        $passans=$result->fetch_array(MYSQLI_ASSOC);
                        $firstname=$passans['First Name'];
                        $lastname=$passans['Last Name'];
                        echo "<p style='color:blue;font-size:40px;'>Welcome ".$firstname." ".$lastname."<br>"."<br>"."</p>";
                    echo '<a class="btn btn-xl js-scroll-trigger" href="UserPortfolio.php">Profile</a>';
                    echo '<a href="logout.php"><button class="btn my-2 my-sm-0 styling" name="logout">Logout</button></a>';                        
                    echo '<a href="update.php"><button class="btn my-2 my-sm-0 styling" name="update">Update</button></a>';                        
                    echo '<a href="delete.php"><button class="btn my-2 my-sm-0 styling" name="delete" >Delete</button></a>';                        
                    }
                    ?>
                </div>
            </div>
        </div>
            <!-- Optional JavaScript; choose one of the two! -->

            <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
      </div>
  </body>
</html>
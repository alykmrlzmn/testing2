<?php
include 'db.php';
session_start();


if(isset($_SESSION['userid']))
{

  $curuser = $_SESSION['userid'];
  if($conn)
  {
?>

<html>

<!--<style type="text/css">
td{
  padding: 20px;
}

footer{
  background-color: white;
  width: 101%;
  height: 100px;
  margin-left: -10px;
  margin-bottom: -10px;
  margin-top: 100px;
}

nav{
  margin-top: -10px;
  margin-left: -10px;
  width: 101%;
  height: 101px;
  background: white;
  overflow: auto;
}




img.logo{
    padding: 5px;

  width: 4%;
  position: absolute;
  margin-top: 4px;

margin-right: auto;
margin-left: 20px;
display: block;
}

.btn2{

  margin-top: 10px;
  float: left;
  font-family: Century Gothic;
  font-size: 20px;

}

nav a{
  padding: 0px;
  display: block;
  padding: 30px 15px;
  text-decoration: none;
  font-family: Century Gothic;
  color: grey;
  text-align: center;
}

nav a:hover{
  background: grey;
  transition: 0.5s ease;
  color: white;
}

ul{
  margin-top: 2px;
  padding: 0;
  margin: 0 0 0 150px;
  list-style: none;
}

form.cat{
  width: 900px;
  background-color: white;
  box-shadow: 2px 2px 25px grey;
}

.btn3{
  float: right;

  font-size: 20px;
}



h2{
  font-family: Century Gothic;
  font-size: 40px;
}

td{
  font-family: Century Gothic;
  font-size: 20px;
}

input.buy{
  border: 0px;
  padding-left: 20px;
  padding-right: 20px;
  padding-top: 10px;
  padding-bottom: 10px;
}

input.buy:hover{
  background-color: grey;
  color: white;
  transition: 0.5s ease;
}

p.ft{
  padding: 30px; 
    font-family: Century Gothic;
  font-size: 15px;
  font-style: italic;
  color: grey;
}

div.gg{
  width: 900px;
  height: 670px;
  background-color: white;
  font-family: Century Gothic;
}

td.aa{
  font-weight: bold
}

input.bb{
  width: 100px;
  padding-top: 8px;
  padding-bottom: 8px;
  padding-left:30px;
  padding-right: 30px;
  border: 0px;
  font-size: 15px;
}

input.bb:hover{
  background-color: grey;
  color: white;
  transition: 0.5s ease;
}

input{
  width: 400px;
  padding: 10px;
}
</style>
<head> -->
<div class="a">
    <a href="userdashboard.php"><img class="logo" src="logo.png"></a>    
 </div>

 <nav>
  <ul>
    <li><a class="btn2 " href="userdashboard.php">Home</a></li>
    <li><a class="btn2 " href="useraccount.php">Account</a></li>
    <li><a class="btn2" href="about.php">About</a></li>
    <li><a class="btn2 btn3" href="userlogout.php">logout</a></li>
  </ul>
 </nav>
</head> 




<body>
<center>
  <br><br><br><br><br>
  <div class="gg">
    <br><Br>
    <h1>My Account<h1>
    <?php
      $sql = "SELECT `first_name`, `last_name`, `city_name`, `email`, `passw` FROM `employee` WHERE userid='".$curuser."' limit 1";
      $result = mysqli_query($conn,$sql);
      if(mysqli_num_rows($result)==1)
      {
        while($row = mysqli_fetch_array($result))
        {
        echo "<form method='post' action='update-process-3.php'>
        <table>";
        echo "<tr>";
        echo "<td class='aa'>First Name:</td>";
        echo "<td><input type='text' name='first_name' placeholder=".$row['first_name']." required>";
        
        echo "</tr>";
        echo "<tr>";
        echo "<td class='aa'>last Name :</td>";
        echo "<td><input type='textarea' name='last_name' placeholder=".$row['last_name']." required>";
        echo "</tr><tr>";
        echo "</tr>";
         echo "<td class='aa'>City Name :</td>";
        echo "<td><input type='text' name='city_name' placeholder=".$row['city_name']." required>";
        echo "<tr>";
        echo "</tr>";
         echo "<td class='aa'>Email :</td>";
        echo "<td><input type='text' name='email' placeholder=".$row['email']." required>";
        echo "<tr>";
        echo "</tr>";
        echo "</table><br><br>
        
        <input class='bb' type='submit' name='submit' value='Save'>
              <input type='hidden' name='id' value=".$row['userid']."> 
                </form>";
      }

      }
      ?>
      
  <?php
}
    ?>

    <br><br>
  </div>
</center>


</body>

</html>

<?php
}



?>



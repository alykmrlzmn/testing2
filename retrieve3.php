<?php
include_once 'db.php';

?>

<!DOCTYPE html>
<html>
 <head>
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> 
 <title> Retrive data</title>
 <style>
 table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;

}

tr:nth-child(even) {
    background-color: white;
}
</style>
 </head>
<body>
  <table>
  
  <tr>
    <td>First Name</td>
    <td>Last Name</td>
    <td>City</td>
    <td>Email id</td>
    <td>Button</td>
    <td>Action</td>

  </tr>


<?php
$result = mysqli_query($conn,"SELECT * FROM employee");



if (mysqli_num_rows($result) > 0) {


    $i=0;
    while($row = mysqli_fetch_array($result)) {

          $fname = $row["first_name"];
          $lname = $row["last_name"];
          $city = $row["city_name"];
          $email = $row["email"];
?>
        <tr>
        <td><?php echo $fname; ?></td>
        <td><?php echo $lname; ?></td>
        <td><?php echo $city; ?></td>
        <td><?php echo $email; ?></td>
         <td><i class="fas fa-volume-up" onclick="word<?php echo $i; ?>()"></i>
        <script>
          /* JS comes here (tukar kat sini yg text tu) */
                function word<?php echo $i; ?>(<?php $row["first_name"] ?>){
                  var msg = new SpeechSynthesisUtterance();
            msg.volume = 1; // From 0 to 1
            msg.rate = 1; // From 0.1 to 10
            msg.pitch = 1; // From 0 to 2
            msg.text = '<?php echo $row["first_name"]; ?>' ;
            msg.lang = 'en-US';
            speechSynthesis.speak(msg);
              }
        </script></center> </td> 

    </tr>
<?php    
    $i++;
    }

}

else{
    echo "No result found";
}

?>



  
</table>

 </body>
</html>
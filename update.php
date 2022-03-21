<?php
include_once 'db.php';
$result = mysqli_query($conn,"SELECT * FROM employee");
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Retrive data</title>
   <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> 
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>
	  <tr>
	    <td>Sl No</td>
		<td>First Name</td>
		<td>Last Name</td>
		<td>City</td>
		<td>Email id</td>
		<td>Pronunciation</td>
		<td>Action</td>
	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	  <td><?php echo $row["userid"]; ?></td>
		<td><?php echo $row["first_name"]; ?></td>
		<td><?php echo $row["last_name"]; ?></td>
		<td><?php echo $row["city_name"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
		
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

		    <td>
              <a href="retrieve.php?id='. $row['userid'] .'" class="mr-3" title="View Record" data-toggle="tooltip"><span class="fa fa-eye"></span></a>
              <a href="update-process-3.php?id='. $row['userid'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>
              <a href="delete.php?id='. $row['id'] .'" class="mr-3" title="Delete Record" data-toggle="tooltip"><span class="fa fa-trash"></span></a>
                                       
        

    </td>
		 
     
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
 </body>
</html>
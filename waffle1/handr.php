<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Project" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
    <script
      src="https://kit.fontawesome.com/fa62c117c7.js"
      crossorigin="anonymous"
    ></script>
    
    <title>Quest Compass</title>
    <link rel="stylesheet" href="index.css"/>
    <link rel="stylesheet" href="global.css"/>
    <link rel="stylesheet" href="find.css"/>
    <script defer src="source.js"></script>

</head>
<?php

  $host = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "waffle";
  $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
  $con = mysqli_connect("localhost","root","","waffle") or die("connection failed !");
  $sql = "SELECT * from handr";
  $result = mysqli_query($conn, $sql);
  ?>
<script>
function fun()
{
    location.assign('http://Booking.com')
}
    </script>
<body> 

        <h2 class="title">Top Rated Hotels in Goa</h2>
        
<?php while($rows=mysqli_fetch_assoc($result)) 
{ 
?>
<tr> 
    <td>
        <div class="rectangle-parent">
        <div class="group-child">
        <div class="group-item"></div>
        <img class="image-1-icon" alt="" src="<?php echo $rows['Himage'];?>" />

        <p class="description" id="para"><?php echo $rows['Hotels'];?></p>
        <div class="location"><?php echo "Goa";?></div>
        <img class="group-inner" alt="" src="./public/group-703.svg" />
      
      <button class="btn" onclick="fun()">
        Reserve
      </button> 

      </div>
      </div> 
      </td>
</tr>

    <?php 
        } 
        ?>
<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "waffle";
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
$con = mysqli_connect("localhost","root","","waffle") or die("connection failed !");
$sql = "SELECT * from handr";
$result = mysqli_query($conn, $sql);
?>

<h2 class="title">Top Rated Restaurants in Goa</h2>
        
<?php while($rows=mysqli_fetch_assoc($result)) 
{ 
?>
<tr> 
    <td>
        <div class="rectangle-parent">
        <div class="group-child">
        <div class="group-item"></div>
        <img class="image-1-icon" alt="" src="<?php echo $rows['Rimage'];?>" />

        <p class="description" id="para"><?php echo $rows['Restaurants'];?></p>
        <div class="location"><?php echo "Goa";?></div>
        <img class="group-inner" alt="" src="./public/group-703.svg" />
      
      <button class="btn" onclick="fun()">
        Reserve
      </button> 

      </div>
      </div> 
      </td>
</tr>

    <?php 
        } 
        ?>

</body>
</html>
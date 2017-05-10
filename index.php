<!DOCTYPE html>
 <html>
 <head>
  <title>PHP Starter Application</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="style.css" />
 </head>
 <body>
  <h1 style="text-align:center;">Productos</h1>
  <table>
   <?php
  $servername = "us-cdbr-iron-east-03.cleardb.net";
  $username = "bfb29bf957d2bf";
  $password = "5f7915c8";
  $dbname = "ad_8e9e7dd597e550c";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * from Productos";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {?>
      <tr>
      <td><?php echo $row['idProductos']?></td>
      <td><?php echo $row['nombre']?></td>
      <td><?php echo $row['categoria']?></td>
       <td><?php echo $row['precio']?></td>
      </tr>
     <?php }
  } else {
      echo "0 results";
  }
  $conn->close();
 ?> 
 </table>
 </body>
 </html>
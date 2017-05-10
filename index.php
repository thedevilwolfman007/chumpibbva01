<!DOCTYPE html>
 <html>

 <body>
  <h1 style="text-align:center;">Servicios</h1>
  
  <div name="middle" align="center">
  <table>
   <?php
  $servername = "us-cdbr-iron-east-03.cleardb.net";
  $username = "b74ba3320e82ec";
  $password = "2d194843";
  $dbname = "ad_bb6ddb2f34daf52";
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * from servicios";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
  	?>
			<tr>
				<th>Codigo</th>
				<th>Nombre</th>
				<th>Descripcion</th>
				<th>Imagen</th>
			</tr>
 	<?php

     
      // output data of each row
      while($row = $result->fetch_assoc()) {?>
      <tr>
	      <td><?php echo $row['codigo_servicio']?></td>
	      <td><?php echo $row['nombre_servicio']?></td>
	      <td><?php echo $row['descripcion_servicio']?></td>
	      <td><img src="<?php echo $row['imagen_servicio']?>"/></td>
      </tr>
     <?php }
  } else {
      echo "0 results";
  }
  $conn->close();
 ?> 
 </table>
 </div>
 </body>
 </html>


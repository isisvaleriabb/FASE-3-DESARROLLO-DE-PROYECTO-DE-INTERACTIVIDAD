<?php
include('connection.php');

$con = connection();

$sql = "SELECT * FROM users";
$query =mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
   <head>
      <title>Mr.Barber</title>
      <link href="estilo.css" rel="stylesheet" type="text/css"/>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
    
<ul>
 <li><a href="index.html">Página principal</a></li>
  <li><a href="barberia.html">Nuestra Barbería</a></li>
  <li><a href="menu.html">Menú de servicios</a></li>
  <li><a href="catalogo.html">Catálogo</a></li>
   <li><a href="productos.php">Productos Mr.Barber</a></li>
</ul>

   <nav class="navbar navbar-light bg-light">
  <a class="navbar-brand">
   <Br> <center> <img src="img/logo.png" width="250px" height="200px"></center>
  </a>
</nav>


      <div class="container-fluid pb-5 portfolio-text">
         <div class="row">
            <div class="col-md-7 offset-md-1 col-sm-12">
               <center><h2>Productos Mr.Style</h2></center><br></br>

                  <div class="row">
            <div class="col-md-7 offset-md-1 col-sm-12">
               <p class="pb-5 pt-5"><center>


           <img src="img/minox1.jpeg" width="250px" height="350px" HSPACE="100" VSPACE="10"><img src="img/minox2.jpeg" width="300px" height="350px" HSPACE="100" VSPACE="10"><img src="img/minox3.jpeg" width="250px" height="350px" HSPACE="50" VSPACE="10"> </center></p></div></div>

             <p class="pb-5 pt-5">
               <h4>   <center> ¿Te interesan los productos Mr.Style? <br></h4> <br> <center>Déjanos tu información en la parte de abajo!</center>
               </p>

               <body>
                <div>
                    <form action="pedidoclientes" metohd="POST">
                     <center>   <h2> Agrega tu información para realizar un pedido </h2> </center>

                        <input type="text" name="name" placeholder="Nombre (s)">
                        <input type="text" name="apellido" placeholder="Apellido">
                        <input type="text" name="email" placeholder="Correo Electrónico">
                        <input type="text" name="telefono" placeholder="Número de teléfono">
                        <input type="text" name="order" placeholder="Pedido">

                        <input type="submit" value="Agregar Pedido">
</form>
</div>

<div>
    <h4>Pedidos Registrados</h4>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre (s)</th>
                <th>Apellido</th>
                <th>Correo Electrónico</th>
                <th>Número de teléfono</th>
                <th>Pedido</th>
                <th></th>
                <th></th>
</thead>
        <tbody>
         <?php while($row = mysqli_fetch_array($query));?>
         <tr>
         <th><?=$row['id']?></th>
            <th><?=$row['name']?></th>
            <th><?=$row['apellido']?></th>
            <th><?=$row['email']?></th>
            <th><?=$row['telefono']?></th>
            <th><?=$row['order']?></th>

            <th><a href="">Editar</a></th>
            <th><a href="">Eliminar</a></th>
           
         </tr>
</tbody>
</table>
</div>
</body>
</html>


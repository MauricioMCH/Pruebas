
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Compiled and minified Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
<!-- Minified JS library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Compiled and minified Bootstrap JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" ></script>

 <div class="container">
  <div class="starter-template">
  <br><br>
    <div class="jumbotron" style="background-color:seagreen !important;">
    <!--implementacion de jumbotron para mostrar informacion-->
    <div class="container">

    <h1 style="color: white"><strong>COMPRAS</strong> </h1>
    
    <p style="color: gray"> Cliente
 </p>
    <p>
    <a href="index.php" class="btn btn-primary btn-lg">Cerrar sesión</a>
    <!--boton que nos lleva al index de nuevo-->
    </p>
         
  </div>
</div>
</div>
</div>

<body>
<br><br>

<table class="table table-responsive">
<form name="form1" action="total.php"  method="post">
    <!--Tabla con un form de checkbox donde tenemos valores 
        que se sumaran al elegir uno o varios, con action que nos llevara
        a total.php donde imprimiremos el resultado-->

    <thead>
        <tr>
            <th>Producto</th>
            <th>precio</th>
            <th>Comprar</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><img src="imagenes/1.jpg" height="200" width="200" class="imagen" /> </td>
            <td>$299</td>
            <td><input type="checkbox"  name="checkbox[]" value="299"></td>
        </tr>
        <!--3 columnas donde tenemos una imagen, el precio como informacion y un
            checckbox en la espera de ser seleccioado con un valor de 299-->


        <tr>
            <td><img src="imagenes/2.jpg" height="200" width="200" class="imagen" /></td>
            <td>$250</td>
            <td><input type="checkbox" name="checkbox[]" value="250"></td>
        </tr>
        <tr>
            <td><img src="imagenes/3.jpg" height="200" width="200" class="imagen" /></td>
            <td>$600</td>
            <td><input type="checkbox" name="checkbox[]" value="600"></td>
        </tr>
        <tr>
            <td><img src="imagenes/4.jpg" height="200" width="200" class="imagen" /></td>
            <td>$799</td>
            <td><input type="checkbox" name="checkbox[]" value="799"></td>
        </tr>
        <tr>
            <td><img src="imagenes/5.jpg" height="200" width="200" class="imagen" /></td>
            <td>$499</td>
            <td><input type="checkbox" name="checkbox[]" value="499"></td>
        </tr>
        <tr>
            <td><img src="imagenes/6.jpg" height="200" width="200" class="imagen" /></td>
            <td>$700</td>
            <td><input type="checkbox" name="checkbox[]" value="700"></td>
        </tr>
          </tbody>
</table>
</body>

<div class="col-sm-7"></div>	         
  <p>
    <input type="submit"  class="btn btn-primary btn-lg " name="submit" value="TOTAL A PAGAR">
    <input type="reset" class="btn btn-default btn-lg" value="Eliminar productos">
    <!--Dos botones, el primero tipo submit para enviar la informacion del formulario
        y el segundo boton de tipo reset para limpiar los valores seleccionados-->
</p>
</form>  
</div>

 
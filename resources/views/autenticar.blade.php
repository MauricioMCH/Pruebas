
<html>


<nav class="navbar navbar-succes bg-success">
  <a class="navbar-brand" href="#">
    Frameworks
  </a>
</nav>
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<div class="container">
<div class="starter-template">
<br><br><br>

<div class ="row">
<div class="col-md-4 col-md-offset-4">
<br><br>

<body>
....@if (session('error'))
.....<div>
 ..... {{session('error') }}
.....</div>
<br>
@endif

<div class="panel panel-default">
   <div class="panel-body">
 <!--Estructura de nuestro login-->

   <legend>Login</legend>

<form  action="validar" method="post" role="form">
    @csrf
  <!--Por medio de un formulario con el metodo GET haremos que nuestros imput
      se envien a usuario.php para que pasen por las condiciones-->
<br>

<div class="form-group">
    <label>Usuario</label>
    <input type="text" REQUIRED name="usuario"  class="form-control" autofocus requiered placeholder="Ingrese usuario">
</div>

<div class="form-group">
    <label>Contraseña</label>
    <input type="password"  name="password" class="form-control"  placeholder="****">
</div>

<button type="submit"  class="btn btn-success">Ingresar</button>
<!--Boton tipo submit para accionar el formulario-->
</form>
   </div>
</div>

</div>
</div>
</div>
</div>
</body>

</html>

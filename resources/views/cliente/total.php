<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> <!--Implementacion de estilo bootstrap-->
<br><br> <!--espacios-->

<table width="50%"  border="4" cellspacing="0" cellpadding="2" class="table table-responsive"> <!--Tabla responsiva-->
 <tbody>
        <tr>
            <td><h1>Total a pagar</h1> </td>
            <td><h1>

            <?php

if(isset($_POST['submit'])){
 
$checkbox = $_POST['checkbox']; // Devuelve un array que contiene los valores de los campos activos

$suma = 0;

if(count($checkbox) == 0){ //si no se selecciona ningun producto entonces te redirige a la misma pagina
    header("location: cliente.php"); 
     }

else{ 
foreach($checkbox as $valor){ // Recorre el array

$suma += $valor; // suma los valores encontrados
}

}
echo $suma;   //impresion del precio
} 

?></h1>
    </td></tr>
       </tbody>
</table>

<p>
    <a href="cliente.php" class="btn btn-primary btn-lg">Volver a catalogo</a> 
    <!--Boton para volver a cliente y realizar una nueva operacion-->
    </p>








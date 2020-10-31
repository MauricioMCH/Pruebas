@extends('layouts.diseño')

@section('content')
@switch($categoria)
@case(1)
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<a></a>
<div>
    <p>NOMBRE DE LA SECCION: <strong> ELECTRONICA</strong>.</p>
</div>
<div>
    <p>DESCRIPCION DE LA SECCION: <strong> DESCRIPCION DE ELECTRONICA</strong>.</p>
    </div>
<a href="/categorias" type="button" class="btn btn-success">REGRESAR</a>

    @break
@case(2)
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<a></a>
<div>
    <p>NOMBRE DE LA SECCION: <strong> ELECTRODOMESTICOS</strong>.</p>
</div>
<div>
    <p>DESCRIPCION DE LA SECCION: <strong> DESCRIPCION DE ELECTRODOMESTICOS</strong>.</p>
    </div>
<a href="/categorias" type="button" class="btn btn-success">REGRESAR</a>

    @break
@case(3)
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<a></a>
<div>
    <p>NOMBRE DE LA SECCION: <strong>ROPA</strong>.</p>
</div>
<div>
    <p>DESCRIPCION DE LA SECCION: <strong> DESCRIPCION DE ROPA</strong>.</p>
    </div>
<a href="/categorias" type="button" class="btn btn-success">REGRESAR</a>

    @break

@endswitch
@endsection

@extends('layouts.diseño')

@section('title', 'Page Title')


@section('content')

@csrf


<input  name="Categoria" type="text" placeholder="nombre de la categoria">
<input name="Descripcion" type="text" placeholder="Descripcion">

<a href="/categorias" type="button" class="btn btn-success">Enviar</a>
</form>
@endsection
@extends('layouts.diseño')

@section('content')
@switch($categoria)
@case(1)

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<a>EDITAR</a>
<div class="container" style="width: 48rem;">
     <form>
       <div class="row" >
        <div class="col-lg-9">
            <div class="col-lg-8"><label>Nombre de la seccion: </label>
                <textarea id="Categoria" class="form-control" name="Categoria" rows="4"></textarea>
               </div>
               <div class="col-lg-8"><label>Descripcion de la seccion: </label>
                <textarea id="Descripcion" class="form-control" name="Descripcion" rows="4"></textarea>
               </div>
        </div>

       </div>
       <a href="/categorias" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">ENVIAR</a>
     </form>
   </div>

    @break
@case(2)
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<a>EDITAR</a>
<div class="container" style="width: 48rem;">
    <form>
      <div class="row" >
       <div class="col-lg-9">
           <div class="col-lg-8"><label>Nombre de la seccion: </label>
               <textarea id="Categoria" class="form-control" name="Categoria" rows="4"></textarea>
              </div>
              <div class="col-lg-8"><label>Descripcion de la seccion: </label>
               <textarea id="Descripcion" class="form-control" name="Descripcion" rows="4"></textarea>
              </div>
       </div>

      </div>
      <a href="/categorias" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">ENVIAR</a>
    </form>
  </div>
    @break
@case(3)
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<a>EDITAR</a>
<div class="container" style="width: 48rem;">
    <form>
      <div class="row" >
       <div class="col-lg-9">
           <div class="col-lg-8"><label>Nombre de la seccion: </label>
               <textarea id="Categoria" class="form-control" name="Categoria" rows="4"></textarea>
              </div>
              <div class="col-lg-8"><label>Descripcion de la seccion: </label>
               <textarea id="Descripcion" class="form-control" name="Descripcion" rows="4"></textarea>
              </div>
       </div>

      </div>
      <a href="/categorias" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">ENVIAR</a>
    </form>
  </div>



    @break

@endswitch
@endsection
